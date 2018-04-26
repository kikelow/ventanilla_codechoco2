<?php 

require_once("../../conexion.php");
	
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$persona_id = $_POST['persona_id'];
//$fecha_publicacion = $_POST['fecha_publicacion_nt'];
// $fuente_autor = $_POST['autor'];
// $imagen = $_POST['imagen'];


$sql = "UPDATE login SET
 	 		usuario='$usuario',
 	 		clave='$clave',
 	 		persona_id = '$persona_id'
 	 	
 	 		
 	 		WHERE id='$id'";

 mysqli_query($conn,$sql) or die (mysqli_error($conn));

 ?>