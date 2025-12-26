<?php

class User
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function create(string $username, string $email, string $password): bool
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $this->db->prepare("
            INSERT INTO users (username, email, password_hash)
            VALUES (:u,:e,:p)
        ");

        return $stmt->execute([
            "u" => $username,
            "e" => $email,
            "p" => $hash
        ]);
    }

    public function find(string $username): ?array
    {
        $stmt = $this->db->prepare("
            SELECT * FROM users WHERE username = :u LIMIT 1
        ");

        $stmt->execute(["u" => $username]);

        $data = $stmt->fetch();

        return $data ?: null;
    }
}
