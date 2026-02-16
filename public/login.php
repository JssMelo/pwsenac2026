<?php
session_start();
require 'includes/config.php';

if ($_POST) {

$email = $_POST['email'];
$senha = hash('sha256', $_POST['senha']);

$sql = $pdo->prepare("SELECT * FROM admins WHERE email=? AND senha=?");
$sql->execute([$email, $senha]);

if ($sql->rowCount()) {
    $_SESSION['admin'] = $email;
    header("Location: admin/dashboard.php");
    exit;
}

}
?>

<?php include 'includes/header.php'; ?>
<?php include 'includes/nav.php'; ?>

<main>
<form method="POST">
<input type="email" name="email" placeholder="Email">
<input type="password" name="senha" placeholder="Senha">
<button class="btn">Entrar</button>
</form>
</main>

<?php include 'includes/footer.php'; ?>
