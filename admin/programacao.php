<?php
require '../includes/auth.php';
require '../includes/config.php';

$dados = $pdo->query("SELECT * FROM programacao ORDER BY data, hora");
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<main>

<h2>Programação</h2>

<a href="programacao-form.php" class="btn">Novo</a>

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
<td><?= $p['atividade'] ?></td>

<td>
<a href="programacao-form.php?id=<?= $p['id'] ?>">Editar</a>
<a href="programacao-excluir.php?id=<?= $p['id'] ?>">Excluir</a>
</td>
</tr>

<?php endforeach; ?>

</table>

</main>

<?php include '../includes/footer.php'; ?>
