<?php
include '../php/config.php';
if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
    $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    // var_dump($result);
}
$sql1 = mysqli_query($conn, "SELECT id_produk,id_seller,nama_produk,deskripsi,id_keranjang,id_customer,keranjang.quantity as quantity,total_harga,gambar_produk,harga_satuan FROM keranjang INNER JOIN produk USING(id_produk) INNER JOIN gmbr_produk USING(id_produk) WHERE id_customer = $id AND keranjang.status_produk = 'cart' ");
$dataBarang = [];
while ($row = mysqli_fetch_assoc($sql1)) {
    $dataBarang[] = $row;
}

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
    <!-- Navigation -->
    <?php include 'nav.php' ?>
    <!-- Page Content -->
    <div class="container p-3">
        <h2 class="text-success">keranjang Saya</h2>
        <div class="row mt-3">
            <div class="col-sm-8">
                <div class="shadow bg-white rounded px-3 py-1">
                    <?php $item = 0;
                    $total_harga = 0;
                    foreach ($dataBarang as $key) : ?>
                        <div class="mb-3 mt-3">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="../img/barang/<?= $key['gambar_produk'] ?>" class="img-thumbnail mr-3" alt="" style="height: 100px; object-fit: cover;">
                                </div>
                                <div class="col-sm-7">
                                    <h5><?= $key['nama_produk'] ?></h5>
                                    <p><?= $key['deskripsi'] ?></p>
                                    <h5 class="text-success">Rp. <?php echo $key['total_harga'];
                                                                    $total_harga += $key['total_harga']; ?></h5>
                                </div>
                                <div class="col-sm-3">
                                    <form action="update_cart.php" method="POST">
                                        <input type="hidden" name="harga_satuan" value="<?= $key['harga_satuan'] ?>">
                                        <input type="hidden" name="id_keranjang" value="<?= $key["id_keranjang"] ?>">
                                        <div class="clearfix">
                                            <label for="qty" class="float-left">Qty :</label>
                                            <input type="number" name="quantity" class="border-0 ml-2 w-25" value="<?php echo $key['quantity'];
                                                                                                                    $item += $key['quantity']; ?>">
                                            <button class="border-0 bg-transparent left" type="submit" name="submit"><i class="fas fa-save text-success"></i></button>
                                        </div>
                                        <a href="delete_cart.php?id=<?= $key["id_keranjang"]; ?>"><i class="fas fa-trash text-danger d-block mb-2"></i></a>
                                    </form>
                                </div>
                            </div>
                            <div style="border-bottom: 1px solid #eaeaea;"></div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="shadow mb-3 bg-white rounded p-3">
                    <h5>Rincian Pesanan</h5>
                    <hr>
                    <h6 class="float-left">Total Item </h6>
                    <h4 class="text-right text-success"><?= $item ?></h4>
                    <h6 class="float-left">Total Harga</h6>
                    <h4 class="text-right text-success">Rp. <?= $total_harga ?></h4>
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