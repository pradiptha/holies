<?php
include "../php/config.php";
$id_keranjang = $_GET['id'];
$sql = mysqli_query($conn, "DELETE FROM keranjang WHERE id_keranjang = '$id_keranjang' ");
// var_dump(mysqli_error_list($conn));
header("location: cart.php");
die();
