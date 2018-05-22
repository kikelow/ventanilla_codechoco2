<?php 
include "../../conexion.php";

	$empresa = $_POST['empresa_id'];
	$verificador = $_POST['verificador_id'];
	$id_tabla = $_POST['id_tabla'];

	$s="UPDATE `verificadorxempresa` SET 
	`empresa_id` = '$empresa',
	`persona_id`='$verificador' WHERE id ='$id_tabla'";
	mysqli_query($conn,$s) or die(mysqli_error($conn));

 ?>