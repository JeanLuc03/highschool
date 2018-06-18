<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['identifiant']) && isset($_SESSION['password'])) {
$date = date('y/m/j h:i:s', time());
$idSession = session_id();
$_SESSION["date"] = $date;
$_SESSION["pageName"] = "liste des utilisateurs";
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
        <h1 class="h2">Liste des utilisateurs</h1>
    </div>
    <table class="table">
        <thead class="thead-light">
            <tr>

                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col">Mail</th>
                <th scope="col">Idenfiant</th>
                <th scope="col">Droit d'accès</th>

                <th></th>
                <th></th>
            </tr>
        </thead>
    <?php

        require_once "../controller/db.php";

        $db = getConnection();
        $response= $db->query("select U.idU ,nom ,prenom ,telephone ,mail ,identifiant, droit from utilisateur U, linkaccess L where U.idU = L.idU");


    while ($donnees = $response->fetch())
    {
        echo '<tbody> 
                    <tr>
                      <td class="table-info">'.$donnees['idU'].' </td>
                      <td>'.$donnees['nom'].'</td>
                       <td>'.$donnees['prenom'].'</td>
                        <td>'.$donnees['telephone'].'</td>
                           <td >'.$donnees['mail'].'</td>
                           <td >'.$donnees['identifiant'].'</td>
                           
                            <td  class="badge badge-pill badge-secondary" >'.$donnees['droit'].'</td>
                             <td><input type="submit" class="btn btn-info" value="Modifier"></td>
                           <td><a class="btn btn-danger" href="../controller/deleteUser.php?id='.$donnees["idU"].'">Suprimer</a></td>
                      
                      ';



    }

    ?>

        </tbody>
    </table>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Affecter droit d'acces </h1>
    </div>

    <table class="table">
        <thead class="thead-light">
        <tr>

            <th scope="col">ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Telephone</th>
            <th scope="col">Mail</th>
            <th scope="col">Idenfiant</th>
            <th scope="col">Droit d'accès</th>
            <th></th>


        </tr>
        </thead>
        <?php

        require_once "../controller/db.php";

        $db = getConnection();
        $response1= $db->query("SELECT * from utilisateur WHERE idU not in (SELECT idU from linkaccess)");



        while ($donnees1 = $response1->fetch())
        {
            echo '<tbody> 
                    <tr>
                      <td class="table-info">'.$donnees['idU'].' </td>
                      <td>'.$donnees1['nom'].'</td>
                       <td>'.$donnees1['prenom'].'</td>
                        <td>'.$donnees1['telephone'].'</td>
                           <td >'.$donnees1['mail'].'</td>
                           <td >'.$donnees1['identifiant'].'</td>
                           
                           <form method="post" action="../controller/addLinkAccess.php?id='.$donnees1["idU"].'">
                          <td ><select name="droit">
                                    <option>--- Choisir ---</option>
                                    <option> administrateur</option>
                                    <option>professeur</option>
                                    <option>redacteur</option>
        
                              </select>
                              </td>  
                              
                              <td><input type="submit" class="btn btn-success" value="valider" name="submit"></td> 
                           </form>
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