<?php

class SessionManager
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function login(int $userId)
    {
        $_SESSION['user_id'] = $userId;
        session_regenerate_id(true);
    }

    public function logout()
    {
        session_destroy();
    }

    public function isLogged(): bool
    {
        return isset($_SESSION['user_id']);
    }

    public function getUserID(): ?int
    {
        return $_SESSION['user_id'] ?? null;
    }
}