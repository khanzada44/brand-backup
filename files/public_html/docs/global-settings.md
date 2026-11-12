# Global site settings

Edit **config/site.php** to manage the whole site. It is a PHP configuration file you edit in your code editor, not a public settings form. No database is required.

## Settings

| Key | Controls |
| --- | --- |
| project_name | Brand name across all pages, text, titles, descriptions, image alt labels and components |
| short_name | Short branding and journal name; for example ABS produces ABS Journal |
| legal_name | Legal entity in copyright/legal content |
| email | Displayed email and mailto links |
| phone | Displayed phone; include country code, for example +1 (512) 649-0348. tel links are generated automatically |
| address | Street, city, region and postal code; full/short addresses are generated from these parts |
| logos | Header, footer and social-preview image paths |
| social_links | Facebook, Instagram, LinkedIn, X, YouTube and Trustpilot URLs |
| tawk | Optional live chat switch and embed identifiers |
| allow_indexing | Keep false during development; true permits indexing as documented previously |

A blank social URL hides that link. Invalid URLs and schemes other than http/https are ignored. Facebook/Instagram use the existing icons; additional enabled networks use readable initials. Trustpilot controls the review links/badge separately. The default Trustpilot URL now omits the old marketing query parameters.

The business name is displayed consistently from project_name, including places that previously used a possessive spelling. Phone display now includes the configured country code. Changing a name does not redraw text embedded in logo images: replace the logo files and/or their configured paths as needed.

## Enable Tawk.to only when wanted

It is **off by default**, with empty IDs, so normal page output contains no Tawk loader or request.

In config/site.php:

    'tawk' => [
        'enabled' => true,
        'property_id' => 'YOUR_PROPERTY_ID',
        'widget_id' => 'YOUR_WIDGET_ID',
    ],

Use the identifiers from your Tawk embed URL, not an entire script snippet. Both valid IDs and enabled=true are required. Set enabled=false to remove the embed from every page again. No old Tawk account identifiers were restored. The optional widget does not auto-maximize.

## How it is wired

- components/render.php loads config/site.php once and loads the setting helpers.
- components/settings.php reads dotted setting keys and formats addresses, phones and social URLs.
- Templates use escaped settings, for example site_text('project_name') or site_text('email'). Page-specific title/description text stays in its own page, with the project name inserted dynamically.
- components/shared/social-links.php renders the shared footer/contact social links.
- components/integrations/tawk.php emits chat code only when configured and enabled; components/layout/scripts.php includes it for all pages.
- The journal prefill reads its configured short name from an escaped HTML data attribute.

## Verification — 2026-11-04

- All 60 PHP application files passed lint; all 13 JavaScript files parsed.
- All 29 pages rendered successfully with default settings, preserved development noindex/nofollow and had no missing local references or schema markup.
- All 29 pages were also rendered with a different name, legal entity, email, international phone, address and social settings. None retained the old business values, and special characters were escaped correctly.
- Empty social links were hidden and an invalid javascript URL was rejected.
- Tawk disabled, valid-enabled and invalid-ID cases passed without contacting the service.
- Default rendered output matched the baseline after the intentional business-name spelling, country-code display, journal attribute and cleaned review-URL changes.

Forms now use the shared PHP validation/PHPMailer handler. Configure SMTP in config/mail.php or the ignored config/mail.local.php before live sending; see [forms and mail](forms-and-mail.md).

## Logo path update — 2026-11-04

The client supplied American Authors identity uses eagle-logo-header.png, eagle-logo-footer.png and eagle-logo-social.png in assets/images/brand/. Header and footer versions have transparent backgrounds. The header retains the navy eagle, red book pages and wordmark, and gold star. The footer uses light eagle shapes and lettering with brighter red details for dark backgrounds. Matching emblem icons are in favicon/. Previous logo assets have been removed. Social values such as #. are placeholders and are hidden by the existing http/https URL validation.
