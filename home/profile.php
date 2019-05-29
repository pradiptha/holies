<?php
include "../php/config.php";
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
	$nama = $result['nama'];
	$alamat = $result['alamat'];
	$email = $result['email'];
	$telp = $result['telp'];
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
	<link rel="stylesheet" type="text/css" href="../vendor/holies/css/akun-saya.css">
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
						<img src="../img/mark.png" class="rounded-circle" style="width: 100%; height: 100%;">
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
					<p class="m-1 float-right">Edit Profil</p>
				</div>
				<div class="shadow mb-3 bg-white rounded data-diri p-3">
					<div style="border-bottom: solid grey 1px;">
						<h6 class="text-success">Pesanan Saya</h6>
					</div>
				</div>
				<div class="shadow mb-3 bg-white rounded data-diri p-3">
					<div style="border-bottom: solid grey 1px;">
						<h6 class="text-success">History Pesanan</h6>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="shadow mb-3 bg-white rounded ikon-samping p-3 mt-5">
					<div class="kolom">
						<i class="fas fa-heart-circle"></i>
					</div>
					<div></div>
					<div></div>
				</div>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>