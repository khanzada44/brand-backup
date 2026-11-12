<?php
// GLOBAL SETTINGS: edit this file to update the whole site.
return [
    'project_name' => 'americanauthors.org',
    'short_name' => 'American Authors',
    'website' => 'https://americanauthors.org',
    'email' => 'info@americanauthors.org',
    // Include the country code. The clickable tel: number is generated automatically.
    'phone' => '+1 832-464-6607',
    'whatsapp' => '+1 713-912-0056',
    'whatsapp_enabled' => false,
    'address' => [
        'street' => '700 Smith St',
        'city' => 'Houston',
        'region' => 'TX',
        'country' => 'United States',
        'postal_code' => '77002',
    ],
    'logos' => [
        'header' => 'assets/images/brand/eagle-logo-header.png',
        'footer' => 'assets/images/brand/eagle-logo-footer.png',
        'social' => 'assets/images/brand/eagle-logo-social.png',
    ],
    // Leave a URL empty to hide that social link. Only http/https URLs are accepted.
    'social_links' => [
        'facebook' => '#.',
        'instagram' => '#.',
        'linkedin' => '',
        'x' => '',
        'youtube' => '',
        'trustpilot' => '#.',
    ],
    // Live chat account identifiers used by the shared Tawk.to integration.
    'tawk' => [
        'enabled' => true,
        'property_id' => '6ad661f02476ba34ce68a4f8',
        'widget_id' => '1k5amt5jk',
    ],
    // Keep false during development. Set true when ready for search indexing.
    'allow_indexing' => false,
];
