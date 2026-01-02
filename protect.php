<?php
declare(strict_types=1);

if (session_status() !== PHP_SESSION_ACTIVE) {

    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    session_set_cookie_params([
        'lifetime' => 0,
        'path' => '/',
        'domain' => '',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    ini_set('session.use_strict_mode', '1');
    ini_set('session.use_only_cookies', '1');
    session_start();
}

$timeoutMinutes = 30;
$now = time();

if (!isset($_SESSION['last_activity'])) {
    $_SESSION['last_activity'] = $now;
} else {
    if (($now - (int) $_SESSION['last_activity']) > ($timeoutMinutes * 60)) {
        session_unset();
        session_destroy();
        header("Location: login.php?err=" . urlencode("Session expired, login lagi"));
        exit;
    }
    $_SESSION['last_activity'] = $now;
}

if (empty($_SESSION['user_id'])) {
    header("Location: login.php?err=" . urlencode("Silakan login dulu"));
    exit;
}
