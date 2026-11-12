# Tracking and third-party code audit

Audit date: 2026-11-04
Scope: all 29 HTML pages, local JavaScript, CSS, and JSON in this repository. Static source review; no live browser network capture or server/deployment audit was performed.

## Removed

- [x] Removed Tawk.to script references from all 29 HTML pages.
- [x] Deleted assets/js/chat2f72.js, including its external widget loader, property/widget identifiers, globals, and automatic desktop chat opening after five seconds.
- [x] Removed DMCA badge helper script references from all 29 pages. These pointed outside the project to ../images.dmca.com/Badges/DMCABadgeHelper.min.js; the helper source was unavailable for inspection.
- [x] Removed 29 DMCA badge links and image requests, including the badge account ID and original-site refurl parameter. Removed unused badge CSS from home2f72.css and site2f72.css.
- [x] Removed the Google Fonts stylesheet injection from halloween-popup850f.js. This was an external font dependency, not a confirmed analytics tracker; existing font fallbacks remain.
- [x] Removed automatic page title and full page URL metadata from contact-form submissions in main2f72.js. The URL could include query parameters and fragments.

## Reviewed and retained

- [x] No Google Analytics, Google Tag Manager, Meta Pixel, Hotjar, Microsoft Clarity, Segment, or Mixpanel integration was found in the reviewed source.
- [x] No other external chat widget, iframe embed, beacon, WebSocket, cookie-writing code, localStorage use, or service-worker registration was found.
- [x] The remaining fetch sends user-submitted enquiry fields and optional manuscript to the same-origin abs-contact.json endpoint. It runs on form submission; it is not an analytics request.
- [x] Halloween sessionStorage stores a local seen flag to prevent repeat popup display. No identifier or data transmission was found in that feature.
- [x] Ordinary external navigation links, social links, SEO structured data, SVG namespaces, and inline SVG data images were retained. These are not automatic tracking integrations.

## Verification

- [x] All 15 remaining JavaScript files passed Node.js syntax parsing.
- [x] All 88 nonempty executable inline scripts passed syntax parsing; JSON-LD blocks parsed successfully.
- [x] Checked script, image, stylesheet, source, iframe, audio, and video src/href references across 29 pages: no external or parent-directory resource references remain, and no missing referenced local resources were found.
- [x] Re-scanned application HTML/JS for removed integrations and common tracking/network/storage APIs.
- [ ] Browser visual and network verification on the deployed site remains pending. Source checks cannot establish server-side tracking or behavior of infrastructure outside this repository.

## Separate finding

The existing contact endpoint is a static abs-contact.json file containing success:false and 'Method not allowed.' There is no contact-processing backend in this repository. Enquiry delivery therefore needs a real backend before production use. This pre-existing issue was recorded without changing the contact workflow during tracking cleanup.

## PHP structure update — 2026-11-04

All 29 audited pages now use .php filenames and shared includes/head.php, includes/header.php, includes/footer.php and includes/scripts.php. Internal links and JavaScript page references were updated. The original audit above describes the HTML source at audit time; its cleanup remains in the converted PHP application. See [PHP structure checklist](php-structure-checklist.md) for the structure, validation and remaining limitations.

## Component structure and development update — 2026-11-04

The shared layout now lives under components/layout/; reusable forms, dialogs, icons, rails, sections and previews have also been extracted into components/. Page metadata is direct HTML inside each root PHP page; the earlier pageHead nowdoc was removed. Development noindex, nofollow is enabled through config/site.php in both meta and HTTP headers. See [component checklist](components-checklist.md) for the current structure and verification.

## Final cleanup — 2026-11-04

The historical contact-endpoint and campaign findings above have been resolved by removal: abs-contact.json, its old AJAX integration and the expired Halloween feature are gone. Contact form markup remains; submission is paused until PHPMailer is added. See [final cleanup checklist](cleanup-checklist.md).

## Schema removal and shared head update — 2026-11-04

All application JSON-LD/schema markup has now been removed as requested. Common meta tags and stylesheet loading are centralized in components/layout/head.php and components/head/styles.php. The earlier schema-preservation entries above describe historical stages; this update supersedes them.

## Optional chat configuration — 2026-11-04

At the user's request, a new configurable Tawk.to component is available through config/site.php. It is disabled by default with empty identifiers; the removed original account IDs have not been restored. It emits no embed unless explicitly enabled with valid IDs. The default project remains free of an active chat embed. See [global settings](global-settings.md).
