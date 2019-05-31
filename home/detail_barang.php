<?php
$id_barang = $_GET['id'];
include "../php/config.php";
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$id_user = $id;
	$sql = "SELECT * FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
}
$query = "SELECT * FROM produk INNER JOIN gmbr_produk USING (id_produk) INNER JOIN seller USING (id_seller) INNER JOIN detail_user USING (id_user) WHERE id_produk='$id_barang'";
$simpan = mysqli_fetch_assoc(mysqli_query($conn, $query));
if (isset($_POST['submit'])) {
	$qty = mysqli_real_escape_string($conn, $_POST['quantity']);
	$totalhrg = $qty * $simpan['harga_satuan'];
	$sql1 = mysqli_query($conn, "SELECT * FROM keranjang WHERE id_customer = '$id_user' AND id_produk = '$id_barang' ");
	$num_rows = mysqli_num_rows($sql1);
	if ($num_rows) {
		$keranjang = mysqli_fetch_assoc($sql1);
		$id_keranjang = $keranjang['id_keranjang'];
		$query = mysqli_query($conn, "UPDATE keranjang SET quantity = quantity + '$qty' WHERE id_keranjang = '$id_keranjang' ");
		// var_dump(mysqli_error($conn));
	} else {
		$query2 = "INSERT INTO keranjang (id_customer,id_produk,quantity,total_harga) VALUES ('$id_user','$id_barang','$qty','$totalhrg') ";
		if (mysqli_query($conn, $query2)) {
			// var_dump(mysqli_error($conn));
		} else {
			echo "gagal";
		}
	}
	if ($_POST['submit'] === 'buy') {
		header("location: cart.php");
		die();
	}
}
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>HOLIES - House of Livestock</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap-modified.min.css">
	<link rel="stylesheet" href="../vendor/holies/css/detailbarang.css">

</head>

<body>
	<?php include 'nav.php' ?>
	<div class="container">
		<div class="row">
			<div class="col-8">
				<div class="shadow bg-white rounded mt-3 p-3 box1">
					<img src="../img/barang/<?= $simpan['gambar_produk'] ?>" class="img-fluid img rounded float-left mr-3 mb-3" alt="Responsive image" style="height: 250px">
					<p class="text-left float-left">
						<h3><?= $simpan['nama_produk'] ?></h3>
					</p>
					<p class="text-left float-left">
						<h3 class="text-success font-weight-bold">Rp. <?= $simpan['harga_satuan'] ?></h3>
					</p>
					<p class="text-secondary">Tersedia <?= $simpan['quantity'] ?> /satuan</p>
					<p class="text-secondary">Masukkan jumlah yang diinginkan</p>
					<form method="post" action="">
						<div class="hitung">
							<button type="button" value="-" class="btn minus btn-primary btn-sm bg-success float-left" data-field="quantity">-</button>
							<span class="border border-secondary float-left box2">
								<input class="quantity-field" type="number" step="1" max="<?= $simpan['quantity'] ?>" value="1" name="quantity">
							</span>
							<button type="button" value="+" class="btn plus btn-secondary btn-sm bg-success float-left" data-field="quantity">+</button>
						</div>
						<button type="submit" name="submit" value="buy" class="btn btn-success btn-lg btn-block">BELI SEKARANG</button>
						<button type="submit" name="submit" value="submit" class="btn btn-secondary btn-lg btn-block">TAMBAH KE KERANJANG</button>
					</form>
				</div>
				<div class="shadow bg-white rounded mt-3 mb-5 p-3 box3">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<label class="btn btn-success active">
							<input type="radio" name="options" id="option1" autocomplete="off" checked> Detail Barang
						</label>
					</div>
					<table class="table table-borderless table-responsive">
						<tr>
							<th scope="row">INFORMASI</th>
							<td><i class="fa fa-shopping-cart"></i></td>
							<td>Dibeli</td>
							<td>:</td>
							<td>36</td>
						</tr>
						<tr>
							<th></th>
							<td><i class="fa fa-heart"></i></td>
							<td>Disukai</td>
							<td>:</td>
							<td>56</td>
						</tr>
						<tr>
							<th></th>
							<td><i class="fas fa-upload"></i></td>
							<td>Diperbaharui</td>
							<td>:</td>
							<td>12 Mei 2019</td>
						</tr>
					</table>
					<div class="p-3">
						<h4 class="font-weight-bold">Deskripsi</h4>
						<p class="pl-5 text-justify">
							<?= $simpan['deskripsi'] ?>
						</p>
					</div>
				</div>
			</div>
			<div class="shadow bg-white rounded col-4 box3 mt-3 p-3">
				<h3>Tentang Seller</h3>
				<div class="text-center mt-3">
					<img src="../img/profile/<?= $simpan['foto_profil'] ?>" class="PP" alt="PP">
				</div>
				<h2 class="text-center mt-3"><?= $simpan['nama'] ?></h2>
				<div class="text-center mt-3"><i class="fas fa-map-marker-alt"> <?= $simpan['alamat'] ?></i></div>
				<div class="text-center m-3"><i class="fas fa-calendar-week"> Bergabung : 12 Jan 2019</i></div>
				<button type="button" class="btn btn-success btn-lg btn-block">IKUTI</button>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		function incrementValue(e) {
			e.preventDefault();
			var fieldName = $(e.target).data('field');
			var parent = $(e.target).closest('div');
			var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
			if (!isNaN(currentVal)) {
				parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
			} else {
				parent.find('input[name=' + fieldName + ']').val(0);
			}
		}
		function decrementValue(e) {
			e.preventDefault();
			var fieldName = $(e.target).data('field');
			var parent = $(e.target).closest('div');
			var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);
			if (!isNaN(currentVal) && currentVal > 0) {
				parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
			} else {
				parent.find('input[name=' + fieldName + ']').val(0);
			}
		}
		$('.hitung').on('click', '.plus', function(e) {
			incrementValue(e);
		});
		$('.hitung').on('click', '.minus', function(e) {
			decrementValue(e);
		});
	</script>
</body>

</html>