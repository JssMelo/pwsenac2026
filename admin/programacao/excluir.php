<?php
require '../includes/auth.php';
require '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

    if ($id) {

        $sql = $pdo->prepare("DELETE FROM programacao WHERE id = ?");
        $sql->execute([$id]);

        $_SESSION['msg'] = "Item excluído com sucesso!";
    }

}

header("Location: programacao.php");
exit;
