<?php
include "../php/config.php";
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	// var_dump($result);
}
$id_seller = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM detail_user INNER JOIN seller WHERE id_seller = '$id_seller' ");
$seller = mysqli_fetch_assoc($sql);

if (!$seller) {
	header("location: ../home");
}
$sql1 = mysqli_query($conn, "SELECT * FROM produk INNER JOIN produk_kategori USING(id_produk) 
        INNER JOIN gmbr_produk USING(id_produk) WHERE id_seller = '$id_seller' ");
$dataBarang = [];
while ($row = mysqli_fetch_assoc($sql1)) {
	$dataBarang[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>HOLIES - House of Livestock</title>

	<!-- Bootstrap core CSS -->
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
	<?php include '../home/nav.php' ?>
	<div class="row m-3 justify-content-md-center">
		<div class="shadow mb-2 bg-white rounded box2 p-3">
			<div class="gambar-diri float-left">
				<img src="../img/profile/<?= $seller['foto_profil'] ?>" class="rounded-circle" style="width: 100%; height: 100%; object-fit: cover">
			</div>
			<div class="detail float-left ml-3">
				<h3 class="pl-1"><?= $seller['nama'] ?></h3>
				<table class="table-responsive">
					<tr>
						<td><i class="fas fa-map-marker-alt text-success m-2"></i></td>
						<td><?= $seller['alamat'] ?></td>
					</tr>
					<tr>
						<td><i class="far fa-envelope text-success m-2"></i></i></td>
						<td><?= $seller['email'] ?></td>
					</tr>
				</table>
				<button type="button" class="btn btn-success m-2">kirim Pesan</button>
				<button type="button" class="btn btn-success m-2">Ikuti</button>
			</div>
		</div>
	</div>
	<div class="row w-100">
		<div class="ml-5 mr-3 my-4 w-100">
			<h3 class="text-success">Barang dari penjual ini</h3>
			<hr>
			<div class="card-deck barang-jual">
				<?php if ($dataBarang) : ?>
					<?php foreach ($dataBarang as $key) : ?>
						<div class="bg-white mt-3 ml-2 rounded shadow" style="max-width: 210px;">
							<img style=" max-width: 250px; max-height: 150px; " class=" gambar-jual card-img-top" src="../img/barang/<?= $key['gambar_produk'] ?>">
							<div class="card-body">
								<h5 class="card-title" style="max-width: 200px;"><?= substr($key['nama_produk'], 0, 18); ?> <?php if (strlen($key['nama_produk']) > 18) {
																																echo "..";
																															} ?> </h5>
								<h6 class="text-success font-weight-bold mb-4">Rp. <?= $key['harga_satuan'] ?></h6>
								<a href="#" class="btn btn-sm btn-success w-100">Beli</a>
							</div>
						</div>
					<?php endforeach ?>
				<?php else : ?>
					<div class="bg-white rounded shadow w-100">
						<div class="card-body">
							<h5 class="card-title text-danger">Penjual ini tidak memiliki barang</h5>
						</div>
					</div>
				<?php endif ?>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>