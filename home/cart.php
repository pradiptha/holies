<?php
include '../php/config.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    // var_dump($result);
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
</head>

<body>
    <!-- Navigation -->
    <?php include 'nav.php' ?>
    <!-- Page Content -->
    <div class="container p-3">
        <h2 class="text-success">keranjang Saya</h2>
        <div class="row mt-3">
            <div class="col-sm-8">
                <div class="shadow bg-white rounded px-3 py-1">
                    <?php for ($i = 1; $i < 4; $i++) : ?>
                        <div class="mb-3 mt-3">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="../img/buy.png" class="img-thumbnail mr-3" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <h5>Nutrisi Harian Anak Ayam</h5>
                                    <p>Pakan Ayam</p>
                                    <h5 class="text-success">Rp 9.000</h5>
                                </div>
                                <div class="col-sm-3">
                                    <h5>Qty : 5</h5>
                                    <i class="fas fa-trash text-danger d-block mb-2"></i>
                                    <i class="fas fa-save text-success"></i>
                                </div>
                            </div>
                            <div style="border-bottom: 1px solid #eaeaea;"></div>
                        </div>
                    <?php endfor ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="shadow mb-3 bg-white rounded p-3">
                    <h5>Rincian Pesanan</h5>
                    <hr>
                    <h6 class="float-left">Total Item </h6>
                    <h4 class="text-right text-success">15</h4>
                    <h6 class="float-left">Total Harga</h6>
                    <h4 class="text-right text-success">Rp. 100000</h4>
                    <!-- <div class="btn d-block">
                        <h6 class="text-center text-success">Favorite Saya</h6>
                    </div> -->
                    <div class="mx-auto w-100">
                        <a href="checkout.php" class="btn btn-success mt-3 w-100">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../vendor/jquery/jquery.slim.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>