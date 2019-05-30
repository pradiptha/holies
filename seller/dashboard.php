<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_holies';
$conn = mysqli_connect($host, $user, $pass, $db);
$id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM detail_user WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>HOLIES | House of Lifestock</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap-modified.min.css">
    <!-- Additional CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/holies/css/navbar.css">
    <link rel="stylesheet" href="vendor/holies/css/landing1.css">
    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Viga">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/adminpanel.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="pl-5">
            <a class="navbar-brand ml-4" href="/holies">HOLIES</a>
        </div>
    </nav>
    <div class="shadow mb-5 bg-white rounded-bottom dashboard p-0">
        <div class="text-center mt-3">
            <img src="../img/profile/<?= $data['foto'] ?>" class="PP" style="object-fit:cover;" alt="PP">
        </div>
        <div class="username">
            <h1><?= $data['nama'] ?></h1>
        </div>
        <div class="list-group px-3">
            <a href="index.php" class="list-group-item list-group-item-action text-center">Home</a>
            <a href="jual.php" class="list-group-item list-group-item-action text-center">Jual Barang</a>
            <a href="akunsaya.php" class="list-group-item list-group-item-action text-center">Akun Saya</a>
            <a href="" class="list-group-item list-group-item-action text-center">Pesan</a>
        </div>
        <div class="d-flex justify-content-center p-3">
            <a href="../home/logout.php" class="btn btn-success">LOGOUT</a>
        </div>
    </div>


</body>

</html>