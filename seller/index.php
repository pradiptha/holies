<?php
include "../php/config.php";
if (!isset($_SESSION)) {

    header('Location: ../index.php');
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
        <div class="ml-5 my-4">
            <h3 class="text-success">Barang Saya</h3>
            <div class="card-deck barang-jual">
                <?php for ($i = 1; $i < 7; $i++) : ?>
                    <div class="bg-white mt-3 ml-2 rounded">
                        <img class="gambar-jual card-img-top" src="../img/telur.jpg">
                        <div class="card-body">
                            <h5 class="card-title">Telur Jakarta</h5>
                            <h6 class="text-success font-weight-bold">RP 50.0000</h6>
                            <a href="#" class="btn btn-danger">Hapus</a>
                            <a href="#" class="btn btn-success">Update</a>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>

</body>

</html>