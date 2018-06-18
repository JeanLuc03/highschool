<?php



// gestion

require_once "db.php";


extract($_GET);



$idU = $_GET['id'];

$db = getConnection();
$sql = $db->prepare("delete from utilisateur where idU = $idU ");

$sql->execute();

header("Location: ../views/listeUser.php");




