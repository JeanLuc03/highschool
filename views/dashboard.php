<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['identifiant']) && isset($_SESSION['password'])) {
    $date = date('y/m/j h:i:s', time());
    $idSession = session_id();
    $_SESSION["date"] = $date;
    $_SESSION["pageName"] = "index";
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
                <h1 class="h2">Dashboard  (<?php echo $_SESSION['role'];?>) </h1>
            </div>



            <?php

            require_once "../controller/db.php";

            $db = getConnection();
            $response1= $db->query("SELECT COUNT(*) as nb1 from utilisateur");
            $response2= $db->query("SELECT COUNT(*) as nb2 from sessionUser order by sessionDateTime;");
            $response3 = $db->query("SELECT COUNT(sessionPageName) as nb3 from sessionuser;");

            $donnees1 = $response1->fetch();
            $donnees2 = $response2->fetch();
            $donnees3 = $response3->fetch();


            ?>


            <div class="card-deck">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nombre de Pages visitées</div>
                    <div class="card-body text-primary">

                        <h1 class="card-text text-center display-2"><?php echo $donnees2["nb2"]?></h1>
                    </div>
                </div>
                <div class="card border-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Nombre d'utilisateurs</div>
                    <div class="card-body text-info">

                        <h1 class="card-text text-center display-2"><?php echo $donnees1["nb1"]?></h1>
                    </div>
                </div>
                <div class="card border-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header"></div>
                    <div class="card-body text-warning">

                        <h1 class="card-text text-center display-2"><?php echo $donnees3["nb3"]?> </h1>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-6">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h5>Nombre de pages par utilisateur </h5>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nom et Prenom</th>
                            <th scope="col">Nombre de Pages </th>





                        </tr>
                        </thead>
                        <?php

                        require_once "../controller/db.php";

                        $db = getConnection();
                        $response= $db->query("SELECT DISTINCT U.idU ,U.nom, U.prenom , count(sessionPageName), s.idU from sessionuser s, utilisateur U where U.idU = s.idU group BY s.idU");


                        while ($donnees = $response->fetch())
                        {
                            echo '<tbody> 
                    <tr>
                      <td class="table-info">'.$donnees['idU'].' </td>
                      <td >'.$donnees['nom'].' '.$donnees['prenom'].'</td>
                       <td class="table-success">'.$donnees['count(sessionPageName)'].'</td>
                        
                         
                      
                      ';



                        }

                        ?>

                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h5>Nombre de pages par utilisateur </h5>
                    </div>

                    <table class="table">
                        <thead class="thead-light">
                        <tr>

                            <th scope="col">ID</th>
                            <th scope="col">Nom et Prenom</th>
                            <th scope="col">Nombre de Pages </th>





                        </tr>
                        </thead>
                        <?php

                        require_once "../controller/db.php";

                        $db = getConnection();
                        $response= $db->query("SELECT DISTINCT U.idU ,U.nom, U.prenom , count(sessionPageName), s.idU from sessionuser s, utilisateur U where U.idU = s.idU group BY s.idU");


                        while ($donnees = $response->fetch())
                        {
                            echo '<tbody> 
                    <tr>
                      <td class="table-info">'.$donnees['idU'].' </td>
                      <td >'.$donnees['nom'].' '.$donnees['prenom'].'</td>
                       <td class="table-warning">'.$donnees['count(sessionPageName)'].'</td>
                        
                         
                      
                      ';



                        }

                        ?>

                        </tbody>
                    </table>
                </div>
            </div>

            <br>


        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

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

}
else {
echo 'Les variables ne sont pas déclarées.';
}
?>