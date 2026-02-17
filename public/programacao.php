<?php
require_once __DIR__ . '/../includes/config.php';

$pageTitle = "Programação do Festival do Senhor 2026";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

$sql = $pdo->query("SELECT * FROM programacao ORDER BY data, hora");

$programacao = $sql->fetchAll();

// agrupar por data
$agenda = [];

foreach ($programacao as $item) {
    $agenda[$item['data']][] = $item;
}
?>

<main class="container">
    <h2>Programação do Evento</h2>
    <?php if ($agenda): ?>
        <?php foreach ($agenda as $data => $atividades): ?>
            <div class="programacao-dia">
                <h3 class="data-titulo">
                    <?= date('d/m/Y', strtotime($data)) ?>
                </h3>
                <?php foreach ($atividades as $item): ?>
                    <div class="prog-card">
                        <div class="prog-hora">
                            <?= date('H:i', strtotime($item['hora'])) ?>
                        </div>
                        <div class="prog-info">
                            <h4><?= htmlspecialchars($item['atividade']) ?></h4>
                            <?php if ($item['responsavel']): ?>
                                <p>
                                    <strong>Responsável:</strong>
                                    <?= htmlspecialchars($item['responsavel']) ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Nenhuma programação cadastrada ainda.</p>
    <?php endif; ?>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>