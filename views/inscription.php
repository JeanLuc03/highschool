<!doctype html>
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
<body style="background-color: #0c5460">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../img/logo.png" width="50" height="50" alt="">
        <img src="../img/graduation.png" width="50" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active "  style=" font-weight: 900;" href="../index.php">Accueil<span class="sr-only">(current)</span></a>


            <a class="nav-item nav-link active "  style=" font-weight: 900;" href="inscription.php">Inscription<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link active "  style=" font-weight: 900;" href="#">A propos <span class="sr-only">(current)</span></a>

        </div>
    </div>
</nav>

<div class="card container" style="width: 45rem;">
    <div class="card-body">
        <h5 class="card-title">Inscription </h5>
          <form  action="../controller/addUser.php" method="POST">
              <div class="form-group">
                  <label for="formGroupExampleInput">Nom</label>
                  <input type="text" required class="form-control" id="formGroupExampleInput" name="nomP">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Prenom</label>
                  <input type="text" required class="form-control" id="formGroupExampleInput" name="prenomP">
              </div>

              <div class="form-group">
                  <label for="formGroupExampleInput">Telephone</label>
                  <input type="text" required class="form-control" id="formGroupExampleInput" name="tel">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Mail</label>
                  <input type="email" required class="form-control" id="formGroupExampleInput" name="mail">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Identifiant</label>
                  <input type="text" required class="form-control" id="formGroupExampleInput" name="identifiant">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Password</label>
                  <input type="password" required  class="form-control" id="formGroupExampleInput" name="password">
              </div>
              <div class="form-group">
                  <label for="formGroupExampleInput">Confirmer password</label>
                  <input type="password" required  class="form-control" id="formGroupExampleInput" name="passwordC">
              </div>

             <input type="submit" class="btn btn-primary" name="submit" value="Valider">
              <input type="delete" class="btn btn-danger" value="Annuler">
          </form>


    </div>
</div>




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




</body>
</html>