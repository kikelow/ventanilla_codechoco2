<?php 

$conn = mysqli_connect('localhost','root','Harinson.31461197');

if (!$conn) {
	die('No se pudo conectar : '.mysqli_error());
}
else{
	 mysqli_select_db($conn,'vev_codechoco_2017');
	$tildes = $conn->query("SET NAMES 'utf8'");
}
 ?>