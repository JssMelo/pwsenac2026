<?php
require 'includes/config.php';
$programacao = $pdo->query("
    SELECT * FROM programacao 
    ORDER BY data, hora
");
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>

<h2>Programação do Evento</h2>

<div class="programacao">

<?php foreach($programacao as $item): ?>

<div class="prog-card">

<div class="prog-data">
<?= date('d/m/Y', strtotime($item['data'])) ?>
</div>

<div class="prog-info">
<h3><?= $item['atividade'] ?></h3>
<p><strong>Horário:</strong> <?= date('H:i', strtotime($item['hora'])) ?></p>
<p><strong>Responsável:</strong> <?= $item['responsavel'] ?></p>
</div>

</div>

<?php endforeach; ?>

</div>

</main>

<?php include 'includes/footer.php'; ?>
