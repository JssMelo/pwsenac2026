<?php
require 'includes/config.php';

if ($_POST) {

$sql = $pdo->prepare("INSERT INTO participantes 
(nome,email,telefone,cidade,doacao,observacao)
VALUES (?,?,?,?,?,?)");

$sql->execute([
$_POST['nome'],
$_POST['email'],
$_POST['telefone'],
$_POST['cidade'],
$_POST['doacao'],
$_POST['observacao']
]);

}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
<form method="POST">
<input name="nome" placeholder="Nome" required>
<input name="email" placeholder="Email">
<input name="telefone" placeholder="Telefone">
<input name="cidade" placeholder="Cidade">
<input name="doacao" placeholder="Doação">
<textarea name="observacao" placeholder="Observações"></textarea>
<button class="btn">Cadastrar</button>
</form>
</main>

<?php include 'includes/footer.php'; ?>
