<?php 

$conn = mysqli_connect('localhost','root','');

if (!$conn) {
	die('No se pudo conectar : '.mysqli_error());
}
else{

	 mysqli_select_db($conn,'vev_codechoco_2017');
	 // mysqli_select_db($conn,'codechoc_ventanilla');
	$tildes = $conn->query("SET NAMES 'utf8'");
}
 ?>