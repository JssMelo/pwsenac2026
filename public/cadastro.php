<?php
require_once __DIR__ . '/../includes/config.php';

$pageTitle = "Cadastro";

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';


$sucesso = '';
$erro = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome       = trim($_POST['nome']);
    $email      = trim($_POST['email']);
    $telefone   = trim($_POST['telefone']);
    $cidade     = trim($_POST['cidade']);
    $doacao     = trim($_POST['doacao']);
    $observacao = trim($_POST['observacao']);

    if ($nome) {

        $sql = $pdo->prepare("
            INSERT INTO participantes
            (nome, email, telefone, cidade, doacao, observacao)
            VALUES (?, ?, ?, ?, ?, ?)
        ");

        $sql->execute([
            $nome,
            $email,
            $telefone,
            $cidade,
            $doacao ?: null,
            $observacao
        ]);

        $sucesso = "Cadastro realizado com sucesso!";
    } else {
        $erro = "O nome é obrigatório.";
    }
}
?>

<main class="container">

    <div class="form-box">

        <h2>Cadastro de Participante</h2>

        <?php if ($sucesso): ?>
            <p class="sucesso"><?= $sucesso ?></p>
        <?php endif; ?>

        <?php if ($erro): ?>
            <p class="erro"><?= $erro ?></p>
        <?php endif; ?>

        <form method="POST">

            <input name="nome" placeholder="Nome" required>

            <input type="email" name="email" placeholder="Email">

            <input name="telefone" placeholder="Telefone">

            <input name="cidade" placeholder="Cidade">

            <input type="number" step="0.01" name="doacao" placeholder="Valor da Doação (R$)">

            <textarea name="observacao" placeholder="Observações"></textarea>

            <button class="btn">Cadastrar</button>

        </form>

    </div>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
