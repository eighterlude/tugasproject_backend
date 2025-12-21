<?php

require_once __DIR__ . "/User.php";
require_once __DIR__ . "/SessionManager.php";

class Auth
{
    private User $user;
    private SessionManager $session;

    public function __construct(PDO $db)
    {
        $this->user = new User($db);
        $this->session = new SessionManager();
    }

    public function register($username, $email, $password, $confirm, &$err)
    {
        $err = [];

        if ($password !== $confirm) {
            $err[] = "Password tidak sama";
            return false;
        }

        return $this->user->create($username, $email, $password);
    }

    public function login($username, $password, &$err)
    {
        $err = [];

        $data = $this->user->find($username);

        if (!$data || !password_verify($password, $data['password_hash'])) {
            $err[] = "Login gagal";
            return false;
        }

        $this->session->login($data['id']);

        return true;
    }

    public function protect()
    {
        if (!$this->session->isLogged()) {
            header("Location: login.php");
            exit;
        }
    }

    public function logout()
    {
        $this->session->logout();
    }
}