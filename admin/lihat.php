<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_holies';

$conn = mysqli_connect($host, $user, $pass, $db);

//perintah query untuk mySQL
$sql1 = mysqli_query($conn, "SELECT * FROM detail_user INNER JOIN user ON detail_user.id_user = user.id_user WHERE user.tingkatan='customer'");

$sql2 = mysqli_query($conn, "SELECT * FROM detail_user INNER JOIN user ON detail_user.id_user = user.id_user WHERE user.tingkatan='seller'");

 //buat array
$customer = [];
$datacust = [];
$datasell = [];
$seller = [];

//perulangan untuk mengubah data dari hasil query menjadi array

while($customer = mysqli_fetch_assoc($sql1))
{
	$datacust[] = $customer;
}
while($seller = mysqli_fetch_assoc($sql2))
{ 
	$datasell[] = $seller;
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
	<?php include 'admin.php' ?>
	<div class="row">
		<div class="col-sm-5 float-left ml-5 mt-2">
			<div class="bg-white rounded shadow p-4">
	    		<h3>Seller</h3>
				<table class="table table-striped">
				 	<thead class="thead-light">
				    	<tr>
				      		<th>No</th>
					      	<th>Nama</th>
					      	<th>Action</th>
				    	</tr>
				  	</thead>
				  	<?php if ($datasell) : ?>
					  	<?php $i=1; foreach ($datasell as $key): ?> 
					  	<tbody>
					    	<tr>
					      		<td><?php echo $i ?></th>
					      		<td><?php echo $key['nama'] ?></td>
					      		<td>
					      			<a href="hapususer.php?iduser=<?php echo $key['id_user'] ?>">
					      				<i class="fas fa-trash float-left text-success"></i>
					      			</a>
					      		</td>
					    	</tr>
					 	</tbody>
					 	<?php $i++; endforeach ?>
				 	<?php endif ?>
				</table>
	    	</div>
		</div>
		<div class="col-sm-5 float-left ml-5 mt-2">
			<div class="bg-white rounded shadow p-4">
	    		<h3>Customer</h3>
				<table class="table table-striped">
				 	<thead class="thead-light">
				    	<tr>
				      		<th>No</th>
					      	<th>Nama</th>
					      	<th>Action</th>
				    	</tr>
				  	</thead>
				  	<?php if ($datacust) : ?>
					  	<?php $i=1; foreach ($datacust as $key) : ?>
					  	<tbody>
					    	<tr>
					      		<td><?php echo $i ?></th>
					      		<td><?php echo $key['nama'] ?></td>
					      		<td>
					      			<a href="hapususer.php?iduser=<?php echo $key['id_user'] ?>">
					      				<i class="fas fa-trash float-left text-success"></i>
					      			</a>
					      		</td>
					    	</tr>
					 	</tbody>
					 	<?php $i++; endforeach ?>
				 	<?php endif ?>
				</table>
	    	</div>
		</div>
	</div>
</body>
</html>