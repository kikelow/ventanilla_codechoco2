<?php 

require_once("../../conexion.php");
	
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
//$fecha_publicacion = $_POST['fecha_publicacion_nt'];
$fuente_autor = $_POST['autor'];
$imagen = $_POST['imagen'];


$sql = "UPDATE noticia SET
 	 		titulo='$titulo',
 	 		descripcion='$descripcion',
 	 		fuente_autor = '$fuente_autor',
 	 		id_img_page ='$imagen'
 	 		
 	 		WHERE id='$id'";

 mysqli_query($conn,$sql) or die (mysqli_error($conn));

 ?>