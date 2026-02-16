<?php
require 'includes/config.php';
$dados = $pdo->query("SELECT nome,cidade FROM participantes");
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
<table>
<tr><th>Nome</th><th>Cidade</th></tr>

<?php foreach($dados as $p): ?>
<tr>
<td><?= $p['nome'] ?></td>
<td><?= $p['cidade'] ?></td>
</tr>
<?php endforeach; ?>

</table>
</main>

<?php include 'includes/footer.php'; ?>
