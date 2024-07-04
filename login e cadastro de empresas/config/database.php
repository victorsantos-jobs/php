<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'manageasy');
define('DB_USER', 'root');
define('DB_PASS', '1234');

try {
    $pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Database connection failed: ' . $e->getMessage());
}
?>
