<?php
// ===== URL BASE DO PROJETO =====
if (!defined('BASE_URL')) {
    define('BASE_URL', 'http://localhost/pwsenac2026/');
}

// ===== CONFIG BANCO =====
$host = "localhost";
$db   = "festival";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}