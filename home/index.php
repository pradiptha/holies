<?php
include '../php/config.php';
if ($_SESSION) {
  $id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM detail_user WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);
}

$sql1 = mysqli_query($conn, "SELECT * FROM produk INNER JOIN gmbr_produk USING(id_produk) LIMIT 8");
$rows = [];
while ($row = mysqli_fetch_assoc($sql1)) {
  $data_barang[] = $row;
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
  <div class="container-fluid text-center" style=" padding-top:150px; color: white; height: 512px">
    <h1 class="display-3">DAPATKAN KEMUDAHAN BERSAMA HOLIES</h1>
  </div>
  <div class=" container-fluid bg-white shadow-lg" style="margin-top: 100px; padding-top: 40px; height: 400px">
    <div class="container">
      <h3 class="text-center text-success font-weight-bold">Kategori Holies</h3>
      <div class="row text-success  font-weight-bold justify-content-center" style=" margin-top: 40px">
        <a href="tampil_barang.php?id_kategori=1" class="text-decoration-none">
          <div class="mx-4 text-center">
            <img class="shadow imgkategori" src="../img/pakan.png">
            <div class="media-body mt-n2">
              <h3 class="text-center text-success">Ternak</h3>
            </div>
          </div>
        </a>
        <a href="tampil_barang.php?id_kategori=2" class="text-decoration-none">
          <div class="mx-4 text-center">
            <img class="shadow imgkategori" src="../img/pakan.png">
            <div class="media-body mt-n2">
              <h3 class="text-center text-success">Pakan</h3>
            </div>
          </div>
        </a>
        <a href="tampil_barang.php?id_kategori=3" class="text-decoration-none">
          <div class="mx-4 text-center">
            <img class="shadow imgkategori" src="../img/pakan.png">
            <div class="media-body mt-n2">
              <h3 class="text-success">Alat</h3>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div class="mb-5 mt-5 container ">
    <a href="tampil_barang.php?terbaru=true" class="text-decoration-none">
      <h3 class="text-success">Produk Terbaru</h3>
    </a>
    <div class="row">
      <?php if ($data_barang) : ?>
        <?php foreach ($data_barang as $key) : ?>
          <div class="my-3 col-lg-3">
            <div class="card shadow-sm">
              <img class="card-img-top d-block w-100" src="../img/barang/<?= $key['gambar_produk'] ?>" alt="..." style="object-fit: cover;">
              <div class="card-body">
                <h5 class="card-title"><?= $key['nama_produk'] ?></h5>
                <div class="row" style="padding-left: 10px">
                  <p style="margin-top: 10px; width: 25px;">Rp.</p>
                  <h2 class="text-success"><?= $key['harga_satuan'] ?></h2>
                </div>
                <a href="detail_barang.php?id=<?= $key['id_produk'] ?>" class="btn-sm btn-outline-success text-decoration-none">Lihat lebih lanjut</a>
                <i class="fas fa-heart fa-lg" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
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