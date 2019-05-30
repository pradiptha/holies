<?php
    $idkategori = $_GET['id_kategori'];
    $conn = mysqli_connect("localhost","root","","db_holies");
    $sql = mysqli_query($conn,"SELECT * FROM kategori WHERE kategori.id_kategori='$idkategori'");
    $data = mysqli_fetch_array($sql);

    if (isset($_POST['submit'])) {
    
        $namakategori = mysqli_real_escape_string($conn, $_POST['namakategori']);
        $sql = mysqli_query($conn, "UPDATE kategori SET nama_kategori= '$namakategori' WHERE id_kategori='$idkategori'");
        header("location: daftar-kategori.php");
    }
    
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
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="pl-5">
            <a class="navbar-brand ml-4" href="/holies">HOLIES</a>
        </div>
    </nav>
    <div class="container d-flex justify-content-center align-items-center">
    	<div class=" kotak-edit bg-white rounded shadow p-4 mt-5">
            <form method="POST">
                <h5>ID Produk</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"aria-describedby="basic-addon2" value="<?php echo $data['id_kategori'] ?>" readonly>
                </div>
                <h5>Nama Produk</h5>
                <div class="input-group mb-3">
                    <input type="text" class="form-control"aria-describedby="basic-addon2" value="<?php echo $data['nama_kategori'] ?>" name="namakategori">
                </div>
                <a href="daftar-kategori.php">
                    <button type="button" class="btn btn-danger">Batalkan</button>
                </a>
                <button class="btn btn-success" type="submit" id="button-addon2" name="submit">Submit</button>
            </form>
    		
    	</div>
    </div>
</body>
</html>