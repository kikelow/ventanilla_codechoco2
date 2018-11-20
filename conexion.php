<?php 

$conn = mysqli_connect('localhost','root','');

if (!$conn) {
	die('No se pudo conectar : '.mysqli_error());
}
else{
<<<<<<< HEAD
	 mysqli_select_db($conn,'vev_codechoco_2017');
=======
	 mysqli_select_db($conn,'codechoc_ventanilla');
>>>>>>> 555cfb3163182a0a5c8526fd07a907208ab338aa
	$tildes = $conn->query("SET NAMES 'utf8'");
}
 ?>