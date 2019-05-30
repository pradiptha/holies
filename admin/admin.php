<?php
include "../php/config.php";
if (isset($_SESSION)) {
    if (!($_SESSION['type'] === 'admin')) {
        header('Location: ../index.php');
    }
}
var_dump($_SESSION);
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
    <meta charset="utf-8">
    <meta name="viewport" content=" width= device-width, initial-scale=1,  shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/adminpanel.css">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="pl-5">
            <a class="navbar-brand ml-4 text-white">HOLIES</a>
        </div>
    </nav>
    <div class="shadow mb-5 bg-white rounded-bottom dashboard p-0 float-left">
        <h3 class="text-center my-3">Admin Panel</h3>
        <h6 class="text-center my-3"><?= $data['nama'] ?></h6>
        <div class="list-group px-3">
            <a href="daftar-kategori.php" class="list-group-item list-group-item-action text-center">Kategori Holies</a>
            <a href="lihat.php" class="list-group-item list-group-item-action text-center">Lihat User</a>
        </div>
        <div class="d-flex justify-content-center p-3">
            <a href="../home/logout.php" class="btn btn-success">LOGOUT</a>
        </div>
    </div>
</body>

</html>