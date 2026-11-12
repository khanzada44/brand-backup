// Read-only routing checks against Apache, including its .htaccess rules.
const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const test = require('node:test');
const root = path.resolve(__dirname, '..');
const base = new URL(process.env.SITE_TEST_BASE_URL || 'http://localhost/ahsan/book/code/');

test('all public pages use clean URLs and retain working local links', async () => {
  const pages = fs.readdirSync(root).filter(file => file.endsWith('.php'));
  const routes = new Set(pages.map(file => file === 'index.php' ? '' : file.replace(/\.php$/, '')));
  for (const file of pages) {
    const route = file === 'index.php' ? '' : file.replace(/\.php$/, '');
    const response = await fetch(new URL(route, base), { redirect: 'manual' });
    assert.equal(response.status, 200, route);
    assert.equal(response.headers.get('x-robots-tag'), 'noindex, nofollow');
    const html = await response.text();
    assert.ok(!/Fatal error:|Warning:/.test(html), route);
    const canonical = 'https://americanauthors.org/' + route;
    assert.ok(html.includes('<link rel="canonical" href="' + canonical + '">'), route);
    assert.ok(html.includes('<meta property="og:url" content="' + canonical + '">'), route);
    for (const [, href] of html.matchAll(/\bhref="([^"]+)"/g)) {
      if (/^(?:https?:|mailto:|tel:|data:|#)/.test(href)) continue;
      const target = new URL(href, new URL(route, base));
      assert.ok(!target.pathname.endsWith('.php'), file + ': ' + href);
      const relative = decodeURIComponent(target.pathname.slice(base.pathname.length));
      assert.ok(routes.has(relative) || fs.existsSync(path.join(root, relative)), file + ': ' + href);
    }
    const legacy = await fetch(new URL(file + '?source=legacy', base), { redirect: 'manual' });
    assert.equal(legacy.status, 308, file);
    assert.equal(legacy.headers.get('location'), new URL(route + '?source=legacy', base).href, file);
    await legacy.arrayBuffer();
  }
  const trailing = await fetch(new URL('about/', base), { redirect: 'manual' });
  assert.equal(trailing.status, 308);
  assert.equal(trailing.headers.get('location'), new URL('about', base).href);
  await trailing.arrayBuffer();
  for (const route of ['.git/HEAD', 'config/', 'server/', 'components/', 'tests/', 'docs/']) {
    const response = await fetch(new URL(route, base), { redirect: 'manual' });
    assert.equal(response.status, 403, route);
    await response.arrayBuffer();
  }
  const api = await fetch(new URL('api/contact.php', base), { redirect: 'manual', headers: { Accept: 'application/json' } });
  assert.equal(api.status, 405, 'The form endpoint must not redirect');
  assert.equal((await api.json()).success, false);
});
