<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HIGH SCHOOL</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="img/graduation.png" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active " href="index.php">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active " style=" font-weight: 900;" href="views/inscription.php">Inscription<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active " style=" font-weight: 900;" href="#">A propos <span class="sr-only">(current)</span></a>

        </div>
    </div>
</nav>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="controller/login.php">
                    <div class="form-group">
                        <label>Identifiant</label>
                        <input type="text" class="form-control" name="identifiant" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais vos informations avec une tierce personne.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

            </div>
        </div>
    </div>
</div>


<!-- Header -->
<header class="masthead d-flex">
    <div class="container text-center my-auto">
        <h1 class="mb-1">High School</h1>
        <h3 class="mb-5">
            <em>Le succès est au bout de l'effort</em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" data-toggle="modal" data-target="#exampleModalCenter">Connexion</a>
    </div>
    <div class="overlay"></div>
</header>

<!-- About -->
<section class="content-section bg-light" id="inscription">
    <div class="container">

                                <h3>Les derniers contenus ajoutés</h3>
                                <hr>
                          <div class="card-columns">
                                <?php

                                require_once "controller/db.php";

                                $db = getConnection();
                                $response= $db->query("select DISTINCT contenu.titreGeneral ,contenu.idC, redaction.dateRedaction, modules.nom from redaction, contenu, modules WHERE redaction.idC = contenu.idC AND redaction.idM = modules.idM");


                                while ($donnees = $response->fetch())
                                {
                                               echo('
                                               
                                                  
                                                      <div class="card  border-warning">
                                                      
                                                        <div class="card-body">
                                                          <h5 class="card-title">'.$donnees["titreGeneral"].'</h5>
                                                          
                                                          <p>Module :  '.$donnees["nom"].'</p>
                                                          
                                                          <a class="btn btn-warning" href="views/doc.php?id='.$donnees["idC"].'">Ouvrir</a>
                                                        </div>
                                                        <div class="card-footer">
                                                          <small class="text-muted">Date : '.$donnees["dateRedaction"].'</small>
                                                        </div>
                                                      </div>                                                   
                                               
                                               ');

                                }

                                ?>
                          </div>

                                <br>


                                <h3> Dernieres mises à jour<h3>



</section>


<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="icon-social-github"></i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">Copyright,Skalaf &copy; High School 2018</p>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
