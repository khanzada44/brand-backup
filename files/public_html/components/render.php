<?php
$siteConfig = require dirname(__DIR__) . '/config/site.php';
require_once __DIR__ . '/settings.php';
require_once dirname(__DIR__) . '/server/form-security.php';
form_start_session();
header('Cache-Control: private, no-store');
if (!$siteConfig['allow_indexing']) {
    header('X-Robots-Tag: noindex, nofollow');
}

/** Render a local component with isolated props. Never pass a request value as its name. */
function render_component(string $name, array $props = []): void
{
    if (!preg_match('~\A[a-z0-9-]+(?:/[a-z0-9-]+)*\z~', $name)) {
        throw new InvalidArgumentException('Invalid component name.');
    }
    (static function (string $componentFile, array $props): void {
        require $componentFile;
    })(__DIR__ . '/' . $name . '.php', $props);
}

function component_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
