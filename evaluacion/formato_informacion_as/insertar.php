<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];
$t_tierra = $_POST['tierra'];
$desc_tierra = $_POST['desc_t'];

if (isset($empresa)) {
//registrar datos en la tabla tenencia_tierra
	for ($i=0; $i <sizeof($desc_tierra); $i++) {
	
			$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`) VALUES('$empresa','".$t_tierra[$i]."','".$desc_tierra[$i]."')";
				// mysqli_query($conn,$s);
		}

// registar datos en la tabla registro
	$s = "INSERT INTO `registro`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','18','$_POST[invima_a_na]','$_POST[invima_c_nc]','$_POST[invima_vigencia]','$_POST[invima_obs]'),
	('$empresa','19','$_POST[ica_a_na]','$_POST[ica_c_nc]','$_POST[ica_vigencia]','$_POST[ica_obs]'),
	('$empresa','20','$_POST[turismo_a_na]','$_POST[turismo_c_nc]','$_POST[turismo_vigencia]','$_POST[turismo_obs]' ),
	('$empresa','21','$_POST[forestal_a_na]','$_POST[forestal_c_nc]','$_POST[forestal_vigencia]','$_POST[forestal_obs]')";
	// mysqli_query($conn,$s);

//registrar datos en la tabla permiso
	$s = "INSERT INTO `permiso`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','22','$_POST[aprovechamiento_a_na]','$_POST[aprovechamiento_c_nc]','$_POST[aprovechamiento_vigencia]','$_POST[aprovechamiento_obs]'),
	('$empresa','23','$_POST[aguas_a_na]','$_POST[aguas_c_nc]','$_POST[aguas_vigencia]','$_POST[aguas_obs]'),
	('$empresa','24','$_POST[emiciones_a_na]','$_POST[emiciones_c_nc]','$_POST[emiciones_vigencia]','$_POST[emiciones_obs]'),
	('$empresa','25','$_POST[arboles_a_na]','$_POST[arboles_c_nc]','$_POST[arboles_vigencia]','$_POST[arboles_obs]'),
	('$empresa','26','$_POST[movilizacion_a_na]','$_POST[movilizacion_c_nc]','$_POST[movilizacion_vigencia]','$_POST[movilizacion_obs]')";
	// mysqli_query($conn,$s);

//Registrar datos en la tabla licencia
	$s = "INSERT INTO `licencia`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','27','$_POST[ambiental_a_na]','$_POST[ambiental_c_nc]','$_POST[ambiental_vigencia]','$_POST[ambiental_obs]'),
	('$empresa','28','$_POST[otros_a_na]','$_POST[otros_c_nc]','$_POST[otros_vigencia]','$_POST[otros_obs]')";
	// mysqli_query($conn,$s);

	echo($s);
}

?>