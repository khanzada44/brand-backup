<?php
use PHPMailer\PHPMailer\PHPMailer;

function form_mail_recipients(array $mail, array $site): array
{
    $primary = $mail['to_email'] ?: $site['email'];
    $additional = $mail['additional_to_emails'] ?? [];
    if (!is_string($primary) || !is_array($additional)) return [];
    $recipients = [];
    foreach ([$primary, ...$additional] as $email) {
        if (!is_string($email) || !filter_var(trim($email), FILTER_VALIDATE_EMAIL)) return [];
        $email = trim($email);
        $recipients[strtolower($email)] = $email;
    }
    return array_values($recipients);
}

function form_mail_ready(array $mail, array $site): bool
{
    return $mail['enabled'] === true && $mail['host'] !== ''
        && $mail['port'] > 0 && $mail['port'] <= 65535
        && in_array($mail['encryption'], ['tls', 'ssl', 'none'], true)
        && filter_var($mail['from_email'], FILTER_VALIDATE_EMAIL)
        && form_mail_recipients($mail, $site) !== []
        && (!$mail['auth'] || ($mail['username'] !== '' && $mail['password'] !== ''));
}

function form_send_mail(array $data, ?array $attachment, array $config, array $site): void
{
    require_once dirname(__DIR__) . '/vendor/autoload.php';
    $mailer = new PHPMailer(true);
    $mailer->isSMTP();
    $mailer->Host = $config['host'];
    $mailer->Port = $config['port'];
    $mailer->SMTPAuth = $config['auth'];
    $mailer->Username = $config['username'];
    $mailer->Password = $config['password'];
    $mailer->SMTPSecure = $config['encryption'] === 'none' ? '' : $config['encryption'];
    $mailer->SMTPAutoTLS = $config['encryption'] !== 'none';
    $mailer->Timeout = $config['timeout'];
    $mailer->CharSet = PHPMailer::CHARSET_UTF8;
    $mailer->setFrom($config['from_email'], $config['from_name'] ?: $site['project_name']);
    foreach (form_mail_recipients($config, $site) as $recipient) $mailer->addAddress($recipient);
    $mailer->addReplyTo($data['email'], $data['name']);
    $journal = $data['form_kind'] === 'journal';
    $mailer->Subject = $site['project_name'] . ($journal ? ' — Journal signup request' : ' — Book enquiry');
    $lines = $journal ? ['Journal signup request', 'Email: ' . $data['email']] : [
        'Name: ' . $data['name'], 'Email: ' . $data['email'], 'Phone: ' . $data['phone'],
        'Services: ' . (implode(', ', $data['services']) ?: 'Not specified'),
        'Book stage: ' . ($data['stage'] ?: 'Not specified'),
        'SMS marketing consent: ' . ($data['marketing_consent'] === '1' ? 'Yes' : 'No'),
        '', 'Message:', $data['message'],
    ];
    $mailer->isHTML(false);
    $mailer->Body = implode("\n", $lines);
    if ($attachment !== null) $mailer->addAttachment($attachment['path'], $attachment['name'], PHPMailer::ENCODING_BASE64, $attachment['mime']);
    if (!$mailer->send()) throw new RuntimeException('SMTP did not accept the message.');
}
