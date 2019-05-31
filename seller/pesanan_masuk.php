<?php
include "../php/config.php";
$id_user = $_SESSION['id'];
$abc = mysqli_query($conn, "SELECT id_seller FROM seller WHERE id_user = '$id_user'");
$id_seller = mysqli_fetch_assoc($abc)['id_seller'];

$dataBarang = mysqli_query($conn, "SELECT * FROM order_detail INNER JOIN user ON order_detail.id_customer = user.id_user
                                                                                INNER JOIN detail_user ON user.id_user = detail_user.id_user");
$barangs = [];
while ($barang = mysqli_fetch_assoc($dataBarang)) {
    $barangs[] = $barang;
}

// var_dump($dataBarang);
?>

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
    <?php include 'dashboard.php' ?>
    <div class="row">
        <h3 class="mt-4 ml-4 text-success">Pesanan Masuk</h3>
    </div>
    <div class="row">
        <div class="mt-2 mb-4 mx-4 p-3 shadow rounded col-sm bg-white">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($barangs as $key) : ?>
                        <tr>
                            <td><?= $i ?></th>
                            <td><?= $key['tgl_transaksi'] ?></td>
                            <td><?= $key['nama'] ?></td>
                            <td>
                                <a href="" class="btn btn-sm btn-success">Kirim</a>
                                <a href="" class="btn btn-sm btn-danger">Batalkan</a>
                            </td>
                        </tr>
                        <?php $i++;
                    endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>