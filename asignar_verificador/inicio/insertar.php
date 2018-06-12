<?php 
include "../../conexion.php";
// $emprendimiento = $_POST['emprendimiento'];
// echo ($emprendimiento);

date_default_timezone_set('America/Bogota');
		$fecha_asignacion = date("Y-m-d H:i:s");

// Inserto los datos del verificador
	 $s="INSERT INTO `verificadorxempresa`(`empresa_id`, `persona_id`, `fecha_asignacion`, `fecha_retiro`) VALUES ('$_POST[emprendimiento]','$_POST[verificador]','$fecha_asignacion','')";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
	// echo $s;

 ?>