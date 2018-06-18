<?php



// gestion

require_once "db.php";


    extract($_POST);

    $titreGeneral = $_POST['titreGeneral'];
    $titreChapitre = $_POST['titreGeneral'];
    $sousChapitre = $_POST['sousChapitre'];

    $corpsTexte = $_POST['corpsTexte'];
    $piedTexte = $_POST['corpsTexte'];

    $couleur = $_POST['couleur'];


        $db = getConnection();
        $sql = $db->prepare("insert into contenu values ('','$titreGeneral','$titreChapitre','$sousChapitre','$corpsTexte','$piedTexte','$couleur')");

        $sql->execute();

        header("Location: ../views/redaction.php");













