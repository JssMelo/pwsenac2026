<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/auth.php';

$pageTitle = "Dashboard ADM";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

// =====================
// MÉTRICAS
// =====================

$totalParticipantes = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();

$totalDoacoes = $pdo->query("
    SELECT COALESCE(SUM(doacao), 0) 
    FROM participantes
")->fetchColumn();

$totalEventos = $pdo->query("SELECT COUNT(*) FROM programacao")->fetchColumn();
?>

<main class="container">

    <h2>Painel Administrativo</h2>

    <section class="cards-dashboard">

        <div class="card-dashboard">
            <span>👥 Total de Inscritos</span>
            <strong><?= $totalParticipantes ?></strong>
        </div>

        <div class="card-dashboard">
            <span>💰 Total em Doações</span>
            <strong>R$ <?= number_format((float)$totalDoacoes, 2, ',', '.') ?></strong>
        </div>

        <div class="card-dashboard">
            <span>📅 Atividades Programadas</span>
            <strong><?= $totalEventos ?></strong>
        </div>

    </section>

    <section class="atalhos-dashboard">

        <a href="<?= BASE_URL ?>admin/participantes.php" class="btn-dashboard">
            Gerenciar Participantes
        </a>

        <a href="<?= BASE_URL ?>admin/programacao.php" class="btn-dashboard">
            Gerenciar Programação
        </a>

    </section>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
