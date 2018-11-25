<?php 
include "../../../conexion.php";
$empresa = $_GET['empresa'];
$preguntas = $_POST['preguntas'];
$verifica1_si_no = $_POST['verifica1_si_no'];
$cumplimiento = $_POST['cumplimiento'];
$vigencia = $_POST['vigencia'];
$nombre_certificacion = $_POST['nombre_certificacion'];
$medio = $_POST['medio1'];

if ($_GET['empresa']) {
	for ($i=0; $i <sizeof($preguntas); $i++) {
		$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no[$i]',
		`cumplimiento_id`='$cumplimiento[$i]',
		`vigencia`='$vigencia[$i]',
		`nombre_certificacion`='$nombre_certificacion[$i]',
		`medio_verificacion`='$medio[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
//_____________________________________________________________________

$preguntas2 = $_POST['preguntas2'];
$verifica1_si_no2 = $_POST['verifica1_si_no2'];
$descripcion2 = $_POST['descripcion2'];
$medio2 = $_POST['medio2'];

	for ($i=0; $i <sizeof($preguntas2); $i++) {
		
		$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no2[$i]',
		`descripcion`='$descripcion2[$i]',
		`medio_verificacion`='$medio2[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas2[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));

	}
//_____________________________________________________________________

$preguntas3 = $_POST['preguntas3'];
$verifica1_si_no3 = $_POST['verifica1_si_no3'];
$descripcion3 = $_POST['descripcion3'];
$medio3 = $_POST['medio3'];

	for ($i=0; $i <sizeof($preguntas3); $i++) {
		
	$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no3[$i]',
		`descripcion`='$descripcion3[$i]',
		`medio_verificacion`='$medio3[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas3[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));

	}
//_____________________________________________________________________

$preguntas4 = $_POST['preguntas4'];
$verifica1_si_no4 = $_POST['verifica1_si_no4'];
$verifica1_cumple4 = $_POST['verifica1_cumple4'];
$descripcion4 = $_POST['descripcion4'];
$medio4 = $_POST['medio4'];

	for ($i=0; $i <sizeof($preguntas4); $i++) {
	$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no4[$i]',
		`cumplimiento_id`='$verifica1_cumple4[$i]',
		`descripcion`='$descripcion4[$i]',
		`medio_verificacion`='$medio4[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas4[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
//_____________________________________________________________________

$preguntas5 = $_POST['preguntas5'];
$verifica1_si_no5 = $_POST['verifica1_si_no5'];
$descripcion5 = $_POST['descripcion5'];
$medio5 = $_POST['medio5'];

	for ($i=0; $i <sizeof($preguntas5); $i++) {
	$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no5[$i]',
		`descripcion`='$descripcion5[$i]',
		`medio_verificacion`='$medio5[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas5[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
//_____________________________________________________________________
$preguntas6 = $_POST['preguntas6'];
$verifica1_si_no6 = $_POST['verifica1_si_no6'];
$descripcion6 = $_POST['descripcion6'];
$medio6 = $_POST['medio6'];

	for ($i=0; $i <sizeof($preguntas6); $i++) {
	$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no6[$i]',
		`descripcion`='$descripcion6[$i]',
		`medio_verificacion`='$medio6[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas6[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
//_____________________________________________________________________
$preguntas7 = $_POST['preguntas7'];
$verifica1_si_no7 = $_POST['verifica1_si_no7'];
$descripcion7 = $_POST['descripcion7'];
$medio7 = $_POST['medio7'];

	for ($i=0; $i <sizeof($preguntas7); $i++) {
	$s = "UPDATE `hoja_verificacion_1` SET 
		`respuesta_id`='$verifica1_si_no7[$i]',
		`descripcion`='$descripcion7[$i]',
		`medio_verificacion`='$medio7[$i]' 
		WHERE empresa_id = '$empresa' AND pregunta_id = '$preguntas7[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
