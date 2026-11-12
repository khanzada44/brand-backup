# Forms, validation and PHPMailer

Updated: 2026-11-04

The old submit guard, contact-page validation/upload code and journal modal-prefill handler have been replaced. One shared JavaScript file and one PHP endpoint now handle every form.

## Current behavior

- Enquiry and contact forms require name, email, phone and a message. Name: 2–100 characters; phone: 7–15 digits with ordinary international formatting; message: 10–5,000 characters; email: valid format, maximum 254 characters.
- Marketing/SMS consent stays optional and is reported as Yes/No in the enquiry email. Submitting an enquiry does not require marketing consent.
- Services and book stage are optional; selected values are checked against the server allowlists and included in the email.
- The contact page accepts one optional PDF, PNG, JPG or JPEG up to 10 MB. PHP verifies upload status, actual size, extension and detected MIME; images are also checked for readable dimensions. Files are attached from PHP's temporary upload area, not saved permanently in the project.
- The journal form validates email and sends a signup request to the team's mailbox. It does not automatically create a subscription in a mailing-list service.
- Errors appear beside fields with accessible error associations. Failed sends preserve entered values; submit buttons are restored after failure. Duplicate clicks while sending are ignored.
- Successful submission is shown only after PHPMailer reports SMTP acceptance. SMTP acceptance is not a guarantee of inbox placement.
- Missing/disabled mail settings return a temporary-unavailable response, not a fake success.
- With JavaScript disabled, HTML constraints still apply and the PHP endpoint returns a readable response page. All validation is repeated on the server.

## Files

| File | Purpose |
| --- | --- |
| config/forms.php | Shared limits, allowed services/stages and per-session attempt limit |
| config/mail.php | SMTP settings, environment variables and optional local override |
| components/forms/security.php | Shared CSRF token, form kind and honeypot |
| components/forms/client-config.php | Sends nonsecret validation rules to the shared client validator |
| assets/js/forms.js | Validation, errors, submission, loading state and manuscript preview |
| assets/css/forms.css | Shared error/loading/honeypot styling |
| api/contact.php | POST-only submission endpoint and safe responses |
| server/form-security.php | Session, CSRF and attempt limiting |
| server/form-validation.php | Field and upload validation |
| server/form-mailer.php | PHPMailer SMTP delivery, fixed From address and visitor Reply-To |
| composer.json / composer.lock | PHPMailer dependency declaration and locked version |

Names are now straightforward: name, email, phone, message, marketing_consent, services[], stage and manuscript. The former form_fields[...] names and synthesized hidden contact message are gone. The contact script retains only visual effects and selection-summary updates; the journal script retains only visual effects.

## Configure SMTP before live delivery

Mail is disabled by default. The easiest setup is to copy **config/mail.local.example.php** to **config/mail.local.php** in the same folder. Replace its example values with your provider details, then change enabled from false to true. config/mail.php automatically loads the private copy; do not put real passwords in the tracked example.

Alternatively use environment variables, or create **config/mail.local.php** with these settings:

```php
<?php
return [
    'enabled' => true,
    'host' => 'smtp.your-provider.com',
    'port' => 587,
    'encryption' => 'tls',
    'auth' => true,
    'username' => 'your-smtp-username',
    'password' => 'your-smtp-password',
    'from_email' => 'noreply@your-domain.com',
    'from_name' => '',
    'to_email' => 'inbox@your-domain.com',
];
```

The local override is ignored by Git. Keep credentials out of public repositories. Environment equivalents are MAIL_ENABLED, SMTP_HOST, SMTP_PORT, SMTP_ENCRYPTION, SMTP_AUTH, SMTP_USERNAME, SMTP_PASSWORD, SMTP_FROM_EMAIL, SMTP_FROM_NAME, MAIL_TO_EMAIL and MAIL_ADDITIONAL_TO_EMAILS. Use MAIL_ENABLED=true to enable environment-based configuration.

An empty from_name uses the global project name; an empty to_email uses config/site.php's contact email. The From email must be an address authorized by the SMTP provider. The visitor's email is Reply-To, never From. Port 465 normally uses ssl; port 587 normally uses tls, according to your provider. The none/auth=false settings exist for local testing; use authenticated encryption in production. TLS certificate verification has not been disabled.

No real credentials were supplied or saved, and no external email was sent during development. Live inbox delivery still needs a test using your real SMTP provider and recipient.

## Hosting requirements

- PHP 8.2+ with sessions, mbstring, fileinfo and OpenSSL; configure writable PHP session and upload temporary directories.
- Install dependencies with `composer install --no-dev --prefer-dist --optimize-autoloader`, or upload the already installed **vendor/** directory along with the project. The application loads vendor/autoload.php. The vendor directory is ignored by Git, so Git-only deployments must run Composer.
- Configure PHP `upload_max_filesize = 10M` and `post_max_size = 12M` (or higher compatible limits), plus any web-server request-size limit. A lower hosting limit will reject files earlier.
- Use HTTPS. Pages with form tokens send private/no-store cache headers; exclude them from shared HTML/CDN caching. Session cookies use HttpOnly, SameSite=Lax and Secure when PHP sees HTTPS. If HTTPS terminates at a proxy, configure the trusted server/proxy HTTPS indication correctly.
- Sending is limited to five valid attempts per session and twenty per client IP address per ten minutes, alongside CSRF and honeypot checks. IP counters use file locking across sessions. The default storage directory is in the system temporary directory, outside the public project. FORM_RATE_DIRECTORY can select a private writable directory. Keep all application workers on the same counter directory. For multiple servers, use shared storage with working locks or an edge limiter. Configure trusted proxies at the server so REMOTE_ADDR contains the verified client IP; client supplied forwarding headers are ignored.
- Do not expose PHP warnings or SMTP debug output on production. API responses contain no credentials, SMTP diagnostics or uploaded contents. SMTP failure logs are intentionally generic.

## Verification

Run:

```powershell
$env:PHP_BINARY = 'D:\xampp-8.2\php\php.exe'
node tests/forms.test.js
```

Validation completed: all 68 application PHP files passed lint; 14 application JavaScript files and the JavaScript test file parsed successfully. Changed frontend asset versions were updated to avoid cached old handlers.

The tests refuse to run if config/mail.local.php exists, so private SMTP credentials cannot override the local simulator. Move that private file outside the project temporarily before testing and restore it afterwards.

The test starts temporary PHP and SMTP servers on localhost, then stops them. It uses its own temporary session/upload directory and sends no external email. Tests cover:

- Client field/file boundaries and Unicode names.
- Inline field errors, first-error focus, duplicate-submit protection, failure preservation and success reset.
- All 29 rendered pages with CSRF fields and the shared action.
- Disabled SMTP, method/content-type checks, malformed fields, header injection, CSRF failure and honeypot rejection.
- Fake file types, mismatched extension/content, empty/oversized uploads and oversized requests.
- Local SMTP acceptance for enquiry, contact attachment and journal requests; fixed From and visitor Reply-To; optional consent and service/stage content.
- SMTP rejection, session and IP attempt limits across fresh sessions, production metadata URLs and the HTML fallback.

Interactive browser/visual testing and real-provider inbox delivery remain to be completed before production launch.

References: [PHPMailer](https://github.com/PHPMailer/PHPMailer), [PHP upload handling](https://www.php.net/manual/en/features.file-upload.php), [PHP validation filters](https://www.php.net/manual/en/function.filter-var.php).

## PHPMailer installation details

PHPMailer was installed with Composer using composer require phpmailer/phpmailer (with --no-interaction --prefer-dist --no-plugins --no-scripts). composer.json declares ^7.1; composer.lock currently locks v7.1.1. The package code is in vendor/phpmailer/phpmailer/ and server/form-mailer.php loads it through vendor/autoload.php. To reproduce the locked installation on another server, use composer install --no-dev --prefer-dist --optimize-autoloader.

## Receive enquiries in Gmail or multiple inboxes

The SMTP username and from_email remain your authorized webmail sender. Gmail is a destination, so receiving there does not require a Gmail password or a Gmail SMTP connection.

For Gmail only, set to_email to your actual Gmail address and leave additional_to_emails empty. For both your webmail inbox and Gmail, use these values in config/mail.local.php:

```php
'username' => 'info@yourdomain.com',
'from_email' => 'info@yourdomain.com',
'to_email' => 'info@yourdomain.com',
'additional_to_emails' => ['yourname@gmail.com'],
```

You can add further destination addresses to the array. MAIL_ADDITIONAL_TO_EMAILS supports comma-separated addresses when using environment configuration instead. Every address is validated before sending; duplicate addresses are deduplicated. An invalid address prevents sending rather than silently dropping a recipient. All destinations appear in the To header and can see each other. Actual Gmail inbox delivery must still be tested with your configured provider.

The example configuration includes instructions for a single Gmail recipient or additional inboxes. Recipient validation and SMTP message generation for multiple recipients passed the local simulator tests; no external Gmail messages were sent.
