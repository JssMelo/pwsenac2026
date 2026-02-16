<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// limpa todas as variáveis de sessão
$_SESSION = [];

// destrói a sessão
session_destroy();

require_once __DIR__ . '/../includes/config.php';

// redireciona para o login
header("Location: " . BASE_URL . "public/login.php");
exit;
