<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . "/config.php";

$currentId = $_SESSION['user_id'];
?>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - To-do List App</title>
</head>

<body>
    <h1>Dashboard</h1>
    <p>Halo, user dengan ID: <?= htmlspecialchars((string) $currentId) ?></p>
    <p>Ini nanti bisa diisi list TODO, dll.</p>

    <p><a href="logout.php">Logout</a></p>
</body>

</html>