<?php
require_once __DIR__ . '/../includes/config.php';

$pageTitle = "Login Administrativo - Festival do Senhor 2026";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    if ($email && $senha) {
        $sql = $pdo->prepare("SELECT * FROM admins WHERE email = ?");
        $sql->execute([$email]);
        if ($sql->rowCount() > 0) {
            $admin = $sql->fetch();
            if (hash('sha256', $senha) === $admin['senha']) {
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_email'] = $admin['email'];
                header("Location: " . BASE_URL . "admin/dashboard.php");
                exit;
            } else {
                $erro = "Senha inválida";
            }
        } else {
            $erro = "Usuário não encontrado";
        }
    } else {
        $erro = "Preencha todos os campos";
    }
}
?>

<main class="container">
    <div class="form-box">
        <h2>Login Administrativo</h2>
        <?php if ($erro): ?>
            <p class="erro"><?= $erro ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button class="btn">Entrar</button>
        </form>
    </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>