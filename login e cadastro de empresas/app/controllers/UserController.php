<?php

class UserController {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($this->authenticate($email, $password)) {
                    $_SESSION['user'] = $email;
                    header('Location: /manageasy/companies');
                    exit;
                } else {
                    echo "Dados inválidos. Confira o email e senha e tente novamente.";
                }
            }
        }
        require 'app/views/login.php';
    }

    private function authenticate($email, $password) {
        // Lógica de autenticação
        return ($email === 'victorsantos@victorsantos.com' && $password === '123Victor');
    }

    public function logout() {
        session_destroy();
        header('Location: /manageasy/login');
        exit;
    }
}
?>
