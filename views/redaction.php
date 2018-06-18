<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['identifiant']) && isset($_SESSION['password'])) {
    $date = date('y/m/j h:i:s', time());
    $idSession = session_id();
    $_SESSION["date"] = $date;
    $_SESSION["pageName"] = "Formulaire de redac";
    $_SESSION["id"] = $idSession;

    require_once "../controller/db.php";

    $db = getConnection();
    $sql = $db->prepare("insert into sessionuser values ('','".$_SESSION['pageName']."', '".$_SESSION["date"]."','".$_SESSION['id']."','".$_SESSION['idU']."')");
    $sql->execute();

    ?>


    <!DOCTYPE html>

    <?php
    include_once ("head.php");
    ?>

    <body>
    <?php

    include_once ("navbar.php");
    ?>



    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Redaction</h1>
    </div>

    <form action="../controller/addRedaction.php" method="post">
        <div class="form-group">
            <label class="col-sm-2 col-form-label">Date de Redaction </label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="datetime" readonly value="<?php echo $date;?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Type</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="type" readonly  value="TEXTE">
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-3 col-form-label">Contenu</label>
            <div class="col-sm-10">
                <select  name="idC" class="form-control form-control-lg">
                    <option> -- Choix Contenu -- </option>

                    <?php

                    require_once "../controller/db.php";

                    $db = getConnection();
                    $response= $db->query("select idC, titreGeneral from contenu");


                    while ($donnees = $response->fetch())
                    {
                        echo '<option value='.$donnees["idC"].'>'.$donnees["titreGeneral"].' </option> ';

                    }

                    ?>


                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 col-form-label">Redacteur</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-lg" name="idU" readonly  value="<?php echo $_SESSION['idU']?>">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-3 col-form-label">Module</label>
            <div class="col-sm-10">
                <select  name="idM" class="form-control form-control-lg">
                    <option> -- Choix Contenu -- </option>

                    <?php

                    require_once "../controller/db.php";

                    $db = getConnection();
                    $response= $db->query("select idM, nom from modules");


                    while ($donnees = $response->fetch())
                    {
                        echo '<option value='.$donnees["idM"].'>'.$donnees["nom"].' </option> ';
                    }

                    ?>


                </select>
            </div>
        </div>






        <div class="form-group">
            <input type="submit" class ="btn btn-info" value="enregister" name="submit">
            <input type="delete" class="btn btn-danger" value="supprimer" neame="delete">
        </div>

    </form>





</main>
</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../../../assets/js/vendor/popper.min.js"></script>
<script src="../../../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>

</body>
</html>



    <?php
// On affiche un lien pour fermer notre session
    echo '<a href="./logout.php">Déconnection</a>';
}
else {
    echo 'Les variables ne sont pas déclarées.';
}
?>


