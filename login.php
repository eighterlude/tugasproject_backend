<?php
require "config.php";
require "classes/Auth.php";

$auth = new Auth($pdo);
$err = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($auth->login($_POST['username'], $_POST['password'], $err)) {
        header("Location: protected.php");
        exit;
    }
}
?>
<form method="post">
    <input name="username">
    <input name="password" type="password">
    <button>Login</button>
</form>
