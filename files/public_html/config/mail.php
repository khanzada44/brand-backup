<?php
/*
 * SMTP setup:
 * 1. Copy mail.local.example.php to mail.local.php in this directory.
 * 2. Replace the example values with your email provider's SMTP settings.
 * 3. Set 'enabled' to true once the configuration is complete.
 *
 * The private file is loaded automatically below and is ignored by Git.
 * Alternatively, configure the server environment variables used below.
 */
$siteEmail = (require __DIR__ . '/site.php')['email'];
$config = [
    // Sending switch; environment example: MAIL_ENABLED=true.
    'enabled' => filter_var(getenv('MAIL_ENABLED') ?: 'false', FILTER_VALIDATE_BOOLEAN),
    // Hostinger Email defaults. Override if hPanel lists a different email service.
    'host' => getenv('SMTP_HOST') ?: 'smtp.hostinger.com',
    'port' => (int) (getenv('SMTP_PORT') ?: 465),
    'encryption' => getenv('SMTP_ENCRYPTION') ?: 'ssl', // tls, ssl, or none (local testing only)
    'auth' => filter_var(getenv('SMTP_AUTH') === false ? 'true' : getenv('SMTP_AUTH'), FILTER_VALIDATE_BOOLEAN),
    // SMTP login, often the complete mailbox address; use your provider's value.
    'username' => getenv('SMTP_USERNAME') ?: $siteEmail,
    // SMTP password/app password/API credential supplied by your email provider.
    'password' => getenv('SMTP_PASSWORD') ?: '',
    // Authorized sender address, e.g. noreply@example.com, NOT the visitor's email.
    'from_email' => getenv('SMTP_FROM_EMAIL') ?: $siteEmail,
    'from_name' => getenv('SMTP_FROM_NAME') ?: '', // falls back to the global project name
    'to_email' => getenv('MAIL_TO_EMAIL') ?: '', // falls back to the global contact email
    // Optional extra inboxes, e.g. Gmail. Environment example: owner@gmail.com,team@example.com.
    // Private local-file example: 'additional_to_emails' => ['owner@gmail.com'],
    'additional_to_emails' => array_values(array_filter(array_map('trim', explode(',', getenv('MAIL_ADDITIONAL_TO_EMAILS') ?: '')))),
    'timeout' => 15,
];
// Values from your private local file override the environment/default values above.
$localFile = __DIR__ . '/mail.local.php';
if (is_file($localFile)) {
    $config = array_replace($config, require $localFile);
}
return $config;
