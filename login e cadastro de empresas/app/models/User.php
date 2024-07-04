<?php
require_once 'config/database.php';

class User {
    private $pdo;
    public $id;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function authenticate($email, $password) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $this->id = $user['id'];
            return true;
        }

        return false;
    }
}
?>
