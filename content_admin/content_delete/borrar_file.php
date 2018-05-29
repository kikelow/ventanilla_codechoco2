<?php 
require_once("../../conexion.php");

$id = $_POST['id'];

$sd = "SELECT * from  archivo_page where id = $id";
$rd=mysqli_query($conn,$sd)or die(mysqli_error($conn));
$resultado = mysqli_fetch_array ($rd);

$sql = "DELETE FROM archivo_page WHERE id='$id'";
 	 	$r=mysqli_query($conn,$sql)or die(mysqli_error($conn));


if ($resultado['ruta'] != "" && $r == true) {
	
	$ru = "../content_save/file_content/". $resultado['ruta'];

	$eli = unlink($ru);

	if ($eli = true) {
		
		echo "Archivo eliminado";

	}
}
?>