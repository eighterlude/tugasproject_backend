<?php
require "config.php";
require "classes/Auth.php";

Auth::requireLogin();
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>

<body>

    <h2>Dashboard</h2>
    <p>Halo, <?= htmlspecialchars($_SESSION['username']) ?></p>

    <a href="logout.php">Logout</a>

</body>

</html>