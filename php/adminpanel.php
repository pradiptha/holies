<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap-modified.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendor/holies/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../vendor/holies/css/adminpanel.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">HOLIES</a>
    </nav>
    </div>
    <div class="layer">
    	<div class="shadow mb-5 bg-white rounded dashboard">
    		<div class="text-center">
				<img src="../img/mark.png" class="PP" alt="PP">
			</div>
			<div class="username"><h1>SIAPA SAYA</h1></div>
			<i class="fas fa-edit d-flex justify-content-center editname">Edit</i>
			<div class="list-group">
				<button type="button" class="list-group-item list-group-item-action text-center bg-success">JUAL BARANG</button>
				<button type="button" class="list-group-item list-group-item-action text-center">DAFTAR BARANG</button>
				<button type="button" class="list-group-item list-group-item-action text-center">LAPAK SAYA</button>
			</div>
			<div class="d-flex justify-content-center p-3">
				<button type="button" class="btn btn-success">LOGOUT</button>
			</div>
    	</div>
    	<div class="jual_barang p-3">
    		<h1>Jual Barang</h1>
    		<div class="shadow mb-5 bg-white rounded data_barang p-3">
    			<form>
					<div class="form-group">
						<label for="exampleFormControlInput1">Nama Barang</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nama Barang">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Kategori Barang</label>
						<select class="form-control" id="exampleFormControlSelect1">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</form>
    		</div>
    		<div class="shadow mb-5 bg-white rounded detail_barang p-3">
    			<form>
    				<div class="form-group">
						<label for="exampleFormControlInput1">Harga Satuan</label>
						<input type="email" class="form-control" id="exampleFormControlInput1">
					</div>
					<div class="form-group">
						<label for="exampleFormControlInput1">Ketersediaan Barang</label>
						<input type="email" class="form-control" id="exampleFormControlInput1">
					</div>
    			</form>
    		</div>
    		<div class="shadow mb-5 bg-white rounded deskripsi_barang p-3">
    			<div class="form-group">
				    <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
				    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
    		</div>
    	</div>
    	<div class="gambar p-3">
    		<div class="shadow mb-5 bg-white rounded gambar_barang p-3">
	    		<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Gambar Barang</label><br>
						<input type="file" class="form-control" name="foto">
						<br>
						<button class="btn btn-warning" type="submit">Upload</button>
					</div>	
				</form>
	    	</div>
    	</div>
    </div>
    <div class="upload_bar fixed-bottom">
    	<button type="button" class="btn btn-primary btn-lg btn-block bg-success ">UPLOAD BARANG</button>
    </div>
</body>

</html>