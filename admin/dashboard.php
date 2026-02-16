<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth.php';

$pageTitle = "Dashboard ADM";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

// métricas
$totalParticipantes = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();
$totalDoacoes = $pdo->query("SELECT SUM(doacao) FROM participantes")->fetchColumn();
$totalEventos = $pdo->query("SELECT COUNT(*) FROM programacao")->fetchColumn();
?>

<main class="container">

    <h2>Painel Administrativo</h2>

    <div class="cards">

        <div class="card-dashboard">
            <span>Total de Inscritos</span>
            <strong><?= $totalParticipantes ?></strong>
        </div>

        <div class="card-dashboard">
            <span>Total em Doações</span>
            <strong>
                R$ <?= number_format($totalDoacoes, 2, ',', '.') ?>
            </strong>
        </div>

        <div class="card-dashboard">
            <span>Atividades Programadas</span>
            <strong><?= $totalEventos ?></strong>
        </div>

    </div>

    <div class="atalhos">

        <a href="<?= BASE_URL ?>admin/participantes.php" class="btn">
            Gerenciar Participantes
        </a>

        <a href="<?= BASE_URL ?>admin/programacao.php" class="btn">
            Gerenciar Programação
        </a>

    </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
