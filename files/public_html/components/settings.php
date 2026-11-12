<?php
/** Read global settings from any page or isolated component. */
function site_setting(string $key, $default = '')
{
    $value = $GLOBALS['siteConfig'];
    foreach (explode('.', $key) as $part) {
        if (!is_array($value) || !array_key_exists($part, $value)) {
            return $default;
        }
        $value = $value[$part];
    }
    return $value;
}

function site_text(string $key): string
{
    return component_escape((string) site_setting($key));
}

/** Build metadata URLs from the configured origin, never an incoming Host header. */
function site_url(string $path = ''): string
{
    $path = preg_replace('/\.php(?=[?#]|$)/', '', $path);
    $path = preg_replace('/^index(?=[?#]|$)/', '', $path);
    return rtrim((string) site_setting('website'), '/') . '/' . ltrim($path, '/');
}

function site_phone_number(): string
{
    $phone = trim((string) site_setting('phone'));
    $digits = preg_replace('/\D+/', '', $phone);
    return $digits === '' ? '' : (str_starts_with($phone, '+') ? '+' : '') . $digits;
}

function site_address(bool $includePostalCode = true): string
{
    $address = site_setting('address', []);
    return implode(', ', array_filter([
        $address['street'] ?? '',
        $address['city'] ?? '',
        $address['region'] ?? '',
        $address['country'] ?? '',
        $includePostalCode ? ($address['postal_code'] ?? '') : '',
    ], static fn ($value) => $value !== ''));
}

function site_whatsapp_url(): string
{
    $digits = preg_replace('/\D+/', '', (string) site_setting('whatsapp'));
    return $digits === '' ? '' : 'https://wa.me/' . $digits;
}

function site_location(): string
{
    return implode(', ', array_filter([site_setting('address.city'), site_setting('address.region')]));
}

function site_social_url(string $network): string
{
    $url = trim((string) site_setting('social_links.' . $network));
    $scheme = strtolower((string) parse_url($url, PHP_URL_SCHEME));
    return in_array($scheme, ['http', 'https'], true) && filter_var($url, FILTER_VALIDATE_URL) ? $url : '';
}
