<?php
/*
 * SMTP example. Do not store real passwords in this tracked file.
 *
 * 1. Copy this file to mail.local.php in the same config directory.
 * 2. Replace the example values with your actual SMTP settings.
 * 3. Set enabled to true once the configuration is complete.
 *
 * Obtain these settings from your hosting or email provider.
 * Only mail.local.php is loaded automatically, not this example file.
 * Deploy the private mail.local.php file separately; it is ignored by Git.
 */
return [
    // Enable sending only after completing the SMTP configuration.
    'enabled' => false,

    // Hostinger Email hostname. Confirm the mailbox service in hPanel.
    'host' => 'smtp.hostinger.com',

    // Hostinger Email uses port 465 with SSL.
    'port' => 465,
    'encryption' => 'ssl',

    // Keep authentication enabled for production SMTP.
    'auth' => true,

    // SMTP login username, usually the complete mailbox address.
    'username' => 'info@americanauthors.org',

    // Replace this placeholder with your SMTP password or app password.
    'password' => 'REPLACE_WITH_YOUR_SMTP_PASSWORD',

    // Sender address authorized by your provider, usually the login mailbox.
    // The visitor's address is used as Reply-To, never as the sender.
    'from_email' => 'info@americanauthors.org',

    // Sender display name. Leave empty to use project_name from site.php.
    'from_name' => '',

    // Primary inbox for form enquiries. Leave empty to use the email in site.php.
    // To receive only in Gmail, enter that Gmail address here.
    // This does not change the SMTP login or authorized sender address.
    'to_email' => 'info@americanauthors.org',

    // Optional additional recipients, such as Gmail or another team inbox.
    // Example: 'additional_to_emails' => ['yourname@gmail.com'],
    // Multiple recipients: ['yourname@gmail.com', 'team@example.com'].
    // Recipient passwords are not needed; sending uses the SMTP settings above.
    // All recipients are visible in the email's To field.
    // Leave empty if no additional recipients are needed.
    'additional_to_emails' => [],

    // SMTP connection timeout in seconds.
    'timeout' => 15,
];
