<?php
include "../php/config.php";
$id_keranjang = $_POST["id_keranjang"];
$harga_satuan = $_POST['harga_satuan'];
$quantity = $_POST['quantity'];
var_dump($_POST);
if (isset($_POST['submit'])) {
    $sql = mysqli_query($conn, "UPDATE keranjang SET quantity = '$quantity', total_harga =  $harga_satuan * $quantity WHERE id_keranjang = '$id_keranjang' ");
}
header("location: cart.php");
die();
