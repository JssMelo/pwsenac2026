<?php
require_once(__DIR__ . '/../../includes/auth.php');;
require_once(__DIR__ . '/../../includes/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

    if ($id) {

        $sql = $pdo->prepare("DELETE FROM participantes WHERE id = ?");
        $sql->execute([$id]);

        $_SESSION['msg'] = "Participante excluído com sucesso!";
    } else {
        $_SESSION['msg'] = "ID inválido.";
    }

}

header("Location: index.php");
exit;
