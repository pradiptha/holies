<?php
    $idkategori = $_GET['id_kategori'];
    $conn = mysqli_connect("localhost","root","","db_holies");
    $sql = mysqli_query($conn,"DELETE FROM kategori WHERE kategori.id_kategori='$idkategori'");
    $data = mysqli_fetch_array($sql);
    header("location: daftar-kategori.php");
?>