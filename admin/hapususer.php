<?php  
$id = $_GET['iduser'];

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_holies';

$conn = mysqli_connect($host, $user, $pass, $db);

mysqli_query($conn, "DELETE FROM user WHERE user.id_user=$id;");

header("location: lihat.php")

?>