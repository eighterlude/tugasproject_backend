<?php
require "config.php";
require "classes/Auth.php";

$auth = new Auth($pdo);
$err = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $success = $auth->register(
        $_POST['username'],
        $_POST['email'],
        $_POST['password'],
        $_POST['confirm'],
        $err
    );
}
?>
<form method="post">
    <input name="username" placeholder="username">
    <input name="email" placeholder="email">
    <input name="password" placeholder="password" type="password">
    <input name="confirm" placeholder="confirm password" type="password">
    <button>Register</button>
</form>
