<?php 

require_once("../../conexion.php");
	
$id_slide = $_POST['id_slide'];
$titulo_slide = $_POST['titulo_slide'];
$descripcion_slide = $_POST['descripcion_slide'];
//$fecha_publicacion = $_POST['fecha_publicacion_nt']
$img_slide = $_POST['img_slide'];


$sql = "UPDATE slide SET
 	 		titulo='$titulo_slide',
 	 		descripcion='$descripcion_slide',
 	 		id_img_page ='$img_slide'
 	 		
 	 		WHERE id='$id_slide'";

 mysqli_query($conn,$sql) or die (mysqli_error($conn));

 ?>