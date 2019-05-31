<?php
session_start();
if (isset($_SESSION['username'])) {
  header('Location: home/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HOLIES - House of Livestock</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/holies/css/index.css">
  <link rel="stylesheet" type="text/css" href="vendor/holies/css/navbar.css">
  <link rel="stylesheet" href="vendor/holies/css/landing1.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#">HOLIES</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="home/">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">About</a>
          <a class="nav-item btn btn-success text-white" href="home/login.php">LOGIN</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar -->

  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Gain Your <span>Livestock</span> <br>Gain Your <span>Life</span></h1>
      <a href="home/register.php" class="btn btn-success btn-lg">JOIN US</a>
    </div>
  </div>
  <!-- akhir Jumbotron -->

  <!-- container -->
  <div class="container">

    <!-- info panel -->
    <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
          <div class="col-sm">
            <img src="img/buy.png" alt="Employee" class="img-fluid float-left icn">
            <h4>Sell</h4>
            <p>Jual Hasil Peternakan</p>
          </div>
          <div class="col-lg">
            <img src="img/sell.png" alt="HiRes" class="img-fluid float-left icn">
            <h4>Buy</h4>
            <p>Beli Segala Keperluan Peternakan</p>
          </div>
          <div class="col-lg">
            <img src="img/ask.png" alt="Security" class="img-fluid float-left icn">
            <h4>Ask</h4>
            <p>Tanya Kepada Ahlinya di Holies</p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir info panel -->


    <!-- Workingspace -->
    <div class="row workingspace">
      <div class="col-lg-6">
        <img src="img/logo.png" alt="Working Space" class="img-fluid logo">
      </div>
      <div class="col-lg-5">
        <h2> With <span>Holies</span></h2>
         <h2>Do <span>Everything</span></h2>
        <p>Mari menjadi bagian dari Holies yang menyenangkan
          dan mempelajari hal baru setiap harinya.</p>
        <a href="seller/register.php" class="btn btn-primary tombol bg-success">Register as Seller</a>
      </div>
    </div>
    <!-- akhir Workingspace -->


    <!-- Testimonial -->
    <section class="testimonial">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <p>"Bergabung dengan holies memberikan saya banyak pengalaman berharga"</p>
        </div>
      </div>
    </section>
    <!-- akhir Testimonial -->


  </div>
  <!-- akhir container -->
  <div class="footer bg-success">
    <p>2019 | Created with &hearts; by HOLIES INDONESIA</p>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>