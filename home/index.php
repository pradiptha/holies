<?php include '../php/config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HOLIES - House of Livestock</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-modified.min.css">
  <link rel="stylesheet" href="../vendor/holies/css/index.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

  <!-- Navigation -->
  <?php include 'nav.php' ?>
  <!-- Page Content -->
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
      </div>
    </div>
  </div> -->
  <div class="content container my-4" style="z-index: 1">
    <div id="carouselExampleInterval" class="carousel slide " style=" width: 50%; margin-left: auto; margin-right: auto; filter: brightness(50%);" data-ride="carousel">
      <div class="carousel-inner rounded">
        <div class="carousel-item active" data-interval="10000">
          <img src="../img/telur_ayam.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="2000">
          <img src="../img/telur_bebek.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/anak_ayam.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../img/anak_kerbau.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class=" container-fluid bg-white shadow-lg" style="margin-top: 100px; padding-top: 40px; height: 400px">
    <div class="container">
      <h3 class="text-center text-success font-weight-bold">Kategori Holies</h3>
      <div class="row text-success  font-weight-bold" style=" margin-top: 40px">

        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori" src="../img/pakan.png">
          <div class="media-body"style="font-size: 20px">
            Pakan
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori"src="../img/ternak.png">
          <div class="media-body" style="font-size: 20px">
            Ternak
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori"src="../img/alat.png">
          <div class="media-body" style="font-size: 20px">
            Alat
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 80px;">
    <div class="row">
      <div class="col-lg-3">
        <div class="card shadow-sm">
          <img src="../img/anak_kerbau.jpg" class="card-img-top d-block w-100" alt="...">
          <div class="card-body">
              <h5 class="card-title">Anak Sapi Cilendek</h5>
            <div class="row" style="padding-left: 10px">
              <p style="margin-top: 10px; width: 25px;">Rp.</p>
              <h2 class="text-success">4000</h2>
              <p style="margin-top: 10px;">/Ekor</p>
            </div>
            <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
              <p style="font-size: 14px;">Daerah kab. Badung</p>
            </div>
            <a href="#" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
            <i class="fas fa-heart" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card shadow-sm">
          <img src="../img/telur_ayam.jpg" class="card-img-top d-block w-100" alt="...">
          <div class="card-body">
              <h5 class="card-title">Telur ayam kampung</h5>
            <div class="row" style="padding-left: 10px">
              <p style="margin-top: 10px; width: 25px;">Rp.</p>
              <h2 class="text-success">4000</h2>
              <p style="margin-top: 10px;">/Butir</p>
            </div>
            <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
              <p style="font-size: 14px;">Daerah kab. Badu</p>
            </div>
            <a href="#" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
            <i class="fas fa-heart" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card shadow-sm">
          <img src="../img/telur_bebek.jpg" class="card-img-top d-block w-100" alt="...">
          <div class="card-body">
              <h5 class="card-title">Telur Bebek tadi pagi</h5>
            <div class="row" style="padding-left: 10px">
              <p style="margin-top: 10px; width: 25px;">Rp.</p>
              <h2 class="text-success">4000</h2>
              <p style="margin-top: 10px;">/Butir</p>
            </div>
            <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
              <p style="font-size: 14px;">Daerah kab. Bamdung</p>
            </div>
            <a href="#" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
            <i class="fas fa-heart" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="card shadow-sm">
          <img src="../img/keju.jpg" class="card-img-top d-block w-100" alt="...">
          <div class="card-body">
              <h5 class="card-title">Keju asal Cibaduyut</h5>
            <div class="row" style="padding-left: 10px">
              <p style="margin-top: 10px; width: 25px;">Rp.</p>
              <h2 class="text-success">40000</h2>
              <p style="margin-top: 10px;">/Kotak</p>
            </div>
            <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
              <p style="font-size: 14px;">Daerah kab. Buleleng</p>
            </div>
            <a href="#" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
            <i class="fas fa-heart" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../php/footer.php" ?>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>