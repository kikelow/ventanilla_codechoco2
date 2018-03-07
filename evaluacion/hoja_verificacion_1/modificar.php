<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$opcion = $_POST['opcion_m'];
$si_no_noaplica = $_POST['verifica1_si_no_m'];
$observacion = $_POST['verificacion1_obs_m'];
$verificacion = $_POST['verificacion1_veri_m'];
// var_dump($opcion);

if (isset($empresa)) {
//registrar datos en la tabla Verificacion1
	for ($i=0; $i <sizeof($opcion); $i++) {
	
			$s="UPDATE `verificacion_1` SET 
			`si_no_noaplica_id`= '$si_no_noaplica[$i]',
			`observacion`= '$observacion[$i]',
			`verificacion`='$verificacion[$i]'  WHERE opciones_id ='".$opcion[$i]."' ";
				mysqli_query($conn,$s) or die(mysqli_error($conn));
		}
}
?>