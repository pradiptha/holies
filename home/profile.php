<?php
include "../php/config.php";
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	$nama = $data['nama'];
	$alamat = $data['alamat'];
	$email = $data['email'];
	$telp = $data['telp'];
	// var_dump($result);
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
	<?php include '../home/nav.php' ?>
	<!-- Page Content -->
	<div class="container p-3">
		<div class="row">
			<div class="col-sm-8">
				<h2 class="text-success">Akun Saya</h2>
				<div class="shadow mb-3 bg-white rounded data-diri p-3">
					<div class="gambar-diri float-left">
						<img src="../img/profile/<?= $data['foto'] ?>" class="rounded-circle" style="width: 100%; height: 100%;">
					</div>
					<div class="detail float-left ml-3">
						<h3 class="pl-1"><?= $nama ?></h3>
						<table class="table-responsive">
							<tr>
								<td><i class="fas fa-map-marker-alt text-success m-1"></i></td>
								<td><?= $alamat ?></td>
							</tr>
							<tr>
								<td><i class="far fa-envelope text-success m-1"></i></i></td>
								<td><?= $email ?></td>
							</tr>
							<tr>
								<td><i class="fas fa-phone text-success m-1"></i></td>
								<td><?= $telp ?></td>
							</tr>
						</table>
					</div>
					<i class=" m-1 fas fa-pencil-alt text-success float-right"></i>
				</div>
				<div class="shadow mb-3 bg-white rounded data-diri p-3">
					<div style="border-bottom: solid grey 1px;">
						<h6 class="text-success">History Pesanan</h6>
					</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Tanggal Pemesanan</th>
								<th scope="col">Nama Barang</th>
								<th scope="col">Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</th>
								<td>12-05-2019</td>
								<td>Kambing Jantan Hitam</td>
								<td>5</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="shadow mb-3 bg-white rounded ikon-samping p-3 mt-5">
					<div class="kolom">
						<div class="text-center">
							<i class="fas fa-heart fa-1x text-success"></i>
						</div>
						<h6 class="text-center text-success">Favorite Saya</h6>
					</div>
					<div class="kolom">
						<div class="text-center">
							<i class="fas fa-shopping-cart fa-1x text-success"></i>
						</div>
						<h6 class="text-center text-success">Keranjang Saya</h6>
					</div>
					<div class="kolom">
						<div class="text-center">
							<i class="far fa-envelope fa-1x text-success"></i>
						</div>
						<h6 class="text-center text-success">Pesan Saya</h6>
					</div>
				</div>
				<h1 class="text-center text-success font-weight-bold mt-4">HOLIES</h1>
				<h5 class="text-center text-success m-2">Temukan kami di</h5>
				<div class="sosmed p-3">
					<ul class="list-group list-group-horizontal-sm">
						<li class="list-group-item border-light">
							<img style="width :50%" src="../img/fb.png" class="rounded mx-auto d-block">
							<div class="media-body">
								<p class="text-center"><a href="#" style="color:#02A161;">Facebook</a></p>
							</div>
						</li>
						<li class="list-group-item border-light">
							<img style="width :50%" src="../img/ig.png" class="rounded mx-auto d-block">
							<div class="media-body">
								<p class="text-center"><a href="#" style="color:#02A161;">Instagram</a></p>
							</div>
						</li>
						<li class="list-group-item border-light">
							<img style="width :50%" src="../img/tw.png" class="rounded mx-auto d-block">
							<div class="media-body">
								<p class="text-center"><a href="#" style="color:#02A161;">Twitter</a></p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>