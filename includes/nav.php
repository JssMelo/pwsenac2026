<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="nav">
    <div class="container nav-container">

        <div class="logo">
            <a href="<?= BASE_URL ?>public/index.php">Festival do Senhor</a>
        </div>

        <div class="menu-toggle">☰</div>

        <ul class="menu">

            <li>
                <a href="<?= BASE_URL ?>public/index.php">Início</a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>public/programacao.php">Programação</a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>public/cadastro.php">Cadastro</a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>public/participantes.php">Participantes</a>
            </li>

            <?php if (isset($_SESSION['admin'])): ?>

                <li>
                    <a href="<?= BASE_URL ?>admin/dashboard.php">Dashboard</a>
                </li>

                <li>
                    <a href="<?= BASE_URL ?>admin/logout.php">Sair</a>
                </li>

            <?php else: ?>

                <li>
                    <a href="<?= BASE_URL ?>public/login.php">Login ADM</a>
                </li>

            <?php endif; ?>

        </ul>

    </div>
</nav>
