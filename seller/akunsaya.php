<?php
include "../php/config.php";
$id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM user INNER JOIN detail_user USING(id_user) WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);
$nama = $data['nama'];
$alamat = $data['alamat'];
$email = $data['email'];
$telp = $data['telp'];
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
	<div class="float-left m-3">
		<div class="shadow mb-3 bg-white rounded box1 p-3 clearfix">
			<div class="gambar-diri float-left">
				<!-- <img src="../img/profile/<?= $data['foto_profil'] ?>" class="rounded-circle" style="height: 100%; object-fit: cover; "> -->
				<img src="../img/profile/<?= $data['foto_profil'] ?>" alt="" class="nav-img-acc mr-lg-2 rounded-circle" style="height: 100%; object-fit: cover; ">
			</div>
			<div class="detail float-left ml-3">
				<h3 class="pl-1"><?= $nama ?></h3>
				<table class="table-responsive">
					<tr>
						<td><i class="fas fa-map-marker-alt text-success m-2"></i></td>
						<td><?= $alamat ?></td>
					</tr>
					<tr>
						<td><i class="far fa-envelope text-success m-2"></i></i></td>
						<td><?= $email ?></td>
					</tr>
					<tr>
						<td><i class="fas fa-phone text-success m-2"></i></td>
						<td><?= $telp ?></td>
					</tr>
				</table>
			</div>
			<a href="editprofil.php"><i class=" m-1 fas fa-pencil-alt text-success float-right"></i></a>
		</div>
	</div>
</body>

</html>