<?php 

require_once("../../conexion.php");
	
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = $_POST['imagen'];


$sql = "UPDATE contenido SET
 	 		titulo='$titulo',
 	 		descripcion='$descripcion',
 	 		id_img_page ='$imagen'
 	 		
 	 		WHERE id='$id'";

 mysqli_query($conn,$sql) or die (mysqli_error($conn));

 ?>