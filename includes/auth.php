<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/config.php';

// verifica se está logado
if (!isset($_SESSION['admin_id'])) {
    header("Location: " . BASE_URL . "public/login.php");
    exit;
}