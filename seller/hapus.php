<?php
include "../php/config.php";
$id_produk = $_GET['id'];
$sql = "DELETE FROM produk_kategori WHERE id_produk = $id_produk";
$sql1 = "DELETE FROM gmbr_produk WHERE id_produk = $id_produk";
$sql2 = "DELETE FROM produk WHERE id_produk = $id_produk";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql1);
mysqli_query($conn, $sql2);
header("location: index.php");
