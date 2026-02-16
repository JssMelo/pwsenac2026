<?php
require '../includes/auth.php';
require '../includes/config.php';

$dados = $pdo->query("SELECT * FROM participantes");
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<main>

<a href="participante-form.php" class="btn">Novo</a>

<table>
<tr>
<th>Nome</th>
<th>Cidade</th>
<th>Ações</th>
</tr>

<?php foreach($dados as $p): ?>
<tr>
<td><?= $p['nome'] ?></td>
<td><?= $p['cidade'] ?></td>
<td>
<a href="participante-form.php?id=<?= $p['id'] ?>">Editar</a>
<a href="excluir.php?id=<?= $p['id'] ?>">Excluir</a>
</td>
</tr>
<?php endforeach; ?>

</table>

</main>

<?php include '../includes/footer.php'; ?>
