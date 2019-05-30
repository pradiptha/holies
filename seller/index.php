<?php
include "../php/config.php";
if (!isset($_SESSION)) {
    header('Location: ../index.php');
}

$id_user = $_SESSION['id'];
$abc = mysqli_query($conn, "SELECT id_seller FROM seller WHERE id_user = '$id_user'");
$id_seller = mysqli_fetch_assoc($abc);
$id_seller = $id_seller['id_seller'];

$sql = mysqli_query($conn, "SELECT * FROM produk INNER JOIN produk_kategori USING(id_produk) 
        INNER JOIN gmbr_produk USING(id_produk) WHERE id_seller = '$id_seller' ");
$rows = [];
while ($row = mysqli_fetch_assoc($sql)) {
    $rows[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../vendor/holies/css/navbar.css">
        <link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
    </head>

<body>
    <?php include 'dashboard.php' ?>
    <div class="row">
        <div class="ml-5 mr-3 my-4 w-100">
            <h3 class="text-success">Barang Saya</h3>
            <div class="card-deck barang-jual">
                <?php if ($rows) : ?>
                    <?php foreach ($rows as $key) : ?>
                        <div class="bg-white mt-3 ml-2 rounded shadow" style="max-width: 200px;">
                            <img style=" max-width: 250px; max-height: 150px; " class=" gambar-jual card-img-top" src="../img/barang/<?= $key['gambar_produk'] ?>">
                            <div class="card-body">
                                <h5 class="card-title" style="max-width: 200px;"><?= $key['nama_produk'] ?></h5>
                                <h6 class="text-success font-weight-bold mb-4">Rp. <?= $key['harga_satuan'] ?></h6>
                                <a href="hapus.php?id=<?= $key['id_produk'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                <a href="ubah.php?id=<?= $key['id_produk'] ?>" class="btn btn-sm btn-success">Update</a>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php else : ?>
                    <div class="bg-white rounded shadow w-100">
                        <div class="card-body">
                            <h5 class="card-title text-danger">Anda belum memiliki barang untuk dijual</h5>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>

</body>

</html>