<?php
require_once __DIR__ . '/protect.php';
$auth = new Auth($pdo);
$currentId = $auth->getCurrentUserId();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Todo App</title>
</head>

<body>
    <h1>Dashboard</h1>
    <p>Halo, user dengan ID: <?= htmlspecialchars((string) $currentId) ?></p>
    <p>Ini nanti bisa diisi list TODO, dll.</p>

    <p><a href="logout.php">Logout</a></p>
</body>

</html>