<nav class="nav admin-nav">
    <div class="container nav-container">

        <div class="logo">
            <a href="<?= BASE_URL ?>admin/dashboard.php">Painel ADM</a>
        </div>

        <div class="menu-toggle">☰</div>

        <ul class="menu">

            <li>
                <a href="<?= BASE_URL ?>admin/dashboard.php">Dashboard</a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>admin/participantes/index.php">
                    Participantes
                </a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>admin/programacao/index.php">
                    Programação
                </a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>public/index.php" target="_blank">
                    Ver site
                </a>
            </li>

            <li>
                <a href="<?= BASE_URL ?>admin/logout.php" class="btn-danger">
                    Sair
                </a>
            </li>

        </ul>

    </div>
</nav>
