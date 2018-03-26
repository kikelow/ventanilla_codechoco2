<?php 
	include "../../conexion.php";
	$empresa = $_GET['empresa'];
//modificar datos en la tabla tenencia_tierra
$t_tierra_check = $_POST['tierra_m'];
$t_tierra_confirmacion = $_POST['tierra_hidden_m'];
$desc_tierra = $_POST['desc_t_m'];
$resultadom_nochequeado = array_values(array_diff($t_tierra_confirmacion,$t_tierra_check));

	for ($i=0; $i <sizeof($t_tierra_confirmacion); $i++) {
		if ($t_tierra_check[$i]) {
			$s="UPDATE `tenencia_tierra` SET `descripcion`= '$desc_tierra[$i]',`confirmacion`='si' WHERE empresa_id = '$empresa' AND opciones_id = '$t_tierra_check[$i]' ";
			mysqli_query($conn,$s);
		}
		else if (!$t_tierra_check) {
			$s="UPDATE `tenencia_tierra` SET `descripcion`= '',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$t_tierra_confirmacion[$i]' ";
			mysqli_query($conn,$s);
		}		
	}
	for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
		if ($resultadom_nochequeado[$i]) {
			$s="UPDATE `tenencia_tierra` SET `descripcion`= '',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$resultadom_nochequeado[$i]' ";
			mysqli_query($conn,$s);
		}	
	}
//Modificar datos de otros tenencia de tierra
$s="UPDATE `otro_tenencia_tierra` SET `nombre`='$_POST[otro_tierra_nom_m]',`descripcion`='$_POST[otro_tierra_desc_m]' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------
// Modificar datos en la tabla registro
$registro_hidden_m = $_POST['registro_hidden_m'];
$registro_a_na_m = $_POST['registro_a_na_m'];
$registro_c_nc_m = $_POST['registro_c_nc_m'];
$registro_vigencia_m = $_POST['registro_vigencia_m'];
$registro_obs_m = $_POST['registro_obs_m'];

for ($i=0; $i <sizeof($registro_hidden_m); $i++) {
	$s="UPDATE `registro` SET `aplica_noaplica_id`= '$registro_a_na_m[$i]',`cumple_nocumple_id`='$registro_c_nc_m[$i]',`vigencia`='$registro_vigencia_m[$i]',`observacion`='$registro_obs_m[$i]'  WHERE empresa_id = '$empresa' AND opciones_id = '$registro_hidden_m[$i]'";
	mysqli_query($conn,$s);
}
//---------------------------------------------------------------------------------------------------------
//Modificar datos en la tabla permiso
$permiso_hidden_m = $_POST['permiso_hidden_m'];
$permiso_a_na_m = $_POST['permiso_a_na_m'];
$permiso_c_nc_m = $_POST['permiso_c_nc_m'];
$permiso_vigencia_m = $_POST['permiso_vigencia_m'];
$permiso_obs_m = $_POST['permiso_obs_m'];

for ($i=0; $i <sizeof($permiso_hidden_m); $i++) {
	$s="UPDATE `permiso` SET `aplica_noaplica_id`= '$permiso_a_na_m[$i]',`cumple_nocumple_id`='$permiso_c_nc_m[$i]',`vigencia`='$permiso_vigencia_m[$i]',`observacion`='$permiso_obs_m[$i]'  WHERE empresa_id = '$empresa' AND opciones_id = '$permiso_hidden_m[$i]'";
	mysqli_query($conn,$s);
}
//---------------------------------------------------------------------------------------------------------
//Registrar datos en la tabla licencia
$licencia_hidden_m = $_POST['licencia_hidden_m'];
$licencia_a_na_m = $_POST['licencia_a_na_m'];
$licencia_c_nc_m = $_POST['licencia_c_nc_m'];
$licencia_vigencia_m = $_POST['licencia_vigencia_m'];
$licencia_obs_m = $_POST['licencia_obs_m'];
for ($i=0; $i <sizeof($licencia_hidden_m); $i++) {
$s = "UPDATE `licencia` SET `aplica_noaplica_id`='$licencia_a_na_m[$i]',`cumple_nocumple_id`='$licencia_c_nc_m[$i]',`vigencia`='$licencia_vigencia_m[$i]',`observacion`='$licencia_obs_m[$i]' WHERE empresa_id = '$empresa' AND opciones_id = '$licencia_hidden_m[$i]'";
	mysqli_query($conn,$s);
}
//--------------------------------------------------------------------------------------------------------- 
//Modificar datos en la tabla otros legislacion 
$otro_legislacion_m  = $_POST['otro_legislacion_m'];
$otro_legislacion_c_nc_m = $_POST['otro_legislacion_c_nc_m'];
$otros_legislacion_obs_m = $_POST['otros_legislacion_obs_m'];
$s="UPDATE `otros_legislacion` SET `nombre`='$otro_legislacion_m',`cumple_nocumple_id`='$otro_legislacion_c_nc_m',`observacion`='$otros_legislacion_obs_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//--------------------------------------------------------------------------------------------------------- 

//Modificar datos en la tabla de certificacion
$certificacion_m= $_POST['certificacion_m'];
$certificacion_m_hidden= $_POST['certificacion_m_hidden'];
$cert_etapa_m = $_POST['cert_etapa_m'];
$cert_vigencia_m = $_POST['cert_vigencia_m'];
$cert_obs_m = $_POST['cert_obs_m'];
$resultadom_nochequeado = array_values(array_diff($certificacion_m_hidden,$certificacion_m));

for ($i=0; $i <sizeof($certificacion_m_hidden); $i++) {
	if ($certificacion_m[$i]) {
$s="UPDATE `certificacion` SET `etapa_id`='$cert_etapa_m[$i]',`vigencia`='$cert_vigencia_m[$i]',`observacion`='$cert_obs_m[$i]',`confirmacion`='si' WHERE empresa_id='$empresa' AND opciones_id = '$certificacion_m[$i]'";
	mysqli_query($conn,$s);
	}else if (!$certificacion_m) {
		$s="UPDATE `certificacion` SET `etapa_id`='1',`vigencia`='',`observacion`='',`confirmacion`='no' WHERE empresa_id='$empresa' AND opciones_id = '$certificacion_m_hidden[$i]'";
	mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
		if ($resultadom_nochequeado[$i]) {
	$s="UPDATE `certificacion` SET `etapa_id`='1',`vigencia`='',`observacion`='',`confirmacion`='no' WHERE empresa_id='$empresa' AND opciones_id = '$resultadom_nochequeado[$i]'";
	mysqli_query($conn,$s);

		}	
	}
//Modificar datos de otros certificacion
$otro_certificacion_m = $_POST['otro_certificacion_m'];
$otro_cert_etapa_m = $_POST['otro_cert_etapa_m'];
$otro_cert_vigencia_m = $_POST['otro_cert_vigencia_m'];
$otro_cert_obs_m = $_POST['otro_cert_obs_m'];
$s="UPDATE `otros_certificacion` SET `nombre`='$otro_certificacion_m',`etapa_id`='$otro_cert_etapa_m',`vigencia`='$otro_cert_vigencia_m',`observacion`='$otro_cert_obs_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------
//resgistrar datos en la tabla conservacion
$conservacion_m = $_POST['conservacion_m'];
$conservacion_m_hidden = $_POST['conservacion_m_hidden'];
$conser_area_m = $_POST['conser_area_m'];
$conser_desc_m = $_POST['conser_desc_m'];
$resultadom_nochequeado = array_values(array_diff($conservacion_m_hidden,$conservacion_m));
for ($i=0; $i <sizeof($conservacion_m_hidden); $i++) {
	if ($conservacion_m[$i]) {
$s="UPDATE `conservacion` SET `area`='$conser_area_m[$i]',`descripcion`='$conser_desc_m[$i]',`confirmacion`='si' WHERE empresa_id = '$empresa' AND opciones_id = '$conservacion_m[$i]'";
	mysqli_query($conn,$s);
	}else if (!$conservacion_m) {
$s="UPDATE `conservacion` SET `area`='',`descripcion`='',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$conservacion_m_hidden[$i]'";
	mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultadom_nochequeado); $i++) {
	if ($resultadom_nochequeado[$i]) {
$s="UPDATE `conservacion` SET `area`='',`descripcion`='',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$resultadom_nochequeado[$i]'";
	mysqli_query($conn,$s);
	}
}

// Modificar datos de otros conservacion
$otro_conservacion_nom_m = $_POST['otro_conservacion_nom_m'];
$otro_conservacion_area_m = $_POST['otro_conservacion_area_m'];
$otro_conservacion_desc_m = $_POST['otro_conservacion_desc_m'];

$s="UPDATE `otros_conservacion` SET `nombre`='$otro_conservacion_nom_m',`area`='$otro_conservacion_area_m',`descripcion`='$otro_conservacion_desc_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla ecosistemas 
$ecosistemas_m = $_POST['ecosistemas_m'];
$ecosistemas_m_hidden = $_POST['ecosistemas_m_hidden'];
$ecosistemas_area_m = $_POST['ecosistemas_area_m'];
$ecosistema_nochequeado = array_values(array_diff($ecosistemas_m_hidden, $ecosistemas_m));
for ($i=0; $i <sizeof($ecosistemas_m_hidden); $i++) {
	if ($ecosistemas_m[$i]) {
		$s="UPDATE `ecosistema` SET `area`='$ecosistemas_area_m[$i]',`confirmacion`='si' WHERE empresa_id = '$empresa' AND opciones_id = '$ecosistemas_m[$i]'";
		mysqli_query($conn,$s);
	}else if (!$ecosistemas_m) {
		$s="UPDATE `ecosistema` SET `area`='',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$ecosistemas_m_hidden[$i]'";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($ecosistema_nochequeado); $i++) {
	if ($ecosistema_nochequeado[$i]) {
		$s="UPDATE `ecosistema` SET `area`='',`confirmacion`='no' WHERE empresa_id = '$empresa' AND opciones_id = '$ecosistema_nochequeado[$i]'";
		mysqli_query($conn,$s);
	}
}
//Modificar datos de otros ecosistemas
$otro_ecosistema_nom_m = $_POST['otro_ecosistema_nom_m'];
$otro_ecosistema_area_m = $_POST['otro_ecosistema_area_m'];
$s="UPDATE `otros_ecosistema` SET `nombre`='$otro_ecosistema_nom_m',`area`='$otro_ecosistema_area_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla plan_manejo
$plan_m = $_POST['plan_m'];
$plan_m_hidden = $_POST['plan_m_hidden'];
$plan_a_na_m = $_POST['plan_a_na_m'];
$plan_c_nc_m = $_POST['plan_c_nc_m'];
$plan_vigencia_m = $_POST['plan_vigencia_m'];
$plan_desc_m = $_POST['plan_desc_m'];
$plan_nochequeado = array_values(array_diff($plan_m_hidden, $plan_m));
for ($i=0; $i <sizeof($plan_m_hidden); $i++) {
	if ($plan_m[$i]) {
		$s="UPDATE `plan_manejo` SET `aplica_noaplica_id`= '$plan_a_na_m[$i]',`cumple_nocumple_id`='$plan_c_nc_m[$i]',`vigencia`='$plan_vigencia_m[$i]',`observacion`='$plan_desc_m[$i]',`confirmacion`='si'  WHERE empresa_id = '$empresa' AND opciones_id = '$plan_m[$i]'";
mysqli_query($conn,$s);
	}else if (!$plan_m) {
	$s="UPDATE `plan_manejo` SET `aplica_noaplica_id`= '2',`cumple_nocumple_id`='2',`vigencia`='',`observacion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$plan_m_hidden[$i]'";
mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($plan_nochequeado); $i++) {
	if ($plan_nochequeado[$i]) {
	$s="UPDATE `plan_manejo` SET `aplica_noaplica_id`= '2',`cumple_nocumple_id`='2',`vigencia`='',`observacion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$plan_nochequeado[$i]'";
mysqli_query($conn,$s);
	}
}
//---------------------------------------------------------------------------------------------------------
//Modificar datos en la tabla involucra 
$involucra_m = $_POST['involucra_m'];
$involucra_m_hidden = $_POST['involucra_m_hidden'];
$involucra_chequeado = array_intersect($involucra_m_hidden, $involucra_m);
$involucra_nochequeado = array_diff($involucra_m_hidden, $involucra_m);
for ($i=0; $i <sizeof($involucra_m_hidden); $i++) {
	if ($involucra_nochequeado[$i]) {
		$s="UPDATE `involucra` SET `confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$involucra_nochequeado[$i]'";
mysqli_query($conn,$s);
	}else if ($involucra_chequeado[$i]) {
		$s="UPDATE `involucra` SET `confirmacion`='si'  WHERE empresa_id = '$empresa' AND opciones_id = '$involucra_chequeado[$i]'";
mysqli_query($conn,$s);
	}else if (!$involucra_m) {
		$s="UPDATE `involucra` SET `confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$involucra_m_hidden[$i]'";
mysqli_query($conn,$s);
	}
}
//Modificar datos de otros involucra
$otro_involucra_nom_m = $_POST['otro_involucra_nom_m'];
$s="UPDATE `otro_involucra` SET `nombre`='$otro_involucra_nom_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla actividades 
$actividad_m = $_POST['actividad_m'];
$actividad_m_hidden = $_POST['actividad_m_hidden'];
$actividad_desc_m = $_POST['actividad_desc_m'];
$actividad_recurso_m = $_POST['actividad_recurso_m'];

$actividad_nochequeado = array_values(array_diff($actividad_m_hidden, $actividad_m));
for ($i=0; $i <sizeof($actividad_m_hidden); $i++) {
	if ($actividad_m[$i]) {
	$s="UPDATE `actividades` SET `recurso_id`= '$actividad_recurso_m[$i]',`descripcion`='$actividad_desc_m[$i]',`confirmacion`='si'  WHERE empresa_id = '$empresa' AND opciones_id = '$actividad_m[$i]'";
mysqli_query($conn,$s);
	}else if (!$actividad_m) {
		$s="UPDATE `actividades` SET `recurso_id`= '1',`descripcion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$actividad_m_hidden[$i]'";
mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($actividad_nochequeado); $i++) {
	if ($actividad_nochequeado[$i]) {
		$s="UPDATE `actividades` SET `recurso_id`= '1',`descripcion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$actividad_nochequeado[$i]'";
mysqli_query($conn,$s);
	}
}
//Modificar datos de otros actividades
$otro_activi_nom_m = $_POST['otro_activi_nom_m'];
$otro_activi_desc_m = $_POST['otro_activi_desc_m'];
$otro_activi_recurso_m = $_POST['otro_activi_recurso_m'];

$s="UPDATE `otro_actividades` SET `nombre`='$otro_activi_nom_m',`descripcion`='$otro_activi_desc_m',`recurso_id`='$otro_activi_recurso_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla programa 
$programa_m = $_POST['programa_m'];
$programa_m_hidden = $_POST['programa_m_hidden'];
$programa_desc_m = $_POST['programa_desc_m'];
$programa_nochequeado = array_values(array_diff($programa_m_hidden, $programa_m));
for ($i=0; $i <sizeof($programa_m_hidden); $i++) {
	if ($programa_m[$i]) {
	$s="UPDATE `programa` SET `descripcion`='$programa_desc_m[$i]',`confirmacion`='si'  WHERE empresa_id = '$empresa' AND opciones_id = '$programa_m[$i]'";
mysqli_query($conn,$s);
	}else if (!$programa_m) {
	$s="UPDATE `programa` SET `descripcion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$programa_m_hidden[$i]'";
mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($programa_nochequeado); $i++) {
	$s="UPDATE `programa` SET `descripcion`='',`confirmacion`='no'  WHERE empresa_id = '$empresa' AND opciones_id = '$programa_nochequeado[$i]'";
mysqli_query($conn,$s);
}

//Modificar datos de otros programa
$otro_programa_nom_m = $_POST['otro_programa_nom_m'];
$otro_programa_desc_m = $_POST['otro_programa_desc_m'];
$s="UPDATE `otro_programa` SET `nombre`='$otro_programa_nom_m',`descripcion`='$otro_programa_desc_m' WHERE empresa_id = '$empresa'";
mysqli_query($conn,$s);
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla institucion 
$i = 0;
$institucion_id = "";
$s = "SELECT id FROM institucion WHERE empresa_id='$empresa'";
$r = mysqli_query($conn,$s);
while ($rw = mysqli_fetch_assoc($r)) {
	$institucion_id = $rw['id'];

$apoyo_m = $_POST['apoyo_m'];
$apoyo_entidad_m = $_POST['apoyo_entidad_m'];
$apoyo_tipo_entidad_m = $_POST['apoyo_tipo_entidad_m'];
$año_m = $_POST['año_m'];
$s="UPDATE `institucion` SET `apoyo`='$apoyo_m[$i]',`entidad`='$apoyo_entidad_m[$i]',`orientacion_id`='$apoyo_tipo_entidad_m[$i]',`año`='$año_m[$i]' WHERE empresa_id = '$empresa' AND id ='$institucion_id'";
mysqli_query($conn,$s);
$i++;
}
//---------------------------------------------------------------------------------------------------------

//Modificar datos en la tabla sost_economica 
$bien_m = $_POST['bien_m'];
$unidad_v_anual_m = $_POST['unidad_v_anual_m'];
$unidad_medida_m = $_POST['unidad_medida_m'];
$costo_pro_unidad_m = $_POST['costo_pro_unidad_m'];
$precio_v_unitario_m = $_POST['precio_v_unitario_m'];
$ganancia_unidad_m = $_POST['ganancia_unidad_m'];
$venta_anual_m = $_POST['venta_anual_m'];
$ingresos_sup_costo_m = $_POST['ingresos_sup_costo_m'];
$i = 0;
$institucion_id = "";
$s = "SELECT id FROM sost_economica WHERE empresa_id='$empresa'";
$r = mysqli_query($conn,$s);
while ($rw = mysqli_fetch_assoc($r)) {
	$sost_id = $rw['id'];
$s="UPDATE `sost_economica` SET `bien_servicio`='$bien_m[$i]',`vendida_anual`='$unidad_v_anual_m[$i]',`unidad_medida_id`='$unidad_medida_m[$i]',`costo_produccion`='$costo_pro_unidad_m[$i]',`precio_v_unitario`='$precio_v_unitario_m[$i]',`ganancia_unidad`='$ganancia_unidad_m[$i]',`ventas_anual`='$venta_anual_m[$i]',`si_no_id`='$ingresos_sup_costo_m[$i]' WHERE empresa_id = '$empresa' AND id ='$sost_id'";
mysqli_query($conn,$s);
$i++;
}
//---------------------------------------------------------------------------------------------------------
//Modificar datos de insumos totales
$s="UPDATE `costo_insumos` SET `semanal`='$_POST[insumo_semanal_m]',`mensual`='$_POST[insumo_mensual_m]',`anual`='$_POST[insumo_anual_m]' WHERE empresa_id='$empresa'";
mysqli_query($conn,$s);

//Modificar datos de mano de obra total
$s="UPDATE `costo_mano_obra` SET `semanal`='$_POST[obra_semanal_m]',`mensual`='$_POST[obra_mensual_m]',`anual`='$_POST[obra_anual_m]' WHERE empresa_id='$empresa'";
mysqli_query($conn,$s);

//Modificar datos de ventas realizadas
$s="UPDATE `total_ventas` SET `valor`='$_POST[venta_valor]',`anio`='$_POST[venta_anio]' WHERE empresa_id='$empresa'";
mysqli_query($conn,$s);

?>