<?php
/**
 * Created by PhpStorm.
 * User: Birahim
 * Date: 20/03/2018
 * Time: 13:23
 */

require_once "db.php";

if(isset($_POST["submit"])) {
    extract($_POST);
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];

    $db = getConnection();
    $sql = $db->prepare("select U.idU, nom, prenom , droit from utilisateur U, linkaccess L where U.idU = L.idU AND  identifiant ='$identifiant' and password='$password' ");

    $sql->execute();


    $coutn = $sql->fetch();




if ($coutn >= 1 )
{
    session_start();
    $_SESSION["identifiant"] = $_POST["identifiant"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["prenom"] = $coutn["prenom"];
    $_SESSION["nom"] = $count["nom"];
    $_SESSION["role"] = $coutn["droit"];
    $_SESSION["idU"] = $coutn["idU"];


            header("Location: ../views/dashboard.php");
        }

        else
        {
            echo '<body onLoad="alert(\'Membre pas encore reconnu, veuillez réessayer plus tard...\')">';
            // puis on le redirige vers la page d'accueil
            echo '<meta http-equiv="refresh" content="0;URL=../index.php">';

        }


}
