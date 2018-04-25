<?php 
require_once("../../conexion.php");
$id = $_POST['id'];
$sql = "DELETE FROM noticia WHERE id='$id'";
 	 	$r=mysqli_query($conn,$sql)or die(mysqli_error($conn));
?>