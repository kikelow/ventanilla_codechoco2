<?php 
date_default_timezone_set('America/Bogota');
include '../../conexion.php';


$titulo_slide = $_POST['titulo_slide'];
$descripcion_slide = $_POST['descripcion_slide'];
$imagen_slide = $_POST['img_slide'];

//$img = $_POST['img'];

if ($titulo_slide != "" && $descripcion_slide != "" && $imagen_slide != "") {
	
	$s = "INSERT INTO slide values (null,'$titulo_slide','$descripcion_slide','$imagen_slide')";
	$guardar = mysqli_query($conn,$s) or die (mysqli_error($conn));
	
	echo $guardar;

	if ($guardar) {	
		echo "datos guardados";
	}

}else{

	echo "Campos vacios";

}
?>