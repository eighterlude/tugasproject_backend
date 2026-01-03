<?php
require "config.php";

$err = [];
$sukses = false;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '' || $password === '') {
        $err[] = "Username dan password wajib diisi";
    } else {
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->execute([$username]);

        if ($stmt->fetch()) {
            $err[] = "Username sudah terdaftar";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $pdo->prepare(
                "INSERT INTO users (username, password) VALUES (?, ?)"
            );
            $stmt->execute([$username, $hash]);
            $sukses = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        .box {
            width: 320px;
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

        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>

    <div class="box">
        <h3>Daftar Akun</h3>

        <?php if ($sukses): ?>
            <p class="success">
                Akun berhasil dibuat.
                <a href="login.php">Login sekarang</a>
            </p>
        <?php endif; ?>

        <?php if (!empty($err)): ?>
            <p class="error"><?= implode("<br>", $err) ?></p>
        <?php endif; ?>

        <form method="post">
            <input name="username" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Daftar</button>
        </form>
    </div>

</body>

</html>