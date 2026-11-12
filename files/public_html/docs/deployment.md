# Production deployment

## Server requirements

Use PHP 8.2 or later with mbstring, fileinfo and OpenSSL, and Apache 2.4 with mod_rewrite and .htaccess overrides enabled. The application requires private writable PHP session, upload temporary and form rate counter directories. Include vendor dependencies using the locked Composer installation.

The root .htaccess blocks web access to Git, hidden files, config, server, components, docs, tests and vendor. It disables directory listings, adds response headers and enables compression and static asset expiry where the relevant Apache modules are available. PHP includes still work through the filesystem.

Do not upload .git, docs, tests, development archives or backups to the public directory. Deploy .htaccess along with the application. If the hosting server does not use Apache, configure equivalent access rules before making the site public. A PHP development server does not enforce .htaccess.

PHP error display is disabled for Apache mod_php through .htaccess and for CGI/FastCGI through .user.ini. Check the hosting control panel and logs to confirm these settings are effective.

## HTTPS and metadata

Install a valid certificate for americanauthors.org and www.americanauthors.org. The rewrite rules redirect the production domain to HTTPS and remove www while leaving localhost unchanged. If a trusted reverse proxy terminates TLS, configure Apache to recognise that connection as HTTPS before enabling these rules, to prevent a redirect loop. Do not trust arbitrary forwarded headers.

Canonical page URLs, Open Graph page URLs and sharing images use the configured https://americanauthors.org origin. The homepage canonical URL is the domain root. Search indexing remains disabled by request. The American Authors logo is used in the header, footer, favicons and default sharing image. Journal articles use their own new sharing images. Existing campaign account labels are retained.

Public page routes omit the PHP extension, for example /about and /book-publishing. Existing .php page requests permanently redirect to the clean route, preserving query strings. The homepage uses /. Real PHP files and filesystem includes keep their filenames; the form POST endpoint remains api/contact.php so submissions are not redirected. Routes work at the domain root or in the local development subdirectory. Verify routing with `node --test tests/clean-urls.test.js` against Apache; SITE_TEST_BASE_URL can select another base URL.

Tawk.to is enabled with the configured account identifiers. The separate WhatsApp button sits at the bottom left to leave the bottom right available for live chat. The footer does not display the WhatsApp number.

## Email delivery

The contact address, default SMTP login and sender are info@americanauthors.org. Hostinger Email defaults are smtp.hostinger.com, port 465 and SSL. Verify that hPanel lists Hostinger Email for this mailbox; Titan or another service requires its own settings. Sending remains disabled until the mailbox password is supplied and enabled is set to true. Copy config/mail.local.example.php to private config/mail.local.php, then set the real password and enable sending. Alternatively, use server environment variables. See forms-and-mail.md for details.

Provider settings: https://www.hostinger.com/support/1575756-how-to-get-email-account-configuration-details-for-hostinger-email/

Use the provider's domain authentication instructions and confirm that a real enquiry reaches the intended inbox. The local SMTP simulator verifies application behaviour but does not establish delivery through the production provider.

## Release checks

1. Confirm public pages and assets return 200, while /.git/HEAD, /config/, /server/, /components/, /tests/, /docs/ and /composer.json return 403 or 404.
2. Verify HTTP and www redirects on the actual domain, with a valid HTTPS certificate and Secure session cookies.
3. Confirm the rate counter directory is private and writable. Configure a trusted proxy client address if needed.
4. Submit an enquiry and a sample attachment using the live SMTP provider. Confirm receipt and the visitor Reply-To address.
5. Check navigation, forms and dialogs on phone and desktop screens. Keep dynamic pages out of full-page caching because forms contain session tokens.
6. Confirm that published portfolio items, testimonials, media logos and policy commitments match the business's records and services.
