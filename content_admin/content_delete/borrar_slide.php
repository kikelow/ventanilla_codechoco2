<?php 
require_once("../../conexion.php");

$id = $_POST['id'];

$sd = "SELECT t.id_img_page,i.ruta from slide t, img_page i WHERE t.id_img_page = i.id and t.id = '$id'";
$rd=mysqli_query($conn,$sd)or die(mysqli_error($conn));
$resultado = mysqli_fetch_array ($rd);

$id_img = $resultado['id_img_page'];
$ruta = $resultado['ruta'];


if ($id_img != "") {

	// $sd = "SELECT ruta from  img_page where id = $id";
	// $rd=mysqli_query($conn,$sd)or die(mysqli_error($conn));
	// $resultado = mysqli_fetch_array ($rd);

	$sql = "DELETE FROM slide WHERE id='$id'";
	$r=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	
	if ($r == true) {
		
		$sql = "DELETE FROM img_page WHERE id='$id_img'";
		$r=mysqli_query($conn,$sql)or die(mysqli_error($conn));

		if ($r == true) {
			
			$ru = "../content_save/img_content/". $ruta;

			$eli = unlink($ru);

			if ($eli = true) {
				
				echo "Archivo eliminado";

			}
		}

		

	}
		
}
?>