<?php
require_once(__DIR__ . '/../../includes/auth.php');
require_once(__DIR__ . '/../../includes/config.php');

$dados = $pdo->query("
    SELECT * FROM programacao 
    ORDER BY data, hora
")->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once(__DIR__ . '/../../includes/admin-header.php'); ?>
<?php require_once(__DIR__ . '/../../includes/admin-nav.php'); ?>

<main class="container">

<h2>Programação</h2>

<?php if(isset($_SESSION['msg'])): ?>
    <div class="alert">
        <?= $_SESSION['msg']; unset($_SESSION['msg']); ?>
    </div>
<?php endif; ?>

<a href="form.php" class="btn">Novo</a>

<table>

<tr>
<th>Data</th>
<th>Hora</th>
<th>Atividade</th>
<th>Ações</th>
</tr>

<?php foreach($dados as $p): ?>

<tr>
<td><?= date('d/m/Y', strtotime($p['data'])) ?></td>
<td><?= date('H:i', strtotime($p['hora'])) ?></td>

<td><?= htmlspecialchars($p['atividade']) ?></td>

<td>

<a href="form.php?id=<?= $p['id'] ?>">Editar</a>

<form method="POST" action="excluir.php" style="display:inline;">
    <input type="hidden" name="id" value="<?= $p['id'] ?>">
    <button onclick="return confirm('Tem certeza que deseja excluir?')">
        Excluir
    </button>
</form>

</td>

</tr>

<?php endforeach; ?>

</table>

</main>

<?php require_once(__DIR__ . '/../../includes/footer.php'); ?>
