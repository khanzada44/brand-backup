# Reusable components and development indexing

Updated: 2026-11-04

## Completed

- [x] Moved the four shared layout files from includes/ to components/layout/ and updated all 29 pages.
- [x] Added components/render.php for scoped component rendering and escaped text output. Component names are local developer-defined names, validated before requiring a file; props do not leak between renders.
- [x] Extracted the shared SVG icon sprite and skip link used by all 29 pages.
- [x] Extracted the lead enquiry modal used by all 29 pages, plus the book-preview modal used by the homepage and publications page.
- [x] Replaced 24 CTA enquiry forms with a configurable lead-form component. Page-specific headings, message labels, textarea rows and the editing form ID remain intact.
- [x] Extracted common contact input fields, consent text and submit/status markup for reuse within forms and modals.
- [x] Converted all 29 page-section rails to one component with page-specific link data, preserving labels, icons, anchors and active-section attributes.
- [x] Extracted the CTA section shared by eight service pages, retaining each image, eyebrow and formatted heading.
- [x] Extracted the identical article CTA and publishing FAQ list shared across pairs of pages.
- [x] Extracted duplicated coastal-author preview sections, the composed coastal home preview and social post actions.
- [x] Converted 20 author book lists to a shared component backed by nine shared title collections.
- [x] Extracted the repeated no-JavaScript enhancement into a head component. The expired campaign component and its assets were subsequently removed during final cleanup.
- [x] Removed the pageHead nowdoc approach from every page. Titles, descriptions, canonical links and page-specific Open Graph metadata appear directly in each page's head. Stylesheets now use pageStyles plus shared stylesheet aliases; all JSON-LD was subsequently removed.
- [x] Removed the redundant content-type meta outside the head.
- [x] Enabled noindex, nofollow in the robots meta tag and X-Robots-Tag HTTP response header for all 29 pages.

## Folder map

| Folder | Purpose |
| --- | --- |
| components/layout/ | Shared head content, header/mobile menu, footer and script loading |
| components/shared/ | SVG icons and skip link |
| components/head/ | JavaScript enhancement and centralized stylesheet rendering |
| components/forms/ | Configurable enquiry form, common inputs, consent and submit/status footer |
| components/modals/ | Lead enquiry and book-preview dialogs |
| components/navigation/ | Configurable section navigation rail |
| components/sections/ | Service CTA, article CTA and publishing FAQ |
| components/previews/ | Repeated illustrative author website and social preview markup |
| components/authors/ | Shared author book-list rendering |
| components/data/ | Shared author title collections |
| config/ | Site-wide development indexing setting |

## Editing a component

Each root page requires components/render.php before rendering. For example:

    render_component('forms/lead-form', [
        'title' => 'Start your project',
        'rows' => 4,
        'messageLabel' => 'Brief about your book',
    ]);

Text and attribute values are escaped by components. The service CTA's titleHtml and eyebrowHtml props intentionally accept trusted local formatted markup. Do not pass request input into HTML props or component names.

Layout includes still use direct __DIR__-based require statements so page script configuration and current-page navigation remain available. Unique page content, article copy, specialized layouts and the contact page's manuscript form remain with their own pages.

## Re-enable search indexing later

In config/site.php change:

    'allow_indexing' => false,

to:

    'allow_indexing' => true,

That single setting changes the shared robots meta to index, follow, max-image-preview:large and stops sending the development X-Robots-Tag header. This is the setting to change when the production site is ready. No crawler-blocking robots.txt was added.

## Verification

- [x] All 57 PHP files passed XAMPP PHP lint.
- [x] All 29 root pages rendered without PHP errors.
- [x] Rendered output matched the pre-refactor pages after whitespace/comment normalization and the intended robots/redundant-meta changes.
- [x] All 87 executable inline scripts parsed; JSON-LD parsed successfully.
- [x] Rendered local links and assets resolved; no missing referenced files were found.
- [x] HTTP checks through a temporary local PHP server returned 200 for all 29 pages, with both the noindex, nofollow meta and HTTP header present. The temporary server was stopped after validation.
- [x] Root page source size fell from 1,022,373 to 702,576 bytes, approximately 31%. Shared code now lives in components; this is a source-maintenance reduction, not a claim about network transfer size.
- [ ] Interactive browser and visual checks remain pending.

The static contact endpoint and old AJAX integration were subsequently removed during final cleanup. Forms remain ready for a future PHPMailer handler; see [cleanup checklist](cleanup-checklist.md).

## Shared head cleanup — 2026-11-04

- [x] Theme color, Open Graph type and Twitter card tags now have one definition in components/layout/head.php. Different theme colors and the existing article type use page-level overrides.
- [x] The common site stylesheet is defined once in components/head/styles.php and used by all inner pages; the homepage retains its existing combined home stylesheet.
- [x] Shared service, article and legal stylesheet URLs are defined once and selected through aliases in each page's pageStyles array. Unique stylesheet paths remain in their own page configuration.
- [x] The no-JavaScript enhancement component is invoked once from the shared head.
- [x] Removed all 29 source JSON-LD blocks: the common Organization block and 28 page-specific blocks. No schema.org or microdata markup remains in application output.
- [x] Preserved page titles, descriptions, canonical/Open Graph values, theme variants and stylesheet order. Added the shared Twitter card tag to the homepage for consistency.
- [x] PHP lint and render comparisons passed for 57 PHP files and 29 pages; rendered body content is unchanged, and no missing local references were found.

## Global settings update — 2026-11-04

- [x] Business identity, contact details, address parts, social URLs and logo paths are managed once in config/site.php and read across all pages/components.
- [x] Added shared settings helpers, social link rendering and an optional Tawk component. Chat remains disabled with empty IDs by default.
- [x] Replaced 293 hardcoded references and connected journal branding. Verified default/custom settings across all 29 pages, URL handling, HTML escaping and chat switching.

See [global settings guide](global-settings.md) for fields and usage.

## New form backend — 2026-11-04

The earlier paused-form state has been replaced by shared client/server validation and a PHPMailer SMTP handler. Old submission/validation functions were removed. SMTP is disabled until credentials are configured. CSRF, per-session limiting, optional marketing consent, MIME-checked attachments, enquiry/journal delivery and failure cases were tested using a local SMTP simulator. See [forms and mail](forms-and-mail.md) for configuration and deployment.
