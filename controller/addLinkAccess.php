<?php

require_once "db.php";


extract($_POST);

$droit = $_POST['droit'];
$idU = $_GET['id'];


$db = getConnection();
$sql = $db->prepare("insert into linkaccess values ('$idU','$droit')");

var_dump($sql);


$sql->execute();

header("Location: ../views/listeUser.php");
