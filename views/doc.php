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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../img/graduation.png" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active " href="../index.php">Accueil<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active " style=" font-weight: 900;" href="inscription.php">Inscription<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active " style=" font-weight: 900;" href="#">A propos <span class="sr-only">(current)</span></a>

        </div>
    </div>
</nav>
<section style="background-image: url('../img/home-bg.jpg')" class="content-section bg-light" id="inscription">

<?php


                                require_once "../controller/db.php";
                                $db = getConnection();
                                $idC = $_GET['id'];



                                 $response= $db->query("Select titreGeneral, titreChapitre, sousChapitre, corpsTexte, piedTexte FROM contenu where idC = $idC ");
                                 while($donnees = $response->fetch())
                                 {


                                     echo('

                                                <div class="container">
                                                    <div class="card">
                                                      <div class="card-header">
                                                        Featured
                                                      </div>
                                                      <div class="card-body">
                                                          <h3 style="color:#0c5460 " class="card-title text-center">'.$donnees["titreGeneral"].'</h3>
                                                          <hr>
                                                          <h4 style="color: #4e555b">A  - '.$donnees["titreChapitre"].'</h4>
                                                          <h5 style="color: #545b62">a)   '.$donnees["sousChapitre"].'</h5><br>
                                                                              <p>'.$donnees["corpsTexte"].'</p><br>
                                                                              <p>'.$donnees["piedTexte"].'</p>
                                                          </div>
                                                           <div class="card-footer">
                                                            <a class="btn btn-success" href="../index.php">Retour à l\'accueil</a>
                                                           </div>
                                                        </div>
                                                        
                                                        </div>
                                                         
                                               
                                               ');





                                 }



?>

<!-- About -->



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
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->


</body>

</html>
