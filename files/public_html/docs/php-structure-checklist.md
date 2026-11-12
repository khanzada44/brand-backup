# PHP structure checklist

Updated: 2026-11-04

- [x] All 29 root pages use .php filenames; superseded HTML pages were removed.
- [x] Internal navigation, canonical/Open Graph page references and JavaScript-generated links use .php.
- [x] Shared layout files live in components/layout/head.php, header.php, footer.php and scripts.php. The earlier includes/ folder was replaced by this component structure.
- [x] Root pages set currentPage and pageScripts in PHP, then render their document and shared includes.
- [x] Page-specific titles, descriptions, canonical links, Open Graph metadata and image preloads are written directly inside each page's head. CSS is selected with pageStyles and rendered centrally; all structured data/schema has been removed. The earlier pageHead nowdoc was removed.
- [x] Reusable forms, dialogs, icons, navigation, CTA sections, FAQ content and previews live under components/.
- [x] Development indexing is controlled centrally by config/site.php; allow_indexing is currently false, which sends noindex, nofollow in both meta and HTTP headers.
- [x] PHP lint, rendered content comparisons, local link checks, inline script/JSON parsing and HTTP checks passed across all pages. See [component checklist](components-checklist.md) for detailed results and maintenance instructions.
- [ ] Interactive browser and visual checks remain pending.

Serve the project through PHP/Apache. With the existing XAMPP document root, open http://localhost/download-theme/test/index.php. Direct file:// access does not execute PHP.

Old .html URLs have no redirects; update external bookmarks/links when needed. The static contact response and old AJAX integration have been removed. Forms now use the new shared validation and PHPMailer endpoint; SMTP credentials must be configured before live delivery.
