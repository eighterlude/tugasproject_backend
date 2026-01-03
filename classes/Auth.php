<?php
class Auth
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function login(string $username, string $password, array &$err): bool
    {
        $stmt = $this->db->prepare(
            "SELECT id, username, password FROM users WHERE username = ?"
        );
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if (!$user) {
            $err[] = "Username tidak ditemukan";
            return false;
        }

        if (!password_verify($password, $user['password'])) {
            $err[] = "Password salah";
            return false;
        }

        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        return true;
    }
}
