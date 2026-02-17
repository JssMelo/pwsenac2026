<?php
require_once __DIR__ . '/../includes/config.php';

$pageTitle = "Lista de Participantes - Festival do Senhor 2026";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

$sql = $pdo->query("SELECT nome, cidade, doacao FROM participantes ORDER BY created_at DESC");

$participantes = $sql->fetchAll(PDO::FETCH_ASSOC);

$total = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();

$totalDoacoes = $pdo->query("SELECT COALESCE(SUM(doacao), 0) FROM participantes")->fetchColumn();
?>

<main class="container">
    <section class="card">
        <h2>Presenças confirmadas no Festival do Senhor 2026!</h2>
        <div class="cards">
            <div>
                <strong><?= $total ?></strong><br>
                Inscritos
            </div>
            <div>
                <strong>
                    R$ <?= number_format((float)$totalDoacoes, 2, ',', '.') ?>
                </strong><br>
                Doações
            </div>
        </div>
    </section>
    <section class="card">
        <?php if ($participantes): ?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($participantes as $p): ?>
                            <tr>
                                <td>
                                    <?= htmlspecialchars($p['nome']) ?>
                                </td>
                                <td>
                                    <?= htmlspecialchars($p['cidade']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert">
                Nenhum participante cadastrado ainda.
            </div>
        <?php endif; ?>
    </section>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>