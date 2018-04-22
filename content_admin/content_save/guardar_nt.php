<?php 
date_default_timezone_set('America/Bogota');
include '../../conexion.php';


$titulo = $_POST['titulo_nt'];
$descripcion = $_POST['descripcion_nt'];
$fuente_autor = $_POST['autor_nt'];
$imagen = $_POST['imagen_nt'];
$fecha_p = date("Y-m-d H:i:s");
//$img = $_POST['img'];


if ($titulo != "" && $descripcion != "" && $fuente_autor != "" && $imagen != "") {
	
	$s = "INSERT INTO noticia values (null,'$titulo','$descripcion','$fecha_p','$fuente_autor','$imagen')";
	$guardar = mysqli_query($conn,$s) or die (mysqli_error($conn));

	
	echo $guardar;

	if ($guardar) {
		
		echo "datos guardados";
	}

}else{

	echo "Campos vacios";
}

?>
