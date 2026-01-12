<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {

    public function login() {
        $error = null;
        $email = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $user = new User();
            $data = $user->login($_POST);

            if ($data) {
                $_SESSION['user'] = $data;
                header("Location: " . BASE_URL . "/products");
                exit;
            } else {
                $error = "Email atau password salah!";
            }
        }

        require __DIR__ . '/../views/auth/login.php';
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User();
            $user->register($_POST);
            header("Location: " . BASE_URL . "/login");
            exit;
        }

        require __DIR__ . '/../views/auth/register.php';
    }
}
