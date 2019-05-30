<?php
include "../php/config.php";
$id_user = $_SESSION['id'];
$sql = mysqli_query($conn, "SELECT * FROM user INNER JOIN detail_user USING(id_user) WHERE id_user = '$id_user' ");
$data = mysqli_fetch_assoc($sql);
// var_dump($data);
if (isset($_POST['submit'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $jk = $_POST['jenis-kelamin'];
    $telp = mysqli_real_escape_string($conn, $_POST['telp']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $data['password'];
    $confirmPassword = $_POST['password'];
    $gambarLama = mysqli_real_escape_string($conn, $_POST['gambar_lama']);

    $error = $_FILES['foto_profil']['error'];
    if ($error === 4) {
        $gambar = $gambarLama;
    } else {
        $namaFile = $_FILES['foto_profil']['name'];
        $tmp = $_FILES['foto_profil']['tmp_name'];
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower((end($ekstensiGambar)));
        $namaFileBaru = uniqid();
        $gambar = $namaFileBaru . '.' . $ekstensiGambar;
        if (in_array($ekstensiGambar, $ekstensiGambarValid)) {
            move_uploaded_file($tmp, '../img/profile/' . $gambar);
        }
    }
    $sql1 = mysqli_query($conn, "UPDATE detail_user SET
                                nama = '$nama',
                                jk = '$jk',
                                alamat = '$alamat',
                                telp = '$telp',
                                email = '$email',
                                foto_profil = '$gambar' WHERE id_user = '$id_user' ");
    header("location: profile.php");
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
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/sherly.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="pl-5">
            <a class="navbar-brand font-weight-bold ml-4" href="/holies/seller">HOLIES</a>
        </div>
    </nav>
    <h1 class="text-center text-success m-3">Edit Data Diri</h1>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col col-lg-8 shadow m-2 bg-white rounded p-4">
                <form method="post" action="" enctype="multipart/form-data">
                    <input type="hidden" name="gambar_lama" value="<?= $data['foto_profil'] ?>">
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto Profil</label><br>
                        <img src="../img/profile/<?= $data['foto_profil'] ?>" class="img-thumbnail my-2" style="max-width:150px;" alt="">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input " name="foto_profil" id="foto_profil">
                        <label class="custom-file-label" for="foto_profil">Choose file</label>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin" class="d-block">Jenis Kelamin<?= $data['jk'] ?></label>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="jenis-kelamin" value="pria" class="custom-control-input" <?= ($data["jk"] == "Pria" ? 'checked' : ''); ?>>
                            <label class="custom-control-label" for="customRadioInline1">Pria</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="jenis-kelamin" value="wanita" class="custom-control-input" <?= ($data["jk"] == "Wanita" ? 'checked' : ''); ?>>
                            <label class="custom-control-label" for="customRadioInline2">Wanita</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telp</label>
                        <input type="text" class="form-control" id="telp" name="telp" placeholder="No.telepon" required value="<?= $data['telp'] ?> ">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <br>
                        <textarea name="alamat" rows="4" cols="50" class="form-control" id="alamat" placeholder="Alamat" required><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required value="<?= $data['email'] ?>">
                    </div>
                    <div class="form-group mt-5">
                        <label for="password">Masukkan Password Anda</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <a href="akunsaya.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button></a>
                        <input type="submit" class="btn btn-success" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>