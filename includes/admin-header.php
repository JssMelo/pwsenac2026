<?php
if (!defined('BASE_URL')) {
    require_once(__DIR__ . '/../includes/config.php');
}
?>

<?php
if (!isset($pageTitle)) {
    $pageTitle = "Painel Administrativo Festival do Senhor 2026";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> | ADM</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>
<header class="top-header admin-header">
    <div class="container header-container">
        <h1 class="logo">
            <a href="<?= BASE_URL ?>admin/dashboard.php">
                Painel Administrativo
            </a>
        </h1>
        <div class="admin-user">
            Logado como:
            <strong><?= $_SESSION['admin'] ?? 'Administrador' ?></strong>
        </div>
    </div>
</header>
