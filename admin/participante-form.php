<?php
require '../includes/auth.php';
require '../includes/config.php';

$id = $_GET['id'] ?? null;

if ($id) {
$stmt = $pdo->prepare("SELECT * FROM participantes WHERE id=?");
$stmt->execute([$id]);
$participante = $stmt->fetch();
}

if ($_POST) {

if ($id) {
$sql = $pdo->prepare("UPDATE participantes SET nome=?,cidade=? WHERE id=?");
$sql->execute([$_POST['nome'], $_POST['cidade'], $id]);
} else {
$sql = $pdo->prepare("INSERT INTO participantes (nome,cidade) VALUES (?,?)");
$sql->execute([$_POST['nome'], $_POST['cidade']]);
}

header("Location: participantes.php");
exit;
}
?>

<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>

<main>

<form method="POST">

<input name="nome" value="<?= $participante['nome'] ?? '' ?>" placeholder="Nome">
<input name="cidade" value="<?= $participante['cidade'] ?? '' ?>" placeholder="Cidade">

<button class="btn">Salvar</button>

</form>

</main>

<?php include '../includes/footer.php'; ?>
