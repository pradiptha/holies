<?php include
	"../php/config.php";
//Kategori
$sql4 = mysqli_query($conn, "SELECT * FROM kategori");
$rows = [];
while ($row = mysqli_fetch_assoc($sql4)) {
	$rows[] = $row;
}

$id_user = $_SESSION['id'];
$abc = mysqli_query($conn, "SELECT id_seller FROM seller WHERE id_user = '$id_user' ");
$id_seller = mysqli_fetch_assoc($abc);
$id_seller = $id_seller['id_seller'];

//Tambah Barang
if (isset($_POST['submit'])) {
	//foto
	$error = $_FILES['foto']['error'];
	if ($error === 4) {
		$gambar = "defaultphoto.png";
	} else {
		$namaFile = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		$namaFileBaru = uniqid();
		$gambar = $namaFileBaru . '.' . $ekstensiGambar;
		if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
			move_uploaded_file($tmp, '../img/barang/' . $namaFileBaru);
		}
	}
	//form
	$namaBarang = mysqli_real_escape_string($conn, $_POST['namabarang']);
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
	$sql = "INSERT INTO produk(nama_produk,deskripsi) VALUES ('$namaBarang','$deskripsi')";
	if (mysqli_query($conn, $sql)) {
		$last_id = mysqli_insert_id($conn);
		$sql1 = "INSERT INTO `seller_produk` (`id_seller`, `id_produk`, `quantity`, `harga_satuan`) VALUES ('$id_seller', '$last_id', '$stok', '$harga')";
		$sql2 = " INSERT INTO gmbr_produk(id_produk,gambar_produk) VALUES('$last_id','$gambar')";
		$sql3  = "INSERT INTO produk_kategori(id_produk,id_kategori) VALUES('$last_id','$kategori')";
		mysqli_query($conn, $sql1);
		mysqli_query($conn, $sql2);
		mysqli_query($conn, $sql3);
	}
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content=" width= device-width, initial-scale=1,  shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Bootstrap core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../vendor/holies/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../vendor/holies/css/adminpanel.css">
	<link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
</head>

<body>
	<?php include "dashboard.php" ?>
	<div class="row">
		<h3 class="mt-4 ml-4 text-success">Tambah Barang</h3>
	</div>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="mt-2 mb-4 ml-4 p-3 shadow rounded col-sm-6 bg-white">
				<div class="form-group">
					<label for="namabarang">Nama Barang</label>
					<input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang">
				</div>
				<div class="form-group">
					<label for="kategori">Kategori Barang</label>
					<select class="form-control" id="kategori" name="kategori">
						<?php
						foreach ($rows as $opsi) :
							?>
							<option value="<?= $opsi['id_kategori'] ?>"><?= $opsi['nama_kategori'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group ">
					<label for="harga" name="harga ">Harga Satuan</label>
					<input type="number" class="form-control " id=" harga " name="harga" autocomplete="off">
				</div>
				<div class=" form-group ">
					<label for=" stok">Stok Barang</label>
					<input type="number" class="form-control" id="stok" name="stok">
				</div>
				<div class=" form-group ">
					<label for=" deskripsi ">Deskripsi Barang</label>
					<textarea class=" form-control " id=" deskripsi " name="deskripsi" rows=" 4 "></textarea>
				</div>

				<!-- <button class=" btn bt n -success   w-1 00" type ="subm it">Tambah Barang</button> -->
			</div>
			<div class=" mt-2 ml-4 col-sm-4">
				<div class="bg-white shadow rounded p-4 ">
					<label>Foto Barang</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input " name="foto" id="fotobarang">
							<label class="custom-file-label" for="fotobarang">Choose file</label>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-success  w-100 mt-4" name="submit" value="Tambah Barang">
			</div>
		</div>
	</form>
</body>

</html>