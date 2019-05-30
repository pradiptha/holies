<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOLIES - House of Livestock</title>
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../vendor/holies/css/index.css">
</head>

<body>

    <div class="gradient-background container">
        <div class="row justify-content-sm-center">
            <div class="register-page shadow rounded my-5 p-5 ">
                <div class="col-sm-auto">
                    <h6 class="text-center">Register as Seller</h6>
                    <div class="register-logo">
                        <a href="/holies"><img src="../vendor/holies/img/holies-text.png" class="register-logo" alt=""></a>
                    </div>
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin" class="d-block">Jenis Kelamin</label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="jenis-kelamin" value="pria" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Pria</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="jenis-kelamin" value="wanita" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telp">No. Telp</label>
                            <input type="text" class="form-control" id="telp" name="telp" placeholder="No.telepon" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <br>
                            <textarea name="alamat" rows="4" cols="50" class="form-control" id="alamat" placeholder="Alamat" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!-- foto profil tak apus di database ingetin ya -->
<?php
include '../php/config.php';
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jeniskelamin = mysqli_real_escape_string($conn, $_POST['jenis-kelamin']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $telp = mysqli_real_escape_string($conn, $_POST['telp']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "INSERT INTO user(username,password,tingkatan) VALUES ('$user','$password','seller') ";
    if (mysqli_query($conn, $sql)) {
        $temp = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id_user FROM user ORDER BY id_user  DESC LIMIT 1"));
        $number = $temp["id_user"];
        $sql1 = "INSERT INTO detail_user(id_user,nama,jk,alamat,telp,email,foto_profil) VALUES ('$number','$nama','$jeniskelamin','$alamat','$telp','$email','nophoto.png')";
        mysqli_query($conn, $sql1);
        $sql2 = "INSERT INTO seller(id_user) VALUES ('$number')";
        mysqli_query($conn, $sql2);
        echo "sukses";
    }
    header("location: ../home/login.php");
}

?>