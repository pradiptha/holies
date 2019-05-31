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
	<!-- Navigation -->
	<?php include '../home/nav.php' ?>
	<!-- Page Content -->
	<div class="container p-3">
		<div class="row">
		    <div class="col-sm-8">
		    	<h2 class="text-success">Checkout</h2>
		    	<div class="shadow mb-3 bg-white rounded data_diri p-3">
		    		<h4>I Gde Made Hendra Pradiptha</h4>
		    		<table class="table table-borderless table-responsive ml-5">
						<tr>
					    	<td><i class="fas fa-map-marker-alt text-success"></i></td>
					      	<td>Jalan Tukad Balian No 95 Denpasar</td>
					      	<td class="text-success"><i class="fas fa-pencil-alt"></i>Ubah</td>
					    </tr>
					    <tr>
					      	<td><i class="fas fa-file text-success"></i></td>
					      	<td>Penagihan ke Alamat yang Sama</td>
					      	<td class="text-success"><i class="fas fa-pencil-alt"></i>Ubah</td>
					    </tr>
					    <tr>
					      	<td><i class="far fa-envelope text-success"></i></td>
					      	<td>
					      		<form>
					      			<div>
					      				<input class="form-control form-control-sm" type="text" placeholder="Email">
					      			</div>
					      		</form>
					      	</td>
					    </tr>
					    <tr>
					      	<td><i class="fas fa-phone text-success"></i></td>
					     	<td>
					      		<form>
					      			<div class="form-group">
										<input class="form-control form-control-sm" type="text" placeholder="No Telepon">
									</div>
					      		</form>
					      	</td>
					    </tr>
					</table>
		    	</div>
		    	<h5 class="text-success">Detail Pesanan</h5>
		    	<div class="shadow mb-5 bg-white rounded keranjang p-3">
		    		<div class="mb-3" style="border-bottom: solid 1px grey;">
		    			<i class="fas fa-shopping-cart text-success"> Pesanan 1</i>
		    		</div>
		    		<div style="border-bottom: solid 1px grey;">
		    			<img src="../img/buy.png" class="img-thumbnail mr-3" style="float: left;">
		    			<h5>Nutrisi Harian Anak Ayam</h5>
		    			<p>Pakan Ayam</p>
		    			<h4 class="text-success" >Rp 9.000/kg</h4>
		    			<h3 class="text-right">Kuantitas 5 Kg</h3>
		    		</div>
		    		<div>
		    			<h6 class=" text-right text-success float-right ml-1 mt-2">45.000</h6>
		    			<h6 class="text-right float-right mt-2">1 barang, Jumlah : Rp </h6>
		    		</div>
		    	</div>
		    	<div class="upload_bar fixed-bottom">
			    	<button type="button" class="btn btn-primary btn-lg btn-block bg-success ">BAYAR (Rp 45.000)</button>
			    </div>
		    </div>
	  	</div>
	</div>
</body>
</html>