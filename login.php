<?php
require "config.php";
require "classes/Auth.php";

$auth = new Auth($pdo);
$err = [];

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if ($auth->login($_POST['username'], $_POST['password'], $err)) {
        header("Location: dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            font-family: Helvetica, sans-serif;
            background: #f4f4f4;
        }

        .login-box {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 6px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
        }

        input,
        button {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }

        button {
            background: #333;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="login-box">
        <h3>Login</h3>

        <?php if (!empty($err)): ?>
            <p style="color:red"><?= implode("<br>", $err) ?></p>
        <?php endif; ?>

        <form method="post">
            <input name="username" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>