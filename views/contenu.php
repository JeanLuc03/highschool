<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['identifiant']) && isset($_SESSION['password'])) {
$date = date('y/m/j h:i:s', time());
$idSession = session_id();
$_SESSION["date"] = $date;
$_SESSION["pageName"] = "liste des Contenus";
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
                <h1 class="h2">Liste des Contenus Ajoutés</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="contenuform.php" class="btn btn-success "> + Ajouter un Contenu</a>
                        <button class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>

                </div>
            </div>


    <table class="table">
        <thead class="thead-light">
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Titre General</th>
            <th scope="col">Date de Redaction</th>
            <th scope="col">Module</th>
            <th scope="col">Redacteur</th>
            <th></th>
            <th></th>



        </tr>
        </thead>
        <?php

        require_once "../controller/db.php";

        $db = getConnection();
        $response= $db->query("select R.idR ,Co.idC, Co.titreGeneral ,dateRedaction , R.idM , R.idU from redaction R, contenu Co where R.idC = Co.idC");


        while ($donnees = $response->fetch())
        {
            echo '<tbody> 
                    <tr>
                      <td class="table-info">'.$donnees['idR'].' </td>
                      <td>'.$donnees['titreGeneral'].'</td>
                       <td>'.$donnees['dateRedaction'].'</td>
                        <td>'.$donnees['idM'].'</td>
                           <td >'.$donnees['idU'].'</td>
                           <td><a  class="btn btn-info" ></td>
                           <td><a  class="btn btn-danger" href="../controller/deleteContenu.php?id='.$donnees["idC"].'">Supprimer</a></td>
                      
                      ';



        }

        ?>

        </tbody>
    </table>

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