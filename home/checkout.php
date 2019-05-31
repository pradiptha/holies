<?php
include '../php/config.php';
if (isset($_SESSION['id'])) {
	$id = $_SESSION['id'];
	$sql = "SELECT *FROM user INNER JOIN detail_user USING(id_user) WHERE id_user='$id'";
	$data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
}
$sql1 = mysqli_query($conn, "SELECT id_produk,id_seller,nama_produk,deskripsi,id_keranjang,id_customer,keranjang.quantity,keranjang.id_keranjang,total_harga,gambar_produk,harga_satuan FROM keranjang INNER JOIN produk USING(id_produk) INNER JOIN gmbr_produk USING(id_produk) WHERE id_customer = $id AND keranjang.status_produk = 'cart' ");
$dataBarang = [];
while ($row = mysqli_fetch_assoc($sql1)) {
	$dataBarang[] = $row;
}
$i = 1;
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
			<div class="col-sm-8">
				<h2 class="text-success">Checkout</h2>
				<div class="shadow mb-3 bg-white rounded data_diri p-3">
					<h4><?= $data['nama'] ?></h4>
					<table class="table table-borderless table-responsive ml-5">
						<tr>
							<td><i class="fas fa-map-marker-alt text-success"></i></td>
							<td><?= $data['alamat'] ?></td>
							<td class="text-success"><i class="fas fa-pencil-alt mr-1"></i>Ubah</td>
						</tr>
						<tr>
							<td><i class="fas fa-file text-success"></i></td>
							<td>Penagihan ke Alamat yang Sama</td>
							<td class="text-success"><i class="fas fa-pencil-alt mr-1"></i>Ubah</td>
						</tr>
						<tr>
							<td><i class="far fa-envelope text-success"></i></td>
							<td><?= $data['email'] ?></td>
							<td class="text-success"><i class="fas fa-pencil-alt mr-1"></i>Ubah</td>
						</tr>
						<tr>
							<td><i class="fas fa-phone text-success"></i></td>
							<td><?= $data['telp'] ?></td>
							<td class="text-success"><i class="fas fa-pencil-alt mr-1"></i>Ubah</td>
						</tr>
					</table>
				</div>
				<h5 class="text-success">Detail Pesanan</h5>
				<?php $total_semua = 0;
				foreach ($dataBarang as $key) : ?>
					<div class="shadow mb-5 bg-white rounded keranjang p-3">
						<div class="mb-3" style="border-bottom: solid 1px grey;">
							<i class="fas fa-shopping-cart text-success"> Pesanan <?= $i ?></i>
						</div>
						<div style="border-bottom: solid 1px grey;">
							<img class="img-thumbnail mr-3" src="../img/barang/<?= $key['gambar_produk'] ?>" style="float: left; width: 140px; height: 140px">
							<h5><?= $key['nama_produk'] ?></h5>
							<p>Kategori </p>
							<h4 class="text-success">Rp.<?= $key['harga_satuan'] ?></h4>
							<h3 class="text-right">Qty : <?= $key['quantity'] ?></h3>
						</div>
						<div>
							<h6 class=" text-right text-success float-right ml-1 mt-2"><?= $key['total_harga'] ?></h6>
							<h6 class="text-right float-right mt-2">Jumlah harga barang : Rp </h6>
						</div>
					</div>
					<?php $i++;
					$total_semua = $total_semua + $key['total_harga'];
				endforeach ?>
				<form method="post">
					<div class="upload_bar fixed-bottom">
						<button type="submit" name="submit" class="btn btn-primary btn-lg btn-block bg-success ">BAYAR (Rp <?= $total_semua ?>)</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="../vendor/jquery/jquery.slim.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
	foreach ($dataBarang as $key) :
		$id_ker = $key['id_keranjang'];
		$updateker = mysqli_query($conn, "UPDATE keranjang SET status_produk = 'checkout' WHERE id_keranjang='$id_ker' ");
		$query_order = mysqli_query($conn, "INSERT INTO order_detail(id_keranjang,id_customer,status,tgl_transaksi) VALUES ('$id_ker','$id','lunas',now())");
	endforeach;
}
?>