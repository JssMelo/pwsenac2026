<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/config.php';

// título dinâmico
$pageTitle = $pageTitle ?? 'Festival do Senhor';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="<?= BASE_URL ?>css/style.css">

    <!-- Fonte opcional -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

<header class="header">
    <div class="container header-content">

        <h1 class="logo">
            <a href="<?= BASE_URL ?>public/index.php">Festival do Senhor</a>
        </h1>

        <?php if (isset($_SESSION['admin_id'])): ?>
            <div class="admin-area">
                <span>Painel ADM</span>
                <a href="<?= BASE_URL ?>admin/logout.php" class="btn-logout">Sair</a>
            </div>
        <?php endif; ?>

    </div>
</header>
