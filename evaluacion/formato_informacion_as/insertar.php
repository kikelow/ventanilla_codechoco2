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

//Registrar datos en la tabla otros legislacion 
	$s= "INSERT INTO `otros_legislacion`(`empresa_id`, `nombre`, `cumple_nocumple_id`, `observacion`) VALUES ('$empresa','$_POST[otro_legislacion]','$_POST[otro_legislacion_c_nc]','$_POST[otros_legislacion_obs]')";
	// mysqli_query($conn,$s);

//registrar datos en la tabla de certificacion
$certificacion= $_POST['certificacion'];
$cert_etapa = $_POST['cert_etapa'];
$cert_vigencia = $_POST['cert_vigencia'];
$cert_obs = $_POST['cert_obs'];

for ($i=0; $i <sizeof($certificacion); $i++) {
$s="INSERT INTO `certificacion`(`empresa_id`, `opciones_id`, `etapa_id`, `vigencia`, `observacion`) VALUES('$empresa','".$certificacion[$i]."','".$cert_etapa[$i]."','".$cert_vigencia[$i]."','".$cert_obs[$i]."')";
	//mysqli_query($conn,$s);
}
//registrar datos de otros certificacion
$s="INSERT INTO `otros_certificacion`(`empresa_id`, `nombre`, `etapa_id`, `vigencia`, `observacion`) VALUES('$empresa','$_POST[otro_certificacion]','$_POST[otro_cert_etapa]','$_POST[otro_cert_vigencia]','$_POST[otro_cert_obs]')";
// mysqli_query($conn,$s);
echo($s);
//resgistrar datos en la tabla conservacion
$conservacion = $_POST['conservacion'];
$conser_area = $_POST['conser_area'];
$conser_desc = $_POST['conser_desc'];
for ($i=0; $i <sizeof($conservacion); $i++) {
$s="INSERT INTO `conservacion`(`empresa_id`, `opciones_id`, `area`, `descripcion`) VALUES ('$empresa','".$conservacion[$i]."','".$conser_area[$i]."','".$conser_desc[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla plan_manejo
$plan = $_POST['plan'];
$plan_a_na = $_POST['plan_a_na'];
$plan_c_nc = $_POST['plan_c_nc'];
$plan_vigencia = $_POST['plan_vigencia'];
$plan_desc = $_POST['plan_desc'];

for ($i=0; $i <sizeof($plan); $i++) {
$s="INSERT INTO `plan_manejo`(`empresa_id`, `opciones_id`, `aplica_noaplica_id`, `cumple_nocumple_id`, `vigencia`, `observacion`) VALUES ('$empresa','".$plan[$i]."','".$plan_a_na[$i]."','".$plan_c_nc[$i]."','".$plan_vigencia[$i]."','".$plan_desc[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla ecosistemas 
$ecosistemas = $_POST['ecosistemas'];
$ecosistemas_area = $_POST['ecosistemas_area'];
for ($i=0; $i <sizeof($ecosistemas); $i++) {
$s="INSERT INTO `ecosistema`(`empresa_id`, `opciones_id`, `area`) VALUES ('$empresa','".$ecosistemas[$i]."','".$ecosistemas_area[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla involucra 
$involucra = $_POST['involucra'];
for ($i=0; $i <sizeof($involucra); $i++) {
$s="INSERT INTO `involucra`(`empresa_id`, `opciones_id`) VALUES ('$empresa','".$involucra[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla actividades 
$actividad = $_POST['actividad'];
$actividad_desc = $_POST['actividad_desc'];
$actividad_recurso = $_POST['actividad_recurso'];
for ($i=0; $i <sizeof($actividad); $i++) {
$s="INSERT INTO `actividades`(`empresa_id`, `opciones_id`, `recurso_id`, `descripcion`) VALUES ('$empresa','".$actividad[$i]."','".$actividad_recurso[$i]."','".$actividad_desc[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla programa 
$programa = $_POST['programa'];
$programa_desc = $_POST['programa_desc'];

for ($i=0; $i <sizeof($programa); $i++) {
$s="INSERT INTO `programa`(`empresa_id`, `opciones_id`, `descripcion`) VALUES ('$empresa','".$programa[$i]."','".$programa_desc[$i]."')";
// mysqli_query($conn,$s);

}

//registrar datos en la tabla institucion 
$apoyo = $_POST['apoyo'];
$apoyo_entidad = $_POST['apoyo_entidad'];
$apoyo_tipo_entidad = $_POST['apoyo_tipo_entidad'];
$año = $_POST['año'];

for ($i=0; $i <sizeof($apoyo); $i++) {
$s="INSERT INTO `institucion`(`empresa_id`, `apoyo`, `entidad`, `orientacion_id`, `año`) VALUES ('$empresa','".$apoyo[$i]."','".$apoyo_entidad[$i]."','".$apoyo_tipo_entidad[$i]."','".$año[$i]."')";
// mysqli_query($conn,$s);
}

//registrar datos en la tabla sost_economica 
$bien = $_POST['bien'];
$unidad_v_anual = $_POST['unidad_v_anual'];
$unidad_medida = $_POST['unidad_medida'];
$espe_unidad = $_POST['espe_unidad'];
$costo_pro_unidad = $_POST['costo_pro_unidad'];
$precio_v_unitario = $_POST['precio_v_unitario'];
$ganancia_unidad = $_POST['ganancia_unidad'];
$venta_anual = $_POST['venta_anual'];
$ingresos_sup_costo = $_POST['ingresos_sup_costo'];

for ($i=0; $i <sizeof($bien); $i++) {
$s="INSERT INTO `sost_economica`(`empresa_id`, `bien_servicio`, `vendida_anual`, `unidad_medida_id`, `esp_unidad`, `costo_produccion`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `si_no_id`) VALUES ('$empresa','".$bien[$i]."','".$unidad_v_anual[$i]."','".$unidad_medida[$i]."','".$espe_unidad[$i]."','".$costo_pro_unidad[$i]."','".$precio_v_unitario[$i]."','".$ganancia_unidad[$i]."','".$venta_anual[$i]."','".$ingresos_sup_costo[$i]."')";
// mysqli_query($conn,$s);
// echo($s);
}


}



?>