<?php
declare(strict_types=1);

require_once __DIR__ . '/session.php';

enforce_session_timeout(30);

if (empty($_SESSION['user_id'])) {
    header("Location: login.php?err=" . urlencode("Silakan login dulu"));
    exit;
}
