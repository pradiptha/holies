<?php
include '../php/config.php';
$id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM detail_user WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);
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
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-modified.min.css">
  <link rel="stylesheet" href="../vendor/holies/css/index.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

  <!-- Navigation -->
  <?php include 'nav.php' ?>
  <!-- Page Content -->
  <div class="bgimg" style="background-image: url('../img/farmer.jpg'); z-index: -1">
  </div>
  <div class="container-fluid text-center" style=" padding-top:150px; color: white; height: 400px;">
    <h1 class="display-3">DAPATKAN KEMUDAHAN BERSAMA HOLIES</h1>
  </div>
  <div class=" container-fluid bg-white shadow-lg" style="margin-top: 100px; padding-top: 40px; height: 400px">
    <div class="container">
      <h3 class="text-center text-success font-weight-bold">Kategori Holies</h3>
      <div class="row text-success  font-weight-bold" style=" margin-top: 40px">

        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori" src="../img/pakan.png">
          <div class="media-body" style="font-size: 20px">
            Pakan
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori" src="../img/ternak.png">
          <div class="media-body" style="font-size: 20px">
            Ternak
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img class="shadow imgkategori" src="../img/alat.png">
          <div class="media-body" style="font-size: 20px">
            Alat
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-5 mt-5 container ">
    <div class="row">
      <div class="col-lg-3">
        <div class="card shadow-sm">
          <img src="../img/anak_kerbau.jpg" class="card-img-top d-block w-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Anak Sapi Cilendek</h5>
            <div class="row" style="padding-left: 10px">
              <p style="margin-top: 10px; width: 25px;">Rp.</p>
              <h2 class="text-success">4000</h2>
            </div>
            <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
              <p style="font-size: 14px;">Daerah kab. Badung</p>
            </div>
            <a href="#" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
            <i class="fas fa-heart fa-lg" aria-hidden="true"></i>
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
  <?php
  include "../php/footer.php"
  ?>
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>