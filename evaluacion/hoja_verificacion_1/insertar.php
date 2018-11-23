<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$preguntas = $_POST['preguntas'];
$verifica1_si_no = $_POST['verifica1_si_no'];
$cumplimiento = $_POST['cumplimiento'];
$vigencia = $_POST['vigencia'];
$nombre_certificacion = $_POST['nombre_certificacion'];
$medio = $_POST['medio1'];

if (isset($empresa)) {
//registrar datos en la tabla Verificacion1
	for ($i=0; $i <sizeof($preguntas); $i++) {
		
	$s="INSERT INTO `hoja_verificacion_1` VALUES(null,'$empresa','$preguntas[$i]','$verifica1_si_no[$i]','$cumplimiento[$i]','$vigencia[$i]','$nombre_certificacion[$i]','','$medio[$i]')";
		// mysqli_query($conn,$s) or die(mysqli_error($conn));
	}

//_____________________________________________________________________

$preguntas2 = $_POST['preguntas2'];
$verifica1_si_no2 = $_POST['verifica1_si_no2'];
$descripcion2 = $_POST['descripcion2'];
$medio2 = $_POST['medio2'];

	for ($i=0; $i <sizeof($preguntas2); $i++) {
		
	$s="INSERT INTO `hoja_verificacion_1` VALUES(null,'$empresa','$preguntas2[$i]','$verifica1_si_no2[$i]','0','','','$descripcion2[$i]','$medio2[$i]')";
		// mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
//_____________________________________________________________________
$preguntas3 = $_POST['preguntas3'];
$verifica1_si_no3 = $_POST['verifica1_si_no3'];
$descripcion3 = $_POST['descripcion3'];
$medio3 = $_POST['medio3'];

	for ($i=0; $i <sizeof($preguntas3); $i++) {
		
	$s="INSERT INTO `hoja_verificacion_1` VALUES(null,'$empresa','$preguntas3[$i]','$verifica1_si_no3[$i]','0','','','$descripcion3[$i]','$medio3[$i]')";
	// echo $s;
		// mysqli_query($conn,$s) or die(mysqli_error($conn));

	}

//________________________________________________________________________

$preguntas4 = $_POST['preguntas4'];
$verifica1_si_no4 = $_POST['verifica1_si_no4'];
$verifica1_cumple4 = $_POST['verifica1_cumple4'];
$descripcion4 = $_POST['descripcion4'];
$medio4 = $_POST['medio4'];

	for ($i=0; $i <sizeof($preguntas4); $i++) {
		
	$s="INSERT INTO `hoja_verificacion_1` VALUES(null,'$empresa','$preguntas4[$i]','$verifica1_si_no4[$i]','$verifica1_cumple4[$i]','','','$descripcion4[$i]','$medio4[$i]')";
	// echo $s;
		// mysqli_query($conn,$s) or die(mysqli_error($conn));

	}
	// $s="UPDATE `empresa` SET `verificacion1`='si' WHERE id = '$empresa'";
	// mysqli_query($conn,$s);
}
?>