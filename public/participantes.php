<?php
$pageTitle = "Participantes";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

// lista participantes
$sql = $pdo->query("
    SELECT nome, cidade, doacao
    FROM participantes
    ORDER BY created_at DESC
");

$participantes = $sql->fetchAll();

// estatísticas
$total = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();
$totalDoacoes = $pdo->query("SELECT SUM(doacao) FROM participantes")->fetchColumn();
?>

<main class="container">

    <h2>Lista de Participantes</h2>

    <div class="stats">

        <div class="stat-box">
            <strong><?= $total ?></strong>
            <span>Inscritos</span>
        </div>

        <div class="stat-box">
            <strong>R$ <?= number_format($totalDoacoes, 2, ',', '.') ?></strong>
            <span>Doações</span>
        </div>

    </div>

    <?php if ($participantes): ?>

        <div class="table-responsive">

            <table class="tabela">

                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($participantes as $p): ?>
                        <tr>
                            <td><?= htmlspecialchars($p['nome']) ?></td>
                            <td><?= htmlspecialchars($p['cidade']) ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>

        </div>

    <?php else: ?>

        <p>Nenhum participante cadastrado ainda.</p>

    <?php endif; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
