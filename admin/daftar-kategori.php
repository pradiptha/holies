<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_holies';

$conn = mysqli_connect($host, $user, $pass, $db);

//perintah query untuk mySQL
$sqli = mysqli_query($conn, "SELECT * FROM kategori");

$data = []; //buat array

//perulangan untuk mengubah data dari hasil query menjadi array
while($data = mysqli_fetch_assoc($sqli))
{ 
	$datas[] = $data;
}

//tambah kategori
if (isset($_POST['submit'])) :
	
	//form
	$namakategori = mysqli_real_escape_string($conn, $_POST['namakategori']);
	if(!empty($namakategori)) :
		$sql = mysqli_query($conn, "INSERT INTO kategori(nama_kategori) VALUES ('$namakategori')");
		header("location: daftar-kategori.php");
	
	else : ?>
		<script>
		function myFunction() {
		  	alert("Data Gagal Ditambahkan!");
		}
		</script>
	<?php endif;
endif
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
	    <div class="col-sm-10 float-left ml-5 mt-2">
	    	<div class="bg-white rounded shadow p-4">
	    		<h3>Daftar Kategori</h3>
				<table class="table table-striped">
				 	<thead class="thead-light">
				    	<tr>
				      		<th>No</th>
					      	<th>ID Kategori</th>
					      	<th>Nama Kategori</th>
					      	<th>Action</th>
				    	</tr>
				  	</thead>
				  	<?php if ($datas) : ?>
					  	<?php $i=1; foreach ($datas as $key): ?> 
						  	<tbody>
						    	<tr>
						      		<td><?php echo $i ?></td>
						      		<td><?php echo $key['id_kategori'] ?></td>
						      		<td><?php echo htmlspecialchars($key['nama_kategori']) ?></td>
						      		<td>
						      			<a href="edit-kategori.php?id_kategori=<?php echo $key['id_kategori'] ?>">
						      				<i class="fas fa-pen float-left text-success"></i>
						      			</a>
						     		</td>
						    	</tr>
						 	</tbody>
					 	<?php $i++; endforeach ?>
					 <?php endif ?>
				</table>
	    	</div>
	    	<div class="bg-white rounded shadow p-4 mt-5">
	    		<h4>Tambah Kategori</h4>
	    		<form method="POST">
	    			<div class="input-group mb-3">
					  	<input name="namakategori" type="text" class="form-control" placeholder="Kategori" aria-describedby="button-addon2">
					  	<div class="input-group-append">
					    	<button onclick="myFunction()" class="btn btn-outline-secondary" type="submit" id="button-addon2" name="submit">Submit</button>
					  	</div>
					</div>
	    		</form>
				
	    	</div>	    	
	    </div>
  	</div>
</body>
</html>