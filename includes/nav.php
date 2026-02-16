<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="nav">
    <div class="container">

        <div class="menu-toggle">☰</div>

        <ul class="menu">

            <li>
                <a class="<?= $currentPage == 'index.php' ? 'active' : '' ?>"
                   href="<?= BASE_URL ?>public/index.php">Início</a>
            </li>

            <li>
                <a class="<?= $currentPage == 'programacao.php' ? 'active' : '' ?>"
                   href="<?= BASE_URL ?>public/programacao.php">Programação</a>
            </li>

            <li>
                <a class="<?= $currentPage == 'cadastro.php' ? 'active' : '' ?>"
                   href="<?= BASE_URL ?>public/cadastro.php">Cadastro</a>
            </li>

            <li>
                <a class="<?= $currentPage == 'participantes.php' ? 'active' : '' ?>"
                   href="<?= BASE_URL ?>public/participantes.php">Participantes</a>
            </li>

            <?php if (isset($_SESSION['admin_id'])): ?>

                <li>
                    <a href="<?= BASE_URL ?>admin/dashboard.php">Dashboard</a>
                </li>

                <li>
                    <a href="<?= BASE_URL ?>admin/programacao.php">Programação ADM</a>
                </li>

                <li>
                    <a href="<?= BASE_URL ?>admin/logout.php">Sair</a>
                </li>

            <?php else: ?>

                <li>
                    <a href="<?= BASE_URL ?>public/login.php">Login</a>
                </li>

            <?php endif; ?>

        </ul>

    </div>
</nav>
