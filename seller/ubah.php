<?php include
	"../php/config.php";
//ambil data
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM produk INNER JOIN produk_kategori USING(id_produk) 
        INNER JOIN gmbr_produk USING(id_produk) 
		INNER JOIN seller_produk USING(id_produk) WHERE id_produk = '$id' ");
$data = mysqli_fetch_assoc($sql);
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

if (isset($_POST['submit'])) {
	$id_produk = $_POST['id_produk'];
	$namaBarang = mysqli_real_escape_string($conn, $_POST['namabarang']);
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];
	$deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
	$gambarLama = mysqli_real_escape_string($conn, $_POST['gambar_lama']);

	$error = $_FILES['foto']['error'];
	if ($error === 4) {
		$gambar = $gambarLama;
		echo "gambarlama";
	} else {
		echo "gambarbaru";
		$namaFile = $_FILES['foto']['name'];
		$tmp = $_FILES['foto']['tmp_name'];
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		$namaFileBaru = uniqid();
		$gambar = $namaFileBaru . '.' . $ekstensiGambar;
		if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
			move_uploaded_file($tmp, '../img/barang/' . $gambar);
		}
	}
	echo "idproduk = " . $namaBarang . " " . "deskripsi = " . $deskripsi . " " . $id_produk;
	$sql = "UPDATE produk SET nama_produk='$namaBarang',deskripsi='$deskripsi' WHERE id_produk='$id_produk'";
	if (mysqli_query($conn, $sql)) {
		$sql1 = "UPDATE seller_produk SET quantity = '$stok', harga_satuan = '$harga' WHERE id_produk = '$id_produk' ";
		$sql2 = "UPDATE gmbr_produk SET gambar_produk VALUES '$gambar' WHERE id_produk = '$id_produk' ";
		$sql3  = "UPDATE produk_kategori SET id_kategori = '$kategori' WHERE id_produk = '$id_produk' ";
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
		<h3 class="mt-4 ml-4 text-success">Ubah Data Barang</h3>
	</div>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class="mt-2 mb-4 ml-4 p-3 shadow rounded col-sm-6 bg-white">
				<input type="hidden" id="id_produk" name="id_produk" value="<?= $data['id_produk'] ?>">
				<input type="hidden" id="gambar_lama" name="gambar_lama" value="<?= $data['gambar_produk'] ?>">
				<div class="form-group">
					<label for="namabarang">Nama Barang</label>
					<input type="text" class="form-control" id="namabarang" name="namabarang" placeholder="Nama Barang" value="<?= $data['nama_produk'] ?>">
				</div>
				<div class="form-group">
					<label for="kategori">Kategori Barang</label>
					<select class="form-control" id="kategori" name="kategori">
						<?php
						foreach ($rows as $opsi) :
							?>
							<option value="<?= $opsi['id_kategori'] ?>" <?= ($data["id_kategori"] == $opsi['id_kategori'] ? 'selected' : ''); ?>><?= $opsi['nama_kategori'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="form-group ">
					<label for="harga" name="harga ">Harga Satuan</label>
					<input type="number" class="form-control " id=" harga " name="harga" autocomplete="off" value="<?= $data['harga_satuan'] ?>">
				</div>
				<div class=" form-group ">
					<label for=" stok">Stok Barang</label>
					<input type="number" class="form-control" id="stok" name="stok" value="<?= $data['quantity'] ?>">
				</div>
				<div class=" form-group ">
					<label for=" deskripsi ">Deskripsi Barang</label>
					<textarea class=" form-control " id=" deskripsi " name="deskripsi" rows=" 4 "><?= $data['deskripsi'] ?></textarea>
				</div>

				<!-- <button class=" btn bt n -success   w-1 00" type ="subm it">Tambah Barang</button> -->
			</div>
			<div class=" mt-2 ml-4 col-sm-4">
				<div class="bg-white shadow rounded p-4 ">
					<label>Foto Barang</label>
					<img src="../img/barang/<?= $data['gambar_produk'] ?>" alt="" class="img-thumbnail rounded">
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input " name="foto" id="fotobarang">
							<label class="custom-file-label" for="fotobarang">Choose file</label>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-success  w-100 mt-4" name="submit" value="Ubah Data Barang">
			</div>
		</div>
	</form>
</body>

</html>