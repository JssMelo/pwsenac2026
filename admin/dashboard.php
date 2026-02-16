<?php
require '../includes/auth.php';
require '../includes/config.php';

$total = $pdo->query("SELECT COUNT(*) FROM participantes")->fetchColumn();
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<main>
<div class="cards">
<div>Total inscritos<br><?= $total ?></div>
</div>
</main>

<?php include '../includes/footer.php'; ?>
