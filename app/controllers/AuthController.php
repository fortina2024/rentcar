<?php

class AuthController {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            if ($user->login($_POST['email'], $_POST['password'])) {
                header("Location: index.php?page=vehicles");
            }
        }
        require "../app/views/auth/login.php";
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->register($_POST['name'], $_POST['email'], $_POST['password']);
            header("Location: index.php?page=login");
        }
        require "../app/views/auth/register.php";
    }

    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
