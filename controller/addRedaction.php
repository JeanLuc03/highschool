<?php

require_once "db.php";


extract($_POST);

$datetime = $_POST['datetime'];
$type = $_POST['type'];
$idC = $_POST['idC'];

$idU = $_POST['idU'];


$idM = $_POST['idM'];


$db = getConnection();
$sql = $db->prepare("insert into redaction values ('','$datetime','$type','$idC','$idU','$idM')");

 var_dump($sql);


$sql->execute();

header("Location: ../views/contenu.php");




