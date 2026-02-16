<?php
require '../includes/auth.php';
require '../includes/config.php';

$id = $_GET['id'];

$sql = $pdo->prepare("DELETE FROM participantes WHERE id=?");
$sql->execute([$id]);

header("Location: participantes.php");
