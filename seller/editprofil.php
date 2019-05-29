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
            <a class="navbar-brand font-weight-bold ml-4" href="#">HOLIES</a>
        </div>
    </nav>
    <h1 class="text-center text-success m-3">Edit Data Diri</h1>
	<div class="container">
  		<div class="row justify-content-md-center">
    		<div class="col col-lg-8 shadow m-2 bg-white rounded p-4">
      			<form method="post" action="">
      				<div class="form-group">
					    <label for="exampleFormControlFile1">Foto Profil</label>
					    <input type="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
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
                    <div class="form-group mt-5">
                        <label for="password">Masukkan Password Anda</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="modal-footer">
                        <a href="akunsaya.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button></a>
                        <button type="button" class="btn btn-success">Simpan</button>
                    </div>
                </form>
    		</div>
  		</div>
	</div>
</body>
</html>