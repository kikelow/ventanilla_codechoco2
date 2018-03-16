<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];

if (isset($empresa)) {
//registrar datos en la tabla tenencia_tierra
$t_tierra_check = $_POST['tierra'];
$t_tierra_confirmacion = $_POST['tierra_hidden'];
$desc_tierra = $_POST['desc_t'];
$resultadom_nochequeado = array_values(array_diff($t_tierra_confirmacion,$t_tierra_check));

	for ($i=0; $i <sizeof($t_tierra_confirmacion); $i++) {
		if ($t_tierra_check[$i]) {
			$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`, `confirmacion`) VALUES('$empresa','".$t_tierra_check[$i]."','".$desc_tierra[$i]."','si')";
				// mysqli_query($conn,$s);
		}
		else if (!$t_tierra_check) {
			$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`, `confirmacion`) VALUES('$empresa','".$t_tierra_confirmacion[$i]."','','no')";
				// mysqli_query($conn,$s);
		}		
	}
	for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
		if ($resultadom_nochequeado[$i]) {
			$s="INSERT INTO `tenencia_tierra`( `empresa_id`, `opciones_id`, `descripcion`, `confirmacion`) VALUES('$empresa','".$resultadom_nochequeado[$i]."','','no')";
				// mysqli_query($conn,$s);
		}	
	}
//registrar datos de otros tenencia de tierra
$s="INSERT INTO `otro_tenencia_tierra`(`empresa_id`, `nombre`, `descripcion`) VALUES('$empresa','$_POST[otro_tierra_nom]','$_POST[otro_tierra_desc]')";
// mysqli_query($conn,$s);
	
//---------------------------------------------------------------------------------------------------------


// registar datos en la tabla registro
	$s = "INSERT INTO `registro`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','18','$_POST[invima_a_na]','$_POST[invima_c_nc]','$_POST[invima_vigencia]','$_POST[invima_obs]'),
	('$empresa','19','$_POST[ica_a_na]','$_POST[ica_c_nc]','$_POST[ica_vigencia]','$_POST[ica_obs]'),
	('$empresa','20','$_POST[turismo_a_na]','$_POST[turismo_c_nc]','$_POST[turismo_vigencia]','$_POST[turismo_obs]' ),
	('$empresa','21','$_POST[forestal_a_na]','$_POST[forestal_c_nc]','$_POST[forestal_vigencia]','$_POST[forestal_obs]')";
	// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//registrar datos en la tabla permiso
	$s = "INSERT INTO `permiso`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','22','$_POST[aprovechamiento_a_na]','$_POST[aprovechamiento_c_nc]','$_POST[aprovechamiento_vigencia]','$_POST[aprovechamiento_obs]'),
	('$empresa','23','$_POST[aguas_a_na]','$_POST[aguas_c_nc]','$_POST[aguas_vigencia]','$_POST[aguas_obs]'),
	('$empresa','24','$_POST[emiciones_a_na]','$_POST[emiciones_c_nc]','$_POST[emiciones_vigencia]','$_POST[emiciones_obs]'),
	('$empresa','25','$_POST[arboles_a_na]','$_POST[arboles_c_nc]','$_POST[arboles_vigencia]','$_POST[arboles_obs]'),
	('$empresa','26','$_POST[movilizacion_a_na]','$_POST[movilizacion_c_nc]','$_POST[movilizacion_vigencia]','$_POST[movilizacion_obs]')";
	// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Registrar datos en la tabla licencia
	$s = "INSERT INTO `licencia`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES 
	('$empresa','27','$_POST[ambiental_a_na]','$_POST[ambiental_c_nc]','$_POST[ambiental_vigencia]','$_POST[ambiental_obs]')";
	// mysqli_query($conn,$s);
//--------------------------------------------------------------------------------------------------------- 

//Registrar datos en la tabla otros legislacion 
	$s= "INSERT INTO `otros_legislacion`(`empresa_id`, `nombre`, `cumple_nocumple_id`, `observacion`) VALUES ('$empresa','$_POST[otro_legislacion]','$_POST[otro_legislacion_c_nc]','$_POST[otros_legislacion_obs]')";
	// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//registrar datos en la tabla de certificacion
$certificacion= $_POST['certificacion'];
$certificacion_hidden= $_POST['certificacion_hidden'];
$cert_etapa = $_POST['cert_etapa'];
$cert_vigencia = $_POST['cert_vigencia'];
$cert_obs = $_POST['cert_obs'];
$resultadom_nochequeado = array_values(array_diff($certificacion_hidden,$certificacion));

for ($i=0; $i <sizeof($certificacion_hidden); $i++) {
	if ($certificacion[$i]) {
$s="INSERT INTO `certificacion`(`empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`,`confirmacion`) VALUES('$empresa','".$certificacion[$i]."','".$cert_etapa[$i]."','".$cert_vigencia[$i]."','".$cert_obs[$i]."','si')";
	// mysqli_query($conn,$s) ;
	}else if (!$certificacion) {
		$s="INSERT INTO `certificacion`(`empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`,`confirmacion`) VALUES('$empresa','".$certificacion_hidden[$i]."','1','','','no')";
	// mysqli_query($conn,$s);

	}
}
for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
		if ($resultadom_nochequeado[$i]) {
			$s="INSERT INTO `certificacion`(`empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`,`confirmacion`) VALUES('$empresa','".$resultadom_nochequeado[$i]."','1','','','no')";
	// mysqli_query($conn,$s);

		}	
	}
//registrar datos de otros certificacion
$s="INSERT INTO `otros_certificacion`(`empresa_id`, `nombre`, `etapa_id`, `vigencia`, `observacion`) VALUES('$empresa','$_POST[otro_certificacion]','$_POST[otro_cert_etapa]','$_POST[otro_cert_vigencia]','$_POST[otro_cert_obs]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//resgistrar datos en la tabla conservacion
$conservacion = $_POST['conservacion'];
$conservacion_hidden = $_POST['conservacion_hidden'];
$conser_area = $_POST['conser_area'];
$conser_desc = $_POST['conser_desc'];
$resultadom_nochequeado = array_values(array_diff($conservacion_hidden,$conservacion));
for ($i=0; $i <sizeof($conservacion_hidden); $i++) {
	if ($conservacion[$i]) {
	$s="INSERT INTO `conservacion`(`empresa_id`, `opciones_id`, `area`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$conservacion[$i]."','".$conser_area[$i]."','".$conser_desc[$i]."','si')";
	// mysqli_query($conn,$s);
	}else if (!$conservacion) {
		$s="INSERT INTO `conservacion`(`empresa_id`, `opciones_id`, `area`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$conservacion_hidden[$i]."','','','no')";
	// mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
	if ($resultadom_nochequeado[$i]) {
	$s="INSERT INTO `conservacion`(`empresa_id`, `opciones_id`, `area`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$resultadom_nochequeado[$i]."','','','no')";
	// mysqli_query($conn,$s);
	}
}

//registrar datos de otros conservacion
$s="INSERT INTO `otros_conservacion`(`empresa_id`, `nombre`, `area`, `descripcion`) VALUES('$empresa','$_POST[otro_conservacion_nom]','$_POST[otro_conservacion_area]','$_POST[otro_conservacion_desc]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------
//registrar datos en la tabla ecosistemas 
$ecosistemas = $_POST['ecosistemas'];
$ecosistemas_hidden = $_POST['ecosistemas_hidden'];
$ecosistemas_area = $_POST['ecosistemas_area'];

$ecosistema_nochequeado = array_values(array_diff($ecosistemas_hidden, $ecosistemas));
for ($i=0; $i <sizeof($ecosistemas_hidden); $i++) {
	if ($ecosistemas[$i]) {
		$s="INSERT INTO `ecosistema`(`empresa_id`, `opciones_id`, `area`,`confirmacion`) VALUES ('$empresa','".$ecosistemas[$i]."','".$ecosistemas_area[$i]."','si')";
		// mysqli_query($conn,$s);
	}else if (!$ecosistemas) {
		$s="INSERT INTO `ecosistema`(`empresa_id`, `opciones_id`, `area`,`confirmacion`) VALUES ('$empresa','".$ecosistemas_hidden[$i]."','','no')";
		// mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($ecosistemas_hidden); $i++) {
	if ($ecosistema_nochequeado[$i]) {
		$s="INSERT INTO `ecosistema`(`empresa_id`, `opciones_id`, `area`,`confirmacion`) VALUES ('$empresa','".$ecosistema_nochequeado[$i]."','','no')";
		// mysqli_query($conn,$s);
	}
}
//registrar datos de otros ecosistemas
$s="INSERT INTO `otros_ecosistema`(`empresa_id`, `nombre`, `area`) VALUES('$empresa','$_POST[otro_ecosistema_nom]','$_POST[otro_ecosistema_area]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------
//registrar datos en la tabla plan_manejo
$plan = $_POST['plan'];
$plan_hidden = $_POST['plan_hidden'];
$plan_a_na = $_POST['plan_a_na'];
$plan_c_nc = $_POST['plan_c_nc'];
$plan_vigencia = $_POST['plan_vigencia'];
$plan_desc = $_POST['plan_desc'];
$plan_nochequeado = array_values(array_diff($plan_hidden, $plan));
for ($i=0; $i <sizeof($plan_hidden); $i++) {
	if ($plan[$i]) {
		$s="INSERT INTO `plan_manejo`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`,`confirmacion`) VALUES ('$empresa','".$plan[$i]."','".$plan_a_na[$i]."','".$plan_c_nc[$i]."','".$plan_vigencia[$i]."','".$plan_desc[$i]."','si')";
// mysqli_query($conn,$s);
	}else if (!$plan) {
	$s="INSERT INTO `plan_manejo`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`,`confirmacion`) VALUES ('$empresa','".$plan_hidden[$i]."','2','2','','','no')";
// mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($plan_nochequeado); $i++) {
	if ($plan_nochequeado[$i]) {
		$s="INSERT INTO `plan_manejo`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`,`confirmacion`) VALUES ('$empresa','".$plan_nochequeado[$i]."','2','2','','','no')";
// mysqli_query($conn,$s);
	}
}
//---------------------------------------------------------------------------------------------------------
//registrar datos en la tabla involucra 
$involucra = $_POST['involucra'];
$involucra_hidden = $_POST['involucra_hidden'];

$involucra_chequeado = array_intersect($involucra_hidden, $involucra);
$involucra_nochequeado = array_diff($involucra_hidden, $involucra);
for ($i=0; $i <sizeof($involucra_hidden); $i++) {
	if ($involucra_nochequeado[$i]) {
		$s="INSERT INTO `involucra`(`empresa_id`, `opciones_id`,`confirmacion`) VALUES ('$empresa','".$involucra_nochequeado[$i]."','no')";
// mysqli_query($conn,$s);
	}else if ($involucra_chequeado[$i]) {
		$s="INSERT INTO `involucra`(`empresa_id`, `opciones_id`,`confirmacion`) VALUES ('$empresa','".$involucra_chequeado[$i]."','si')";
// mysqli_query($conn,$s);
	}else if (!$involucra) {
		$s="INSERT INTO `involucra`(`empresa_id`, `opciones_id`,`confirmacion`) VALUES ('$empresa','".$involucra_hidden[$i]."','no')";
// mysqli_query($conn,$s);
	}
}
//registrar datos de otros involucra
$s="INSERT INTO `otro_involucra`(`empresa_id`, `nombre`) VALUES('$empresa','$_POST[otro_involucra_nom]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//registrar datos en la tabla actividades 
$actividad = $_POST['actividad'];
$actividad_hidden = $_POST['actividad_hidden'];
$actividad_desc = $_POST['actividad_desc'];
$actividad_recurso = $_POST['actividad_recurso'];

$actividad_nochequeado = array_values(array_diff($actividad_hidden, $actividad));
for ($i=0; $i <sizeof($actividad_hidden); $i++) {
	if ($actividad[$i]) {
		$s="INSERT INTO `actividades`(`empresa_id`, `opciones_id`, `recurso_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$actividad[$i]."','".$actividad_recurso[$i]."','".$actividad_desc[$i]."','si')";
// mysqli_query($conn,$s);
	}else if (!$actividad) {
		$s="INSERT INTO `actividades`(`empresa_id`, `opciones_id`, `recurso_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$actividad_hidden[$i]."','1','','no')";
// mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($actividad_nochequeado); $i++) {
	if ($actividad_nochequeado[$i]) {
		$s="INSERT INTO `actividades`(`empresa_id`, `opciones_id`, `recurso_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$actividad_nochequeado[$i]."','1','','no')";
// mysqli_query($conn,$s);
	}
}
//registrar datos de otros actividades
$s="INSERT INTO `otro_actividades`(`empresa_id`, `nombre`, `descripcion`, `recurso_id`) VALUES('$empresa','$_POST[otro_activi_nom]','$_POST[otro_activi_desc]','$_POST[otro_activi_recurso]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------
//registrar datos en la tabla programa 
$programa = $_POST['programa'];
$programa_hidden = $_POST['programa_hidden'];
$programa_desc = $_POST['programa_desc'];
$programa_nochequeado = array_values(array_diff($programa_hidden, $programa));
for ($i=0; $i <sizeof($programa_hidden); $i++) {
	if ($programa[$i]) {
		$s="INSERT INTO `programa`(`empresa_id`, `opciones_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$programa[$i]."','".$programa_desc[$i]."','si')";
// mysqli_query($conn,$s);
	}else if (!$programa) {
		$s="INSERT INTO `programa`(`empresa_id`, `opciones_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$programa_hidden[$i]."','','no')";
// mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($programa_nochequeado); $i++) {
	$s="INSERT INTO `programa`(`empresa_id`, `opciones_id`, `descripcion`,`confirmacion`) VALUES ('$empresa','".$programa_nochequeado[$i]."','','no')";
// mysqli_query($conn,$s);
}
//registrar datos de otros programa
$s="INSERT INTO `otro_programa`(`empresa_id`, `nombre`, `descripcion`) VALUES('$empresa','$_POST[otro_programa_nom]','$_POST[otro_programa_desc]')";
// mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//registrar datos en la tabla institucion 
$apoyo = $_POST['apoyo'];
$apoyo_entidad = $_POST['apoyo_entidad'];
$apoyo_tipo_entidad = $_POST['apoyo_tipo_entidad'];
$año = $_POST['año'];

for ($i=0; $i <sizeof($apoyo); $i++) {
$s="INSERT INTO `institucion`(`empresa_id`, `apoyo`, `entidad`, `orientacion_id`, `año`) VALUES ('$empresa','".$apoyo[$i]."','".$apoyo_entidad[$i]."','".$apoyo_tipo_entidad[$i]."','".$año[$i]."')";
// mysqli_query($conn,$s);
}
//---------------------------------------------------------------------------------------------------------
//registrar datos en la tabla sost_economica 
$bien = $_POST['bien'];
$unidad_v_anual = $_POST['unidad_v_anual'];
$unidad_medida = $_POST['unidad_medida'];
// $espe_unidad = $_POST['espe_unidad'];
$costo_pro_unidad = $_POST['costo_pro_unidad'];
$precio_v_unitario = $_POST['precio_v_unitario'];
$ganancia_unidad = $_POST['ganancia_unidad'];
$venta_anual = $_POST['venta_anual'];
$ingresos_sup_costo = $_POST['ingresos_sup_costo'];

for ($i=0; $i <sizeof($bien); $i++) {
$s="INSERT INTO `sost_economica`(`empresa_id`, `bien_servicio`, `vendida_anual`, `unidad_medida_id`,`costo_produccion`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `si_no_id`) VALUES ('$empresa','".$bien[$i]."','".$unidad_v_anual[$i]."','".$unidad_medida[$i]."','".$costo_pro_unidad[$i]."','".$precio_v_unitario[$i]."','".$ganancia_unidad[$i]."','".$venta_anual[$i]."','".$ingresos_sup_costo[$i]."')";
// mysqli_query($conn,$s);
}
//---------------------------------------------------------------------------------------------------------
//registrar datos de insumos totales
$s="INSERT INTO `costo_insumos`(`empresa_id`, `semanal`, `mensual`, `anual`) VALUES('$empresa','$_POST[insumo_semanal]','$_POST[insumo_mensual]','$_POST[insumo_anual]')";
// mysqli_query($conn,$s);
//registrar datos de mano de obra total
$s="INSERT INTO `costo_mano_obra`(`empresa_id`, `semanal`, `mensual`, `anual`) VALUES('$empresa','$_POST[obra_semanal]','$_POST[obra_mensual]','$_POST[obra_anual]')";
// mysqli_query($conn,$s);
//registrar datos de ventas realizadas
$s="INSERT INTO `total_ventas`(`empresa_id`, `valor`, `anio`) VALUES('$empresa','$_POST[venta_valor]','$_POST[venta_anio]')";
// mysqli_query($conn,$s);

$s="UPDATE `empresa` SET `informacion_as`='si' WHERE id = '$empresa'";
// mysqli_query($conn,$s);

}



?>