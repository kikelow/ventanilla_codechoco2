<?php 
include "../../conexion.php";
$empresa = $_GET['empresa'];

if (isset($_GET['empresa'])) {

	date_default_timezone_set('America/Bogota');
		$fecha_registro = date("Y-m-d");

	//insertar en informacion complementaria
	$s="INSERT INTO informacion_complementaria VALUES(NULL,'$empresa','$fecha_registro','$_POST[num_familias]')";
	mysqli_query($conn,$s);

	//seleccionar el ultimo id de informacion complementaria
	$info_com_id = '';
	$s="SELECT MAX(id) as id FROM informacion_complementaria";
	$cs=mysqli_query($conn,$s);
	$info_com_id="";
	while($resul=mysqli_fetch_assoc($cs)){
		$info_com_id=$resul['id'];
	}

//___________________________________________________________________________________________________
//registrar datos de impactos ambientales

$impacto_amb_check = $_POST['impacto_amb'];
$impacto_amb_confirmacion = $_POST['impacto_amb_hidden'];
$impacto_amb_si_no = $_POST['impacto_amb_si_no'];
$resultado_nocheck = array_values(array_diff($impacto_amb_confirmacion, $impacto_amb_check));

for ($i=0; $i < sizeof($impacto_amb_confirmacion) ; $i++) { 
	if ($impacto_amb_check[$i]) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$impacto_amb_check[$i]','','$impacto_amb_si_no[$i]','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$impacto_amb_check) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$impacto_amb_confirmacion[$i]','','4','no')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','','4','no')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}

//insertar otro de impacto ambiental
for ($i=0; $i <count($_POST['otro_impacto_nom']) ; $i++) { 
$s="INSERT INTO `impacto_practicas` VALUES(null,'$info_com_id','94','".$_POST['otro_impacto_nom'][$i]."','".$_POST['otro_impacto_amb_si_no'][$i]."','')";
mysqli_query($conn,$s);
}

//_______________________________________________________________________________________________________
//registrar datos de buenas practicas

$b_practicas_check = $_POST['b_practicas'];
$b_practicas_confirmacion = $_POST['b_practicas_hidden'];
$b_practicas_si_no = $_POST['b_practicas_si_no'];
$resultado_nocheck = array_values(array_diff($b_practicas_confirmacion, $b_practicas_check));
for ($i=0; $i < sizeof($b_practicas_confirmacion) ; $i++) { 
	if ($b_practicas_check[$i]) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$b_practicas_check[$i]','','$b_practicas_si_no[$i]','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$b_practicas_check) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$b_practicas_confirmacion[$i]','','4','no')";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO impacto_practicas
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','','4','no')";
		mysqli_query($conn,$s);
	}
}

//insertar otro de impacto ambiental
for ($i=0; $i <count($_POST['otro_practicas_nom']) ; $i++) { 
$s="INSERT INTO `impacto_practicas` VALUES(null,'$info_com_id','108','".$_POST['otro_practicas_nom'][$i]."','".$_POST['otro_practicas_amb_si_no'][$i]."','')";
mysqli_query($conn,$s);
}

//______________________________________________________________________________________________________

//registrar datos de areas de conservacion
$conservacion_check = $_POST['conservacion'];
$conservacion_confirmacion = $_POST['conservacion_hidden'];
$conservacion_area = $_POST['conservacion_area'];
$resultado_nocheck = array_values(array_diff($conservacion_confirmacion, $conservacion_check));
for ($i=0; $i < sizeof($conservacion_confirmacion) ; $i++) { 
	if ($conservacion_check[$i]) {
		$s = "INSERT INTO conservacion
		VALUES (null,'$info_com_id','$conservacion_check[$i]','$conservacion_area[$i]','','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$conservacion_check) {
		$s = "INSERT INTO conservacion
		VALUES (null,'$info_com_id','$conservacion_confirmacion[$i]','','','no')";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO conservacion
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','','','no')";
		mysqli_query($conn,$s);
	}
}

//insertar otro de conservacion
for ($i=0; $i <count($_POST['otro_conservacion_nom']) ; $i++) { 
$s="INSERT INTO `conservacion` VALUES(null,'$info_com_id','119','".$_POST['otro_conservacion_area'][$i]."','".$_POST['otro_conservacion_nom'][$i]."','')";
mysqli_query($conn,$s);
}
//______________________________________________________________________________________________________

//registrar datos de certificacion
$certificacion_check = $_POST['certificacion'];
$certificacion_confirmacion = $_POST['certificacion_hidden'];
$certificacion_etapa = $_POST['certificacion_etapa'];
$certificacion_vigencia = $_POST['certificacion_vigencia'];
$certificacion_observacion = $_POST['certificacion_observacion'];
$resultado_nocheck = array_values(array_diff($certificacion_confirmacion, $certificacion_check));
for ($i=0; $i < sizeof($certificacion_confirmacion) ; $i++) { 
	if ($certificacion_check[$i]) {
		$s = "INSERT INTO certificacion
		VALUES (null,'$info_com_id','$certificacion_check[$i]','$certificacion_etapa[$i]','$certificacion_vigencia[$i]','','$certificacion_observacion[$i]','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$certificacion_check) {
		$s = "INSERT INTO certificacion
		VALUES (null,'$info_com_id','$certificacion_confirmacion[$i]','3','','','','no')";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO certificacion
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','3','','','','no')";
		mysqli_query($conn,$s);
	}
}

//insertar otro de cerificacion
for ($i=0; $i <count($_POST['otro_certificacion_nom']) ; $i++) { 
$s="INSERT INTO `certificacion` VALUES(null,'$info_com_id','127','".$_POST['otro_certificacion_etapa'][$i]."','".$_POST['otro_certificacion_vigencia'][$i]."','".$_POST['otro_certificacion_nom'][$i]."','".$_POST['otro_observacion_vigencia'][$i]."','')";
mysqli_query($conn,$s);
}

//___________________________________________________________________________________________________
//insertar total de empleados
//masculino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','1','1','$_POST[t_masculino]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','1','2','$_POST[t_femenino]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//insertar total tipo de contrato
//masculino
$s = "INSERT INTO tipo_contrato 
VALUES(null,'$info_com_id','1','$_POST[directo_m]','$_POST[indirecto_m]','$_POST[temporal_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO tipo_contrato 
VALUES(null,'$info_com_id','2','$_POST[directo_f]','$_POST[indirecto_f]','$_POST[temporal_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//____________________________________________________________________________________________________
// insertar descripcion etaria
//masculino
$s = "INSERT INTO `descripcion_etaria`
VALUES (null,'$info_com_id','1','".$_POST['18-30_m']."','".$_POST['30-50_m']."','".$_POST['mayor50_m']."')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO `descripcion_etaria`
VALUES (null,'$info_com_id','2','".$_POST['18-30_f']."','".$_POST['30-50_f']."','".$_POST['mayor50_f']."')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
// Insertar condicion de vulnerabilidad
//masculino
$s = "INSERT INTO `condicion_vulnerabilidad_es`VALUES (null,'$info_com_id','1','4','$_POST[discapacitado_m]','$_POST[madre_m]','$_POST[adulto_m]','$_POST[indigena_m]','$_POST[negras_m]','$_POST[campesino_m]','$_POST[reinsertado_m]','$_POST[victima_m]','$_POST[vulnerable_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO `condicion_vulnerabilidad_es` VALUES (null,'$info_com_id','2','4','$_POST[discapacitado_f]','$_POST[madre_f]','$_POST[adulto_f]','$_POST[indigena_f]','$_POST[negras_f]','$_POST[campesino_f]','$_POST[reinsertado_f]','$_POST[victima_f]','$_POST[vulnerable_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro condicion de vulnerabilidad masculino
$s = "INSERT INTO `otro_condicion_vulneravibilidad`(`id`, `info_com_id`, `otro_rotulo_id`, `sexo_id`, `nombre`, `cantidad`) VALUES (null,'$info_com_id','4','1','$_POST[otro_vulnerablidad_nom]','$_POST[otro_vulnerablidad_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro condicion de vulnerabilidad femenino
$s = "INSERT INTO `otro_condicion_vulneravibilidad`(`id`, `info_com_id`, `otro_rotulo_id`, `sexo_id`, `nombre`, `cantidad`) VALUES (null,'$info_com_id','4','2','$_POST[otro_vulnerablidad_nom]','$_POST[otro_vulnerablidad_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//_____________________________________________________________________________________________________
//Insertar nivel educativo
//masculino
$s="INSERT INTO `nivel_educativo` VALUES (null,'$info_com_id','1','$_POST[primaria_m]','$_POST[bachillerato_m]','$_POST[tecnico_m]','$_POST[tecnologo_m]','$_POST[universitario_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="INSERT INTO `nivel_educativo` VALUES (null,'$info_com_id','2','$_POST[primaria_f]','$_POST[bachillerato_f]','$_POST[tecnico_f]','$_POST[tecnologo_f]','$_POST[universitario_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro nivel educativo masculino
$s="INSERT INTO `otro_nivel_educativo` VALUES (null,'$info_com_id','1','$_POST[otro_nivel_nom]','$_POST[otro_nivel_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro nivel educativo Femenino
$s="INSERT INTO `otro_nivel_educativo` VALUES (null,'$info_com_id','2','$_POST[otro_nivel_nom]','$_POST[otro_nivel_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//insertar temporada alta
//masculino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','2','1','$_POST[alta_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','2','2','$_POST[alta_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//insertar temporada baja
//masculino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','3','1','$_POST[baja_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO total_empleados VALUES(null,'$info_com_id','3','2','$_POST[baja_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//insertar socio/colaborador
//masculino
$s = "INSERT INTO `condicion_vulnerabilidad_es`VALUES (null,'$info_com_id','1','5','$_POST[s_discapacitado_m]','$_POST[s_madre_m]','$_POST[s_adulto_m]','$_POST[s_indigena_m]','$_POST[s_negra_m]','$_POST[s_campesino_m]','$_POST[s_reinsertado_m]','$_POST[s_victima_m]','$_POST[s_vulnerable_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO `condicion_vulnerabilidad_es`VALUES (null,'$info_com_id','2','5','$_POST[s_discapacitado_f]','$_POST[s_madre_f]','$_POST[s_adulto_f]','$_POST[s_indigena_f]','$_POST[s_negra_f]','$_POST[s_campesino_f]','$_POST[s_reinsertado_f]','$_POST[s_victima_f]','$_POST[s_vulnerable_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro condicion de vulnerabilidad masculino
$s = "INSERT INTO `otro_condicion_vulneravibilidad`(`id`, `info_com_id`, `otro_rotulo_id`, `sexo_id`, `nombre`, `cantidad`) VALUES (null,'$info_com_id','5','1','$_POST[otro_vulne_nom_s]','$_POST[otro_vulne_m_s]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro condicion de vulnerabilidad femenino
$s = "INSERT INTO `otro_condicion_vulneravibilidad`(`id`, `info_com_id`, `otro_rotulo_id`, `sexo_id`, `nombre`, `cantidad`) VALUES (null,'$info_com_id','5','2','$_POST[otro_vulne_nom_s]','$_POST[otro_vulne_f_s]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//___________________________________________________________________________________________________

//insertar miembros de las comunidades locales
//masculino
$s = "INSERT INTO `negocio_comunidad` VALUES (null,'$info_com_id','1','$_POST[socio_m]','$_POST[directo_m_s]','$_POST[indirecto_m_s]','$_POST[temporal_m_s]')";
	echo $s;
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s = "INSERT INTO `negocio_comunidad` VALUES (null,'$info_com_id','2','$_POST[socio_f]','$_POST[directo_f_s]','$_POST[indirecto_f_s]','$_POST[temporal_f_s]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro miembro de comunidades locales
//masculino
$s="INSERT INTO `otro_negocio_comunidad` VALUES (null,'$info_com_id','1','$_POST[otro_involucra_nom]','$_POST[otro_involucra_m]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="INSERT INTO `otro_negocio_comunidad` VALUES (null,'$info_com_id','2','$_POST[otro_involucra_nom]','$_POST[otro_involucra_f]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//____________________________________________________________________________________________________

//registrar datos de areas de conservacion
$actividades_check = $_POST['actividades'];
$actividades_confirmacion = $_POST['actividades_hidden'];
$actividades_recurso = $_POST['actividades_recurso'];
$actividades_desc = $_POST['actividades_desc'];
$resultado_nocheck = array_values(array_diff($actividades_confirmacion, $actividades_check));
for ($i=0; $i < sizeof($actividades_confirmacion) ; $i++) { 
	if ($actividades_check[$i]) {
		$s = "INSERT INTO actividades
		VALUES (null,'$info_com_id','$actividades_check[$i]','$actividades_recurso[$i]','$actividades_desc[$i]','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$actividades_check) {
		$s = "INSERT INTO actividades
		VALUES (null,'$info_com_id','$actividades_confirmacion[$i]','2','','no')";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO actividades
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','2','','no')";
		mysqli_query($conn,$s);
	}
}
//____________________________________________________________________________________________________
//insertar datos de programas

$programa_check = $_POST['programa'];
$programa_confirmacion = $_POST['programa_hidden'];
$programa_recurso = $_POST['programa_recurso'];
$programa_desc = $_POST['programa_desc'];
$resultado_nocheck = array_values(array_diff($programa_confirmacion, $programa_check));
for ($i=0; $i < sizeof($programa_confirmacion) ; $i++) { 
	if ($programa_check[$i]) {
		$s = "INSERT INTO programa
		VALUES (null,'$info_com_id','$programa_check[$i]','$programa_recurso[$i]','$programa_desc[$i]','si')";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$programa_check) {
		$s = "INSERT INTO programa
		VALUES (null,'$info_com_id','$programa_confirmacion[$i]','2','','no')";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s = "INSERT INTO programa
		VALUES (null,'$info_com_id','$resultado_nocheck[$i]','2','','no')";
		mysqli_query($conn,$s);
	}
}

//otro programa
for ($i=0; $i <count($_POST['otro_programa_nom']) ; $i++) { 
$s="INSERT INTO `otro_programa` VALUES (null,'$info_com_id','".$_POST['otro_programa_recurso'][$i]."','".$_POST['otro_programa_nom'][$i]."','".$_POST['otro_programa_desc'][$i]."')";
mysqli_query($conn,$s);
}
//____________________________________________________________________________________________________
//insertar datos de apoyo
$apoyo_descripcion = $_POST['apoyo_descripcion'];
$apoyo_entidad = $_POST['apoyo_entidad'];
$apoyo_tipo = $_POST['apoyo_tipo'];
$apoyo_anio = $_POST['apoyo_anio'];

for ($i=0; $i <sizeof($apoyo_descripcion); $i++) {
$s="INSERT INTO `apoyo` VALUES (null,'$info_com_id','$apoyo_descripcion[$i]','$apoyo_entidad[$i]','$apoyo_tipo[$i]','$apoyo_anio[$i]')";
mysqli_query($conn,$s);
}
//____________________________________________________________________________________________________
//insertar en cadena de valor
$cadena=$_POST['cadena_hidden'];
$cadena_si_no=$_POST['cadena_si_no'];
for ($i=0; $i <sizeof($cadena) ; $i++) { 
	$s="INSERT INTO `cadena_valor` VALUES (null,'$info_com_id','$cadena[$i]','','$cadena_si_no[$i]')";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//otro cadena de valor
$otro_cadena=$_POST['otro_cadena_nom'];
for ($i=0; $i <sizeof($otro_cadena) ; $i++) { 
	$s="INSERT INTO `cadena_valor` VALUES (null,'$info_com_id','136','$otro_cadena[$i]','')";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//_____________________________________________________________________________________________________
//insertar sostenibilidad economica
$bien = $_POST['bien_hidden'];
$unidad_v_anual = $_POST['unidad_v_anual'];
$unidad_medida = $_POST['unidad_medida'];
$cantidad_unidad = $_POST['cantidad'];
$costo_pro_unidad = $_POST['costo_pro_unidad'];
$precio_v_unitario = $_POST['precio_v_unitario'];
$ganancia_unidad = $_POST['ganancia_unidad'];
$venta_anual = $_POST['venta_anual'];
$ingresos_sup_costo = $_POST['ingresos_sup_costo'];

for ($i=0; $i <sizeof($bien); $i++) {
$s="INSERT INTO `sost_economica`(`id`, `info_com_id`, `bien_servicio_id`, `u_vendidadas_anuales`, `unidad_medida_id`, `cantidad_unidad`, `costo_produccion_unidad`, `precio_v_unitario`, `ganancia_unidad`, `ventas_anual`, `ingreso_superior`) VALUES (null,'$info_com_id','$bien[$i]','$unidad_v_anual[$i]',
'$unidad_medida[$i]','$cantidad_unidad[$i]','$costo_pro_unidad[$i]','$precio_v_unitario[$i]','$ganancia_unidad[$i]','$venta_anual[$i]','$ingresos_sup_costo[$i]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}
// otro bien o servicio de sostenbulidad economica
$s = "INSERT INTO `bienes_servicios_adicionales`(`id`, `info_com_id`, `bien`, `costo_total_produccion`, `venta_total_anual`, `ingresos_superior`) VALUES (null,'$info_com_id','$_POST[otro_bien_nom]','$_POST[otro_t_produccion]','$_POST[otro_venta_total]','$_POST[ingresos_sup_costo_otro]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//insertar total de ventas
$fecha_datos = date("Y");
$s = "INSERT INTO `total_ventas`(`id`, `info_com_id`, `costo_pro_insumos_totales`, `costo_pro_mano_obra`, `total_ventas_realizadas_ant`, `fecha`) VALUES (null,'$info_com_id','$_POST[costo_p_insumos]','$_POST[costo_p_mano_obra]','$_POST[total_ventas_realizadas]','$fecha_datos')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//________________________________________________________________________________________________________
// insertar Comercializacion
$comercializacion = $_POST['comercializacion_hidden'];
$numero = $_POST['comer_numero'];
$local = $_POST['comer_local'];
$regional = $_POST['comer_regional'];
$nacional = $_POST['comer_nacional'];
$global = $_POST['comer_global'];
$observacion = $_POST['comer_observacion'];

for ($i=0; $i <sizeof($comercializacion); $i++) {
$s="INSERT INTO `comercializacion` VALUES (null,'$info_com_id','$comercializacion[$i]','$numero[$i]','$local[$i]','$regional[$i]','$nacional[$i]','$global[$i]','$observacion[$i]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//_____________________________________________________________________________________________
//Insertar turismo
$turismo = $_POST['turismo_hidden'];
$turismo_respuesta = $_POST['turismo_si_respuesta'];
for ($i=0; $i <sizeof($turismo); $i++) {
$s="INSERT INTO `turismo` VALUES (null,'$info_com_id','$turismo[$i]','$turismo_respuesta[$i]')";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}

$s="UPDATE `empresa` SET `informacion_as`='si' WHERE id = '$empresa'";
mysqli_query($conn,$s);




}
?>