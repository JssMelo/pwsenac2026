<?php
require '../includes/auth.php';
require '../includes/config.php';

$id = null;
$nome = '';
$email = '';
$telefone = '';
$cidade = '';
$doacao = '';
$observacao = '';

/* =============================
   MODO EDIÇÃO
============================= */
if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = $pdo->prepare("SELECT * FROM participantes WHERE id = ?");
    $sql->execute([$id]);

    $dados = $sql->fetch(PDO::FETCH_ASSOC);

    if ($dados) {
        $nome = $dados['nome'];
        $email = $dados['email'];
        $telefone = $dados['telefone'];
        $cidade = $dados['cidade'];
        $doacao = $dados['doacao'];
        $observacao = $dados['observacao'];
    }
}

/* =============================
   SALVAR (INSERT ou UPDATE)
============================= */
if ($_POST) {

    if (!empty($_POST['id'])) {

        $sql = $pdo->prepare("UPDATE participantes SET
            nome=?,
            email=?,
            telefone=?,
            cidade=?,
            doacao=?,
            observacao=?
            WHERE id=?");

        $sql->execute([
            $_POST['nome'],
            $_POST['email'],
            $_POST['telefone'],
            $_POST['cidade'],
            $_POST['doacao'],
            $_POST['observacao'],
            $_POST['id']
        ]);

    } else {

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

    header("Location: participantes.php");
    exit;
}
?>

<?php include '../includes/header.php'; ?>
<?php require_once __DIR__ . '/../includes/admin-nav.php'; ?>

<main>

<h2><?= $id ? 'Editar Participante' : 'Novo Participante' ?></h2>

<form method="POST">

<input type="hidden" name="id" value="<?= $id ?>">

<input name="nome" placeholder="Nome" required
value="<?= htmlspecialchars($nome) ?>">

<input name="email" placeholder="Email"
value="<?= htmlspecialchars($email) ?>">

<input name="telefone" placeholder="Telefone"
value="<?= htmlspecialchars($telefone) ?>">

<input name="cidade" placeholder="Cidade"
value="<?= htmlspecialchars($cidade) ?>">

<input name="doacao" placeholder="Doação"
value="<?= htmlspecialchars($doacao) ?>">

<textarea name="observacao" placeholder="Observações"><?= htmlspecialchars($observacao) ?></textarea>

<button class="btn">
<?= $id ? 'Atualizar' : 'Cadastrar' ?>
</button>

</form>

</main>

<?php include '../includes/footer.php'; ?>
