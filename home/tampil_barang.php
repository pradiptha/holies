<?php
include '../php/config.php';

if (isset($_GET['id_kategori'])) {
  $idkategori = $_GET['id_kategori'];
  $sql1 = mysqli_query($conn, "SELECT * FROM produk INNER JOIN gmbr_produk USING(id_produk) INNER JOIN produk_kategori USING(id_produk) WHERE produk_kategori.id_kategori='$idkategori' LIMIT 8");
} else if (isset($_GET['cari'])) {
  $ketemu = $_GET['cari'];
  $sql1 = mysqli_query($conn, "SELECT * FROM produk INNER JOIN gmbr_produk USING(id_produk) WHERE produk.nama_produk LIKE'%$ketemu%' LIMIT 8");
}

$id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM detail_user WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);

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
  <div class="mb-5 mt-5 container ">
    <a href="" class="text-decoration-none">
    </a>
    <div class="row">
      <?php if (isset($data_barang)) : ?>
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
                  <div class="row" style="padding-left: 10px; height: 20px; margin-bottom: 20px">
                    <p style="font-size: 14px;">Daerah kab. Badung</p>
                  </div>
                  <a href="detail_barang.php?id=<?= $key['id_produk'] ?>" class="btn-sm btn-outline-success">Lihat lebih lanjut</a>
                  <i class="fas fa-heart fa-lg" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php endif ?>
      <?php else : ?>
        <div>
          <h2>Tidak ada Barang</h2>
        </div>
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