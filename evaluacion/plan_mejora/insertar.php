<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];

// $mejora_opcion = $_POST['mejora_opcion'];
// $verifica1_si_no = $_POST['verifica1_si_no'];
// $verificacion1_obs = $_POST['verificacion1_obs'];
// $verificacion1_veri = $_POST['verificacion1_veri'];
// var_dump($verifica1_si_no);
if (isset($empresa)) {
//registrar datos en la tabla Verificacion1
	for ($i=0; $i <sizeof($_POST['mejora_opcion']); $i++) {
		
		$s="INSERT INTO `plan_mejora`(`empresa_id`, `opciones_id`, `acciones`, `actor`, `resultado`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `observacion`) VALUES('$empresa','".$_POST['mejora_opcion'][$i]."','".$_POST['accion'][$i]."','".$_POST['actor'][$i]."','".$_POST['resultado'][$i]."','".$_POST['uno'][$i]."','".$_POST['dos'][$i]."','".$_POST['tres'][$i]."','".$_POST['cuatro'][$i]."','".$_POST['cinco'][$i]."','".$_POST['seis'][$i]."','".$_POST['siete'][$i]."','".$_POST['ocho'][$i]."','".$_POST['nueve'][$i]."','".$_POST['diez'][$i]."','".$_POST['once'][$i]."','".$_POST['doce'][$i]."','".$_POST['observacion'][$i]."')";
		mysqli_query($conn,$s);
		var_dump($s);
	}
	$s="UPDATE `empresa` SET `plan_mejora`='si' WHERE id = '$empresa'";
	mysqli_query($conn,$s);
}
?>