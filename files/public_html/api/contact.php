<?php
require_once dirname(__DIR__) . '/server/form-security.php';
require_once dirname(__DIR__) . '/server/form-validation.php';
require_once dirname(__DIR__) . '/server/form-mailer.php';
header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');
header('X-Robots-Tag: noindex, nofollow');

function form_response(int $status, string $message, array $errors = []): never
{
    http_response_code($status);
    if (!str_contains(strtolower($_SERVER['HTTP_ACCEPT'] ?? ''), 'application/json')) {
        header('Content-Type: text/html; charset=utf-8');
        $escape = static fn ($value) => htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        echo '<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex, nofollow"><title>Form response</title></head><body><main><h1>' . ($status === 200 ? 'Thank you' : 'Please check your enquiry') . '</h1><p>' . $escape($message) . '</p>';
        if ($errors !== []) {
            echo '<ul>';
            foreach (array_unique($errors) as $error) echo '<li>' . $escape($error) . '</li>';
            echo '</ul>';
        }
        echo '<p><a href="../contact">Back to the contact page</a></p></main></body></html>';
        exit;
    }
    echo json_encode(['success' => $status === 200, 'message' => $message, 'errors' => (object) $errors], JSON_INVALID_UTF8_SUBSTITUTE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Allow: POST');
    form_response(405, 'Please submit the enquiry form.');
}
$rules = form_rules();
$contentLength = (int) ($_SERVER['CONTENT_LENGTH'] ?? 0);
$postLimit = ini_parse_quantity(ini_get('post_max_size'));
if ($contentLength > $rules['upload_max_bytes'] + 1024 * 1024 || ($postLimit > 0 && $contentLength > $postLimit)) form_response(413, 'The request is too large. Maximum file size is ' . (int) ceil($rules['upload_max_bytes'] / 1048576) . ' MB.');
$contentType = strtolower(explode(';', $_SERVER['CONTENT_TYPE'] ?? '')[0]);
if (!in_array($contentType, ['multipart/form-data', 'application/x-www-form-urlencoded'], true)) form_response(415, 'Please submit the enquiry form.');
form_start_session();
if (!form_csrf_valid($_POST['csrf_token'] ?? null)) form_response(403, 'Please refresh this page, then send your enquiry again.');
[$data, $errors] = form_validate($_POST, $rules);
[$attachment, $fileError] = form_validate_upload($_FILES, $rules);
if ($fileError !== null) $errors['manuscript'] = $fileError;
if ($attachment !== null && $data['form_kind'] !== 'contact') $errors['manuscript'] = 'Attachments are supported on the contact form only.';
if ($errors !== []) form_response(422, 'Please review the marked fields before sending.', $errors);
$site = require dirname(__DIR__) . '/config/site.php';
$mail = require dirname(__DIR__) . '/config/mail.php';
if (!form_mail_ready($mail, $site) || !is_file(dirname(__DIR__) . '/vendor/autoload.php')) form_response(503, 'The enquiry form is unavailable at the moment. Please reach us by phone or email.');
if (!form_rate_allowed()) {
    header('Retry-After: ' . $rules['rate_window_seconds']);
    form_response(429, 'Please wait a few minutes before sending another enquiry.');
}
session_write_close();
try {
    form_send_mail($data, $attachment, $mail, $site);
} catch (Throwable $error) {
    // Do not expose credentials, SMTP diagnostics or visitor content in responses/logs.
    error_log('Contact form: SMTP delivery failed.');
    form_response(502, 'Your request could not be sent. Please try again or contact us by phone or email.');
}
form_response(200, $data['form_kind'] === 'journal' ? 'Your journal signup request has reached our team.' : 'Thank you for sharing your book plans. Your enquiry has reached our team.');
