<?php 

require_once("../../conexion.php");
	
$id = $_POST['id'];
$titulo = $_POST['titulo'];

$descripcion = $_POST['descripcion'];


$sql = "UPDATE contenido SET
 	 		titulo='$titulo',
 	 		
 	 		descripcion='$descripcion'
 	 		
 	 		WHERE id='$id'";

 mysqli_query($conn,$sql) or die (mysqli_error($conn));

 ?>
