# Final project cleanup

Updated: 2026-11-04

- [x] Deleted abs-contact.json (the saved Method not allowed error response).
- [x] Removed the old contact AJAX endpoint, fetch request, FormData packaging, fake delivery/success handling, obsolete server comments and unused injected spam-trap field from main2f72.js.
- [x] Removed the unused absCheckFile global; the contact page still validates and previews chosen files locally.
- [x] Preserved all form fields, contact selectors, optional manuscript picker, consent controls and shared form components for a future PHPMailer integration.
- [x] Added a small submit guard in main2f72.js. It prevents submission and displays an unavailable message; it sends no request and reports no successful delivery.
- [x] Set enquiry and journal forms to method=post so a browser without JavaScript does not place personal form values in the URL. There is currently no server handler attached.
- [x] Deleted the expired Halloween campaign (deadline 2026-11-01): components/head/campaign.php, assets/js/halloween-home850f.js, assets/js/halloween-popup850f.js and assets/css/halloween-home850f.css.
- [x] Removed campaign calls from all 29 pages and the conditional campaign loader from components/layout/scripts.php.
- [x] Checked remaining assets against application references; no unreferenced image/font asset was identified. Remaining files were retained because they are referenced by the application.
- [x] Kept development noindex, nofollow enabled in config/site.php.
- [x] PHP lint passed for 56 PHP files; 13 JavaScript files and 29 executable inline scripts parsed. All 29 pages rendered without PHP errors or missing local href/src references.
- [x] A focused submit-guard check confirmed preventDefault, an unavailable status and no network submission code.

## Connect PHPMailer later

Add your PHP handler, point the shared forms to it and replace the temporary submit-guard section in assets/js/main2f72.js with your chosen submission flow. Shared enquiry markup lives in components/forms/lead-form.php and components/modals/lead-modal.php; the dedicated contact form is in contact.php. The journal form in blogs.php currently pre-fills the enquiry modal and does not send a separate mailing-list request.

No mail credentials, fake API response or placeholder mail handler is included. Backend validation and actual delivery should be added with your PHPMailer implementation. Browser visual testing remains pending.

## Common head and schema cleanup — 2026-11-04

- [x] Removed all application JSON-LD/schema blocks, including Organization, page/service, breadcrumb, FAQ and book structured data. Visible content and FAQ sections remain.
- [x] Centralized repeated theme-color, og:type and twitter:card tags in components/layout/head.php.
- [x] Centralized stylesheet tags and reusable stylesheet URLs in components/head/styles.php; each page selects its own styles with pageStyles.
- [x] Kept title, description and other unique metadata in the relevant page.
- [x] Kept noindex, nofollow enabled.
- [x] Verified PHP lint, all 29 page renders, unchanged body content, unchanged stylesheet order, existing metadata values and local references.

## Global settings follow-up — 2026-11-04

Business/contact/social/logo values are now centralized in config/site.php. A configurable Tawk component was explicitly requested later and is disabled by default; it does not restore the previous account or automatic popup behavior. See [global settings guide](global-settings.md).

## New form backend — 2026-11-04

The earlier paused-form state has been replaced by shared client/server validation and a PHPMailer SMTP handler. Old submission/validation functions were removed. SMTP is disabled until credentials are configured. CSRF, per-session limiting, optional marketing consent, MIME-checked attachments, enquiry/journal delivery and failure cases were tested using a local SMTP simulator. See [forms and mail](forms-and-mail.md) for configuration and deployment.
