<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
echo $empresa;

$t_tierra = $_POST['tierra'];
// $desc_tierra = $_POST['desc_tierra'];
// echo(count($t_tierra));
var_dump($t_tierra);
	// for ($i=0; $i <sizeof($t_tierra); $i++) {
	
	//  	# code...
	// 	$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`) VALUES('$empresa','".$t_tierra[$i]."','".$t_tierra[$i]."')";
	// 	mysqli_query($conn,$s) or die(mysqli_error($conn));
	 
	// }

// foreach ($t_tierra  as $d){
// 	foreach ($d as $key) {
// 		var_dump($key);
// 	}

// }

?>