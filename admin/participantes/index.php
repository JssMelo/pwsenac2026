<?php
require_once(__DIR__ . '/../../includes/auth.php');;
require_once(__DIR__ . '/../../includes/config.php');

$dados = $pdo->query("SELECT * FROM participantes ORDER BY nome");
?>

<?php require_once(__DIR__ . '/../../includes/admin-header.php'); ?>
<?php require_once(__DIR__ . '/../../includes/admin-nav.php'); ?>

<main>
    <a href="form.php" class="btn">Cadastrar Participante</a>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $p): ?>
                <tr>
                    <td><?= htmlspecialchars($p['nome']) ?></td>
                    <td><?= htmlspecialchars($p['cidade']) ?></td>
                    <td>
                        <a href="form.php?id=<?= $p['id'] ?>">Editar</a>
                        <form method="POST" action="excluir.php" class="inline">
                            <input type="hidden" name="id" value="<?= $p['id'] ?>">
                            <button onclick="return confirm('Tem certeza?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php if(isset($_SESSION['msg'])): ?>
    <div class="alert">
        <?= $_SESSION['msg']; unset($_SESSION['msg']); ?>
    </div>
<?php endif; ?>

<?php require_once(__DIR__ . '/../../includes/footer.php'); ?>