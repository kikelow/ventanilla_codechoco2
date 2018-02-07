<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$t_tierra = $_POST['tierra'];

$desc_tierra = array_values(array_filter($_POST['desc_t']));
var_dump($desc_tierra);
	for ($i=0; $i <sizeof($desc_tierra); $i++) {
	
			$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`) VALUES('$empresa','".$t_tierra[$i]."','".$desc_tierra[$i]."')";
				// mysqli_query($conn,$s) or die(mysqli_error($conn));
		}
?>