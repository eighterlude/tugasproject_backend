<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/classes/Auth.php";

$auth = new Auth($pdo);
$auth->requireLogin();