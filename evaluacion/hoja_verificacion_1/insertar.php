<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$opcion = $_POST['opcion'];
$verifica1_si_no = $_POST['verifica1_si_no'];
$verificacion1_obs = $_POST['verificacion1_obs'];
$verificacion1_veri = $_POST['verificacion1_veri'];
var_dump($verifica1_si_no);
if (isset($empresa)) {
//registrar datos en la tabla Verificacion1
	for ($i=0; $i <sizeof($opcion); $i++) {
	
			$s="INSERT INTO `verificacion_1`(`empresa_id`, `opciones_id`, `si_no_noaplica_id`, `observacion`, `verificacion`) VALUES('$empresa','".$opcion[$i]."','".$verifica1_si_no[$i]."','".$verificacion1_obs[$i]."','".$verificacion1_veri[$i]."')";
				mysqli_query($conn,$s);
		}
}
 ?>