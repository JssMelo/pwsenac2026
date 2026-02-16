<?php
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/config.php';
}
?>

<?php
if (!isset($pageTitle)) {
    $pageTitle = "Festival do Senhor";
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?></title>

    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/style.css">
</head>

<body>

<header class="top-header">
    <div class="container header-container">

        <h1 class="logo">
            <a href="<?= BASE_URL ?>public/index.php">
                Festival do Senhor
            </a>
        </h1>

    </div>
</header>
