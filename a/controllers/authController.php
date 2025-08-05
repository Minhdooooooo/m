<?php
class AuthController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            if ($username === 'admin' && $password === '123') {
                $_SESSION['admin'] = true;
                header("Location: index.php?action=admin&do=dashboard");
            } else {
                $error = "Sai tên đăng nhập hoặc mật khẩu";
                require 'views/login.php';
            }
        } else {
            require 'views/login.php';
        }
    }
    
    public function logout() {
        session_destroy();
        header("Location: index.php");
    }
}
?>