<?php 
require_once("../../conexion.php");

$id = $_POST['id'];

$sd = "SELECT * from  img_page where id = $id";
$rd=mysqli_query($conn,$sd)or die(mysqli_error($conn));
$resultado = mysqli_fetch_array ($rd);

$sql = "DELETE FROM img_page WHERE id='$id'";
 	 	$r=mysqli_query($conn,$sql)or die(mysqli_error($conn));


if ($resultado['ruta'] != "") {
	
	$ru = "../content_save/img_content/". $resultado['ruta'];

	$eli = unlink($ru);

	if ($eli = true) {
		
		echo "Archivo eliminado";

	}
}
?>


<?php 
/*


$rm_file = 'jj.php';

if(file_exists($rm_file))
{
	if(!unlink($rm_file))
	{
		echo "estado=El archivo ".$rm_file ." no se pudo borrar.";
	}
	else
	{
		echo "estado=El archivo".$rm_file ." fue borrado.";
	}
}
else
{
echo "estado=El archivo".$rm_file ."NO EXISTE";
}


*/
 ?>

