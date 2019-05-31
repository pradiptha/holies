<?php 
include "../php/config.php";
if(isset($_GET['id'])){
	$idkeranjang = $_GET['id'];

	$sql = mysqli_query($conn, "UPDATE keranjang SET keranjang.status_produk = 'dikirim' WHERE keranjang.id_keranjang='$idkeranjang'");
}else if(isset($_GET['idid'])){
	$idkeranjang = $_GET['idid'];

	$sql = mysqli_query($conn, "UPDATE keranjang SET keranjang.status_produk = 'cart' WHERE keranjang.id_keranjang='$idkeranjang'");
}


header("location:pesanan_masuk.php");


 ?>