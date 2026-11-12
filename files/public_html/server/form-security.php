<?php
function form_rules(): array
{
    static $rules;
    return $rules ??= require dirname(__DIR__) . '/config/forms.php';
}

function form_start_session(): void
{
    if (session_status() === PHP_SESSION_ACTIVE) return;
    session_name('site_forms');
    session_start([
        'use_strict_mode' => true,
        'cookie_httponly' => true,
        'cookie_secure' => !empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off',
        'cookie_samesite' => 'Lax',
    ]);
}

function form_csrf_token(): string
{
    form_start_session();
    return $_SESSION['form_csrf'] ??= bin2hex(random_bytes(32));
}

function form_csrf_valid($token): bool
{
    return is_string($token) && isset($_SESSION['form_csrf']) && hash_equals($_SESSION['form_csrf'], $token);
}

function form_rate_allowed(): bool
{
    $rules = form_rules();
    $cutoff = time() - $rules['rate_window_seconds'];
    $_SESSION['form_attempts'] = array_values(array_filter($_SESSION['form_attempts'] ?? [], static fn ($time) => $time > $cutoff));
    if (count($_SESSION['form_attempts']) >= $rules['rate_limit']) return false;
    if (!form_ip_rate_allowed($rules)) return false;
    $_SESSION['form_attempts'][] = time();
    return true;
}

/** Share an atomic counter across sessions using the server's client address. */
function form_ip_rate_allowed(array $rules): bool
{
    // Do not trust client supplied forwarding headers. Configure trusted proxies
    // at the web server so REMOTE_ADDR contains the verified client address.
    $address = $_SERVER['REMOTE_ADDR'] ?? '';
    if (filter_var($address, FILTER_VALIDATE_IP) === false) return false;
    $directory = getenv('FORM_RATE_DIRECTORY') ?: sys_get_temp_dir() . '/american-authors-rate-' . substr(hash('sha256', __DIR__), 0, 16);
    if (!is_dir($directory) && !@mkdir($directory, 0700, true) && !is_dir($directory)) {
        error_log('Contact form: rate limit storage unavailable.');
        return false;
    }
    $path = $directory . '/' . hash('sha256', inet_pton($address)) . '.json';
    $stream = @fopen($path, 'c+');
    if ($stream === false) return false;
    try {
        if (!flock($stream, LOCK_EX)) return false;
        $now = time();
        $state = json_decode(stream_get_contents($stream), true);
        $state = is_array($state) && ($state['reset'] ?? 0) > $now
            ? $state : ['reset' => $now + $rules['rate_window_seconds'], 'count' => 0];
        if ($state['count'] >= $rules['ip_rate_limit']) return false;
        $state['count']++;
        $json = json_encode($state);
        rewind($stream);
        if (!ftruncate($stream, 0) || fwrite($stream, $json) !== strlen($json) || !fflush($stream)) return false;
        return true;
    } finally {
        // Closing releases the file lock even when a limit or write fails.
        fclose($stream);
    }
}
