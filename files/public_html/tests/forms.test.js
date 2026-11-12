// Run with PHP_BINARY pointing to PHP 8.2+, for example node tests/forms.test.js.
// SMTP is simulated on localhost; no real email is sent.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const net = require('node:net');
const cp = require('node:child_process');
const { once } = require('node:events');
const { setTimeout: delay } = require('node:timers/promises');
const os = require('node:os');
const vm = require('node:vm');
const root = path.resolve(__dirname, '..');
const php = process.env.PHP_BINARY || 'php';
assert.ok(!fs.existsSync(path.join(root, 'config/mail.local.php')), 'Move your private mail.local.php outside the project before running SMTP simulation tests, so real SMTP settings cannot override the test server. Restore it afterwards.');
const rules = JSON.parse(cp.execFileSync(php, ['-r', "echo json_encode(require 'config/forms.php');"], { cwd: root, encoding: 'utf8' }));
const { validate, fileError } = require('../assets/js/forms.js');
const valid = { form_kind: 'enquiry', name: "O'Connor 王", email: 'writer@example.test', phone: '+44 (20) 1234-5678', message: 'Please help me publish my manuscript.' };
function recipients(to, additional, fallback = 'fallback@example.test') {
  return JSON.parse(cp.execFileSync(php, ['-r', "require 'server/form-mailer.php'; $input = json_decode($argv[1], true); echo json_encode(form_mail_recipients($input[0], $input[1]));", JSON.stringify([{ to_email: to, additional_to_emails: additional }, { email: fallback }])], { cwd: root, encoding: 'utf8' }));
}
assert.deepEqual(recipients('owner@gmail.com', []), ['owner@gmail.com']);
assert.deepEqual(recipients('', []), ['fallback@example.test']);
assert.deepEqual(recipients('inbox@example.test', ['owner@gmail.com', 'INBOX@example.test']), ['INBOX@example.test', 'owner@gmail.com']);
assert.deepEqual(recipients('inbox@example.test', ['invalid-address']), []);
assert.deepEqual(recipients('inbox@example.test', ['owner@gmail.com\r\nBcc: injected@example.test']), []);
assert.deepEqual(recipients('inbox@example.test', 'not-an-array'), []);
assert.deepEqual(validate(valid, rules), {});
assert.deepEqual(validate({ form_kind: 'journal', email: valid.email }, rules), {});
for (const [field, value] of [['name', 'A'], ['name', 'x'.repeat(101)], ['email', 'bad email'], ['phone', '123'], ['phone', '+1234567890123456'], ['phone', '1234567\ninjected'], ['message', 'short'], ['message', 'x'.repeat(5001)]]) {
  assert.ok(validate({ ...valid, [field]: value }, rules)[field], field + ' should fail');
}
assert.equal(fileError({ name: 'sample.pdf', type: 'application/pdf', size: 1024 }, rules), '');
assert.equal(fileError({ name: 'sample.PDF', type: '', size: 10 }, rules), '');
for (const file of [{ name: 'bad.exe', type: '', size: 10 }, { name: 'bad.pdf', type: 'text/plain', size: 10 }, { name: 'empty.pdf', type: '', size: 0 }, { name: 'big.pdf', type: '', size: rules.upload_max_bytes + 1 }]) assert.ok(fileError(file, rules));

async function clientSubmissionFlow() {
  const nodes = [], events = {}, fields = {};
  const element = () => ({ attributes: {}, textContent: '', className: '', setAttribute(key, value) { this.attributes[key] = value; }, getAttribute(key) { return this.attributes[key] || null; }, removeAttribute(key) { delete this.attributes[key]; } });
  for (const key of ['form_kind', 'name', 'email', 'phone', 'message']) {
    const wrapper = { appendChild(node) { nodes.push(node); } };
    fields[key] = Object.assign(element(), { name: key, type: key === 'form_kind' ? 'hidden' : 'text', value: key === 'form_kind' ? 'enquiry' : '', closest: () => wrapper, focus() { this.focused = true; } });
  }
  const status = element(), button = { disabled: false };
  const form = Object.assign(element(), {
    action: 'https://local.test/api/contact.php',
    elements: { namedItem: key => fields[key] || null },
    querySelector(selector) { if (selector === '[data-form-status]') return status; if (selector === '[aria-invalid="true"]') return Object.values(fields).find(field => field.attributes['aria-invalid'] === 'true'); return null; },
    querySelectorAll: () => [button],
    addEventListener(name, callback) { events[name] = callback; },
    reset() { this.didReset = true; },
  });
  let requests = 0, completeRequest;
  const window = {
    SiteFormRules: rules, setTimeout, clearTimeout,
    document: { querySelectorAll: () => [form], createElement: element, getElementById: id => nodes.find(node => node.id === id) },
    fetch() { requests++; return new Promise(resolve => completeRequest = resolve); },
  };
  vm.runInNewContext(fs.readFileSync(path.join(root, 'assets/js/forms.js'), 'utf8'), { window, FormData: class {}, AbortController });
  let prevented = false;
  events.submit({ preventDefault() { prevented = true; } });
  assert.equal(prevented, true);
  assert.equal(requests, 0);
  assert.equal(fields.name.attributes['aria-invalid'], 'true');
  assert.equal(fields.name.focused, true);
  for (const [key, value] of Object.entries(valid)) fields[key].value = value;
  const event = { preventDefault() {} };
  events.submit(event);
  events.submit(event);
  assert.equal(requests, 1, 'Repeated clicks must not duplicate requests');
  assert.equal(button.disabled, true);
  completeRequest({ ok: false, json: async () => ({ success: false, message: 'Check your email.', errors: { email: 'Invalid email.' } }) });
  await delay(0);
  assert.equal(button.disabled, false);
  assert.equal(form.didReset, undefined);
  assert.equal(fields.email.attributes['aria-invalid'], 'true');
  assert.equal(status.textContent, 'Check your email.');
  events.submit(event);
  completeRequest({ ok: true, json: async () => ({ success: true, message: 'Sent successfully.' }) });
  await delay(0);
  assert.equal(form.didReset, true);
  assert.equal(status.textContent, 'Sent successfully.');
  assert.equal(button.disabled, false);
}

async function freePort() {
  const server = net.createServer();
  server.listen(0, '127.0.0.1');
  await once(server, 'listening');
  const port = server.address().port;
  await new Promise(resolve => server.close(resolve));
  return port;
}

(async function () {
  await clientSubmissionFlow();
  const temporaryDirectory = fs.mkdtempSync(path.join(os.tmpdir(), 'site-form-tests-'));
  const messages = [], sockets = new Set();
  let smtpFailure = false, phpServer, phpLogs = '';
  const smtp = net.createServer(socket => {
    sockets.add(socket);
    socket.on('close', () => sockets.delete(socket));
    socket.write('220 localhost SMTP test server\r\n');
    let pending = '', data = false, message = '';
    socket.on('data', chunk => {
      pending += chunk;
      let end;
      while ((end = pending.indexOf('\r\n')) !== -1) {
        const line = pending.slice(0, end);
        pending = pending.slice(end + 2);
        if (data) {
          if (line === '.') {
            data = false;
            if (smtpFailure) socket.write('451 Test delivery failure\r\n');
            else { messages.push(message); socket.write('250 Queued locally\r\n'); }
          } else message += line.replace(/^\.\./, '.') + '\r\n';
        } else if (/^EHLO|^HELO/.test(line)) socket.write('250-localhost\r\n250 SIZE 15000000\r\n');
        else if (line === 'DATA') { data = true; message = ''; socket.write('354 End with a dot\r\n'); }
        else if (line === 'QUIT') socket.end('221 Bye\r\n');
        else socket.write('250 OK\r\n');
      }
    });
  });
  smtp.listen(0, '127.0.0.1');
  await once(smtp, 'listening');
  const port = await freePort(), base = 'http://127.0.0.1:' + port;
  let cookie = '', token = '';
  async function start(enabled) {
    phpLogs = '';
    const iniDirectory = '"' + temporaryDirectory.replace(/\\/g, '/') + '"';
    phpServer = cp.spawn(php, ['-d', 'display_errors=0', '-d', 'session.save_path=' + iniDirectory, '-d', 'upload_tmp_dir=' + iniDirectory, '-d', 'upload_max_filesize=10M', '-d', 'post_max_size=12M', '-S', '127.0.0.1:' + port, '-t', root], {
      cwd: root, windowsHide: true, stdio: ['ignore', 'ignore', 'pipe'],
      env: { ...process.env, FORM_RATE_DIRECTORY: temporaryDirectory, MAIL_ENABLED: String(enabled), SMTP_HOST: '127.0.0.1', SMTP_PORT: String(smtp.address().port), SMTP_AUTH: 'false', SMTP_ENCRYPTION: 'none', SMTP_FROM_EMAIL: 'noreply@example.test', MAIL_TO_EMAIL: 'inbox@example.test', MAIL_ADDITIONAL_TO_EMAILS: 'archive@example.test, team@example.test' },
    });
    phpServer.stderr.on('data', chunk => phpLogs += chunk);
    for (let i = 0; i < 50; i++) {
      if (phpServer.exitCode !== null) throw Error(phpLogs);
      try { if ((await fetch(base + '/index.php')).status === 200) return; } catch (_) {}
      await delay(100);
    }
    throw Error('PHP server did not start: ' + phpLogs);
  }
  async function stop() {
    if (!phpServer || phpServer.exitCode !== null) return;
    const closed = once(phpServer, 'exit');
    phpServer.kill();
    await closed;
  }
  async function page(file) {
    const response = await fetch(base + '/' + file);
    assert.equal(response.status, 200);
    assert.equal(response.headers.get('x-robots-tag'), 'noindex, nofollow');
    const setCookie = response.headers.get('set-cookie');
    if (setCookie) cookie = setCookie.split(';')[0];
    const html = await response.text();
    token = html.match(/name="csrf_token" value="([a-f0-9]{64})"/)[1];
    assert.ok(!/Warning:|Fatal error:/.test(html));
    const productionUrl = file === 'index.php' ? 'https://americanauthors.org/' : 'https://americanauthors.org/' + file.replace(/\.php$/, '');
    assert.ok(html.includes('<link rel="canonical" href="' + productionUrl + '">'));
    assert.ok(html.includes('<meta property="og:url" content="' + productionUrl + '">'));
    const articleImages = { 'blogs.php': 'writing-card.webp', 'blog-professional-book-writing-and-publishing.php': 'writing-hero.webp', 'blog-mastering-book-marketing.php': 'promotion-hero.webp' };
    const sharingImage = articleImages[file] ? 'assets/images/journal/' + articleImages[file] : 'assets/images/brand/eagle-logo-social.png';
    assert.ok(html.includes('<meta property="og:image" content="https://americanauthors.org/' + sharingImage + '">'));
    assert.equal((html.match(/https:\/\/embed\.tawk\.to\/6ad661f02476ba34ce68a4f8\/1k5amt5jk/g) || []).length, 1);
    assert.ok(!html.includes('class="whatsapp-float"'));
    assert.ok(!html.match(/<footer\b[\s\S]*?<\/footer>/)[0].includes('site_whatsapp_url'));
    assert.ok(!html.match(/<footer\b[\s\S]*?<\/footer>/)[0].includes('17139120056'));
    if (articleImages[file]) {
      assert.ok(html.includes('Updated November 5, 2026'));
      assert.ok(!/2026-02-05|February 5, 2026|assets\/images\/photos\//.test(html.slice(html.indexOf('<main'), html.indexOf('</main>'))));
    }
    assert.ok(!/application\/ld\+json|schema\.org/.test(html));
    for (const link of html.matchAll(/\b(?:src|href)="([^"#]+)"/g)) {
      const resource = link[1].split(/[?#]/)[0];
      if (resource && !/^(https?:|\/\/|data:|tel:|mailto:)/.test(resource)) assert.ok(fs.existsSync(path.join(root, resource)) || fs.existsSync(path.join(root, resource + '.php')), file + ' missing ' + resource);
    }
    for (const script of html.matchAll(/<script\b([^>]*)>([\s\S]*?)<\/script>/g)) if (!/src=/.test(script[1])) new vm.Script(script[2]);
    for (const form of html.matchAll(/<form\b([\s\S]*?)<\/form>/g)) {
      assert.match(form[0], /action="api\/contact.php"/);
      assert.match(form[0], /data-site-form/);
      assert.match(form[0], /name="csrf_token"/);
      assert.match(form[0], /name="form_kind"/);
    }
    return html;
  }
  async function post(values, attachment, accept = 'application/json') {
    const form = new FormData();
    for (const [key, value] of Object.entries({ csrf_token: token, website: '', ...values })) {
      if (Array.isArray(value)) value.forEach(item => form.append(key + '[]', item));
      else form.append(key, value);
    }
    if (attachment) form.append('manuscript', new Blob([attachment.bytes], { type: attachment.mime }), attachment.name);
    const response = await fetch(base + '/api/contact.php', { method: 'POST', headers: { Cookie: cookie, Accept: accept }, body: form });
    const result = accept === 'application/json' ? await response.json() : await response.text();
    return { response, result };
  }
  try {
    // Mail-disabled mode must never claim success or connect to SMTP.
    await start(false);
    await page('contact.php');
    let result = await post(valid);
    assert.equal(result.response.status, 503, JSON.stringify(result.result) + phpLogs);
    assert.equal(result.result.success, false);
    assert.equal(messages.length, 0);
    await stop();
    await start(true);
    const pages = fs.readdirSync(root).filter(file => file.endsWith('.php'));
    for (const file of pages) await page(file);
    await page('contact.php');
    const get = await fetch(base + '/api/contact.php', { headers: { Accept: 'application/json' } });
    assert.equal(get.status, 405);
    assert.equal(get.headers.get('allow'), 'POST');
    result = await post({ ...valid, csrf_token: 'invalid' });
    assert.equal(result.response.status, 403);
    result = await post({ form_kind: 'enquiry' });
    assert.equal(result.response.status, 422);
    assert.deepEqual(Object.keys(result.result.errors).sort(), ['email', 'message', 'name', 'phone']);
    for (const fields of [
      { ...valid, email: ['bad@example.test'] },
      { ...valid, email: 'writer@example.test\r\nBcc: injected@example.test' },
      { ...valid, form_kind: 'unknown' },
      { ...valid, name: 'A' }, { ...valid, name: 'x'.repeat(101) },
      { ...valid, message: 'short' }, { ...valid, message: 'x'.repeat(5001) },
      { ...valid, phone: '123' }, { ...valid, phone: '+1234567890123456' },
      { ...valid, website: 'spam' },
      { ...valid, services: ['Invalid service'] }, { ...valid, stage: 'Invalid stage' },
    ]) assert.equal((await post(fields)).response.status, 422);
    const unsupported = await fetch(base + '/api/contact.php', { method: 'POST', headers: { Accept: 'application/json', 'Content-Type': 'application/json' }, body: '{}' });
    assert.equal(unsupported.status, 415);
    const png = Buffer.from('iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+aFe8AAAAASUVORK5CYII=', 'base64');
    for (const attachment of [
      { name: 'fake.png', mime: 'image/png', bytes: Buffer.from('this is not an image') },
      { name: 'fake.pdf', mime: 'application/pdf', bytes: png },
      { name: 'empty.pdf', mime: 'application/pdf', bytes: Buffer.alloc(0) },
      { name: 'large.pdf', mime: 'application/pdf', bytes: Buffer.alloc(rules.upload_max_bytes + 1) },
    ]) {
      result = await post({ ...valid, form_kind: 'contact' }, attachment);
      assert.equal(result.response.status, 422);
      assert.ok(result.result.errors.manuscript);
    }
    const oversized = await fetch(base + '/api/contact.php', { method: 'POST', headers: { Accept: 'application/json', 'Content-Type': 'application/x-www-form-urlencoded' }, body: 'data=' + 'x'.repeat(12 * 1024 * 1024) });
    assert.equal(oversized.status, 413);
    result = await post(valid);
    assert.equal(result.response.status, 200);
    assert.equal(result.result.success, true);
    assert.match(messages[0], /From:.*noreply@example.test/);
    assert.match(messages[0], /Reply-To:.*writer@example.test/);
    assert.match(messages[0], /To:.*inbox@example.test/);
    assert.match(messages[0], /archive@example.test/);
    assert.match(messages[0], /team@example.test/);
    assert.match(messages[0], /SMS marketing consent: No/);
    assert.match(messages[0], /Please help me publish/);
    result = await post({ ...valid, form_kind: 'contact', services: ['Book Editing'], stage: 'Manuscript', marketing_consent: '1' }, { name: 'sample.png', mime: 'image/png', bytes: png });
    assert.equal(result.response.status, 200);
    assert.match(messages[1], /filename=sample.png/);
    assert.match(messages[1], /Services: Book Editing/);
    assert.match(messages[1], /Book stage: Manuscript/);
    assert.match(messages[1], /SMS marketing consent: Yes/);
    result = await post({ form_kind: 'journal', email: valid.email });
    assert.equal(result.response.status, 200);
    assert.match(result.result.message, /signup request/);
    assert.equal(messages.length, 3);
    smtpFailure = true;
    result = await post(valid);
    assert.equal(result.response.status, 502);
    assert.equal(result.result.success, false);
    assert.ok(!JSON.stringify(result.result).includes('SMTP'));
    smtpFailure = false;
    result = await post(valid, null, 'text/html');
    assert.equal(result.response.status, 200);
    assert.match(result.result, /Back to the contact page/);
    result = await post(valid);
    assert.equal(result.response.status, 429);
    assert.equal(messages.length, 4);
    // New sessions do not reset the shared client address limit.
    for (let i = rules.rate_limit; i < rules.ip_rate_limit; i++) {
      await page('contact.php');
      result = await post(valid);
      assert.equal(result.response.status, 200);
    }
    await page('contact.php');
    result = await post(valid);
    assert.equal(result.response.status, 429);
    assert.ok(!phpLogs.split('\n').filter(line => !line.includes('POST Content-Length')).some(line => /PHP (?:Warning|Fatal error|Parse error)/.test(line)), phpLogs);
    console.log(JSON.stringify({ clientValidation: 'passed', clientSubmissionAndDuplicateProtection: 'passed', renderedPages: pages.length, productionMetadata: 'passed', serverValidation: 'passed', csrf: 'passed', uploadSpoofingAndLimits: 'passed', smtpMessagesCapturedLocally: messages.length, smtpFailureAndDisabledStates: 'passed', sessionAndIpRateLimits: 'passed', htmlFallback: 'passed' }, null, 2));
  } finally {
    await stop();
    sockets.forEach(socket => socket.destroy());
    await new Promise(resolve => smtp.close(resolve));
    // Only remove files created inside this test's unique temporary directory.
    assert.equal(path.dirname(temporaryDirectory), path.resolve(os.tmpdir()));
    for (const file of fs.readdirSync(temporaryDirectory)) fs.unlinkSync(path.join(temporaryDirectory, file));
    fs.rmdirSync(temporaryDirectory);
  }
})().catch(error => { console.error(error); process.exitCode = 1; });
