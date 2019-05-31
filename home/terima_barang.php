<?php
include "../php/config.php";
$id_keranjang = $_GET['id'];
$sql = mysqli_query($conn, "UPDATE keranjang SET status_produk='diterima' WHERE id_keranjang = '$id_keranjang' ");
// var_dump(mysqli_error_list($conn));
header("location: profile.php");
die();
