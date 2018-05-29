<?php 
include "../../conexion.php";

	$id = $_POST['id'];

	$s = "DELETE  FROM verificadorxempresa WHERE id = '$id'";
	mysqli_query($conn,$s);
 ?>