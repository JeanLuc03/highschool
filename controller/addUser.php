<?php


// gestion inscription

require_once "db.php";

if(isset($_POST["submit"])) {

    extract($_POST);

    $nomP = $_POST['nomP'];
        $prenomP = $_POST['prenomP'];
        $tel = $_POST['tel'];
        $mail = $_POST['mail'];
        $identifiant = $_POST['identifiant'];
        $password = $_POST['password'];
        $passwordC = $_POST['passwordC'];

        if($password == $passwordC) {


            $db = getConnection();
            $sql = $db->prepare("insert into utilisateur values ('','$nomP','$prenomP','$tel','$mail','$identifiant','$password')");

            $sql->execute();



            header("Location: ../index.php");


        }



}


