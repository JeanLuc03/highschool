<?php



// gestion

require_once "db.php";


extract($_GET);



$idC = $_GET['id'];

$db = getConnection();
$sql = $db->prepare("delete from contenu where idC = $idC ");

$sql->execute();

header("Location: ../views/contenu.php");




