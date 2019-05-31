<?php
include '../php/config.php';
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
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
		<div class="row">
			<div style="margin-top: 100px" class="mx-auto col-sm-8">
				
				<div style="height: 200px" class="shadow mb-3 bg-white rounded data_diri p-3 text-center">
				<h2 class="text-success">Barang anda sedang di proses!</h2>
				<h6>Terimakasih telah menggunakan holies, mohon ditunggu barangnya ya</h6>
				</div>
				<a href="index.php">
					<div class="upload_bar">
						<button type="button" class="btn btn-primary btn-lg btn-block bg-success ">Kembali ke halaman utama</button>
					</div>
				</a>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>