<?php
require_once(__DIR__ . '/../../includes/auth.php');
require_once(__DIR__ . '/../../includes/config.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$data = '';
$hora = '';
$atividade = '';
$responsavel = '';

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM programacao WHERE id = ?");
    $sql->execute([$id]);
    $item = $sql->fetch(PDO::FETCH_ASSOC);
    if ($item) {
        $data = $item['data'];
        $hora = $item['hora'];
        $atividade = $item['atividade'];
        $responsavel = $item['responsavel'];
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $atividade = $_POST['atividade'];
    $responsavel = $_POST['responsavel'];
    if ($id) {
        $sql = $pdo->prepare("UPDATE programacao SET data=?, hora=?, atividade=?responsavel=? WHERE id=?");
        $sql->execute([$data, $hora, $atividade, $responsavel, $id]);
        $_SESSION['msg'] = "Programação atualizada com sucesso!";
    } else {
        $sql = $pdo->prepare("INSERT INTO programacao (data, hora, atividade,responsavel) VALUES (?,?,?,?)");
        $sql->execute([$data, $hora, $atividade, $responsavel]);
        $_SESSION['msg'] = "Programação cadastrada com sucesso!";
    }
    header("Location: index.php");
    exit;
}
?>

<?php require_once(__DIR__ . '/../../includes/admin-header.php'); ?>
<?php require_once(__DIR__ . '/../../includes/admin-nav.php'); ?>

<main class="container">
    <h2><?= $id ? 'Editar' : 'Nova' ?> Programação</h2>
    <form method="POST" class="form">
        <input type="hidden" name="id" value="<?= $id ?>">
        <label>Data</label>
        <input type="date" name="data" value="<?= $data ?>" required>
        <label>Hora</label>
        <input type="time" name="hora" value="<?= $hora ?>" required>
        <label>Atividade</label>
        <input type="text" name="atividade" value="<?= htmlspecialchars($atividade) ?>" required>
        <label>Responsável</label>
        <input type="text" name="responsavel" value="<?= htmlspecialchars($responsavel) ?>">
        <button class="btn">Salvar</button>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </form>
</main>

<?php require_once(__DIR__ . '/../../includes/footer.php'); ?>