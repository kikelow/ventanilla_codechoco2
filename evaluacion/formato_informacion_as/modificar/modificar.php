<?php 
	include "../../../conexion.php";
	$empresa = $_GET['empresa'];

//modificar en informacion complementaria
	$s="UPDATE `informacion_complementaria`
	 SET `num_familias`= '$_POST[num_familias]' WHERE empresa_id = '$empresa'";
	mysqli_query($conn,$s);

$info_com_id = '';
	$s="SELECT id FROM informacion_complementaria WHERE empresa_id = '$empresa' ";
	$cs=mysqli_query($conn,$s);
	$info_com_id="";
	while($resul=mysqli_fetch_assoc($cs)){
		$info_com_id=$resul['id'];
	}
//_____________________________________________________________________________________________________
//Modificar datos de impactos ambientales
$impacto_amb_check = $_POST['impacto_amb'];
$impacto_amb_confirmacion = $_POST['impacto_amb_hidden'];
$impacto_amb_si_no = $_POST['impacto_amb_si_no'];
$resultado_nocheck = array_values(array_diff($impacto_amb_confirmacion, $impacto_amb_check));

for ($i=0; $i < sizeof($impacto_amb_confirmacion) ; $i++) { 
	if ($impacto_amb_check[$i]) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='$impacto_amb_si_no[$i]',
		 `confirmacion`='si'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$impacto_amb_check[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$impacto_amb_check) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='4',
		 `confirmacion`='no'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$impacto_amb_confirmacion[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='4',
		 `confirmacion`='no'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$resultado_nocheck[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}

//Modificar otro de impacto ambiental
$otro_impacto_nom = $_POST['otro_impacto_nom'];
$otro_impacto_amb_si_no = $_POST['otro_impacto_amb_si_no'];
$otro_impacto_hidden = $_POST['otro_impacto_hidden'];
for ($i=0; $i <count($otro_impacto_hidden) ; $i++) { 
$s = "UPDATE `impacto_practicas` SET 
	`otro_nombre`='$otro_impacto_nom[$i]',
	`respuesta_id`='$otro_impacto_amb_si_no[$i]' 
	WHERE info_com_id = '$info_com_id' AND id = '$otro_impacto_hidden[$i]' AND pregunta_id = '94'";
mysqli_query($conn,$s);
}
//_______________________________________________________________________________________________________
//Modificar datos de buenas practicas

$b_practicas_check = $_POST['b_practicas'];
$b_practicas_confirmacion = $_POST['b_practicas_hidden'];
$b_practicas_si_no = $_POST['b_practicas_si_no'];
$resultado_nocheck = array_values(array_diff($b_practicas_confirmacion, $b_practicas_check));
for ($i=0; $i < sizeof($b_practicas_confirmacion) ; $i++) { 
	if ($b_practicas_check[$i]) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='$b_practicas_si_no[$i]',
		 `confirmacion`='si'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$b_practicas_check[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));

	}else if (!$b_practicas_check) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='4',
		 `confirmacion`='no'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$b_practicas_confirmacion[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `impacto_practicas` SET
		 `respuesta_id`='4',
		 `confirmacion`='no'
		 WHERE info_com_id = '$info_com_id' AND pregunta_id = '$resultado_nocheck[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}

//Modificar otro de buenas practicas
$otro_practicas_nom = $_POST['otro_practicas_nom'];
$otro_practicas_amb_si_no = $_POST['otro_practicas_amb_si_no'];
$otro_practica_hidden = $_POST['otro_practica_hidden'];
for ($i=0; $i <count($otro_practica_hidden) ; $i++) { 
$s = "UPDATE `impacto_practicas` SET 
	`otro_nombre`='$otro_practicas_nom[$i]',
	`respuesta_id`='$otro_practicas_amb_si_no[$i]' 
	WHERE info_com_id = '$info_com_id' AND id = '$otro_practica_hidden[$i]' AND pregunta_id = '108'";
mysqli_query($conn,$s);
}
//____________________________________________________________________________________________________
//modificar datos de areas de conservacion
$conservacion_check = $_POST['conservacion'];
$conservacion_confirmacion = $_POST['conservacion_hidden'];
$conservacion_area = $_POST['conservacion_area'];
$resultado_nocheck = array_values(array_diff($conservacion_confirmacion, $conservacion_check));
for ($i=0; $i < sizeof($conservacion_confirmacion) ; $i++) { 
	if ($conservacion_check[$i]) {
		$s="UPDATE `conservacion` SET 
		`area`='$conservacion_area[$i]',
		`confirmacion`='si' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$conservacion_check[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$conservacion_check) {
		$s="UPDATE `conservacion` SET 
		`area`='',
		`confirmacion`='no' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$conservacion_confirmacion[$i]'";
		mysqli_query($conn,$s);
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `conservacion` SET 
		`area`='',
		`confirmacion`='no' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$resultado_nocheck[$i]'";
		mysqli_query($conn,$s);
	}
}
//Modificar otro de conservacion
$otro_conservacion_area = $_POST['otro_conservacion_area'];
$otro_conservacion_nom = $_POST['otro_conservacion_nom'];
$otro_conservacion_hidden = $_POST['otro_conservacion_hidden'];
for ($i=0; $i <count($otro_conservacion_hidden) ; $i++) {
$s="UPDATE `conservacion` SET 
`area`='$otro_conservacion_area[$i]',
`otro_nombre`='$otro_conservacion_nom[$i]'
 WHERE info_com_id = '$info_com_id' AND pregunta_id = '119' AND id = '$otro_conservacion_hidden[$i]' ";
mysqli_query($conn,$s);
}
//________________________________________________________________________________________________

//modificar datos de certificacion
$certificacion_check = $_POST['certificacion'];
$certificacion_confirmacion = $_POST['certificacion_hidden'];
$certificacion_etapa = $_POST['certificacion_etapa'];
$certificacion_vigencia = $_POST['certificacion_vigencia'];
$certificacion_observacion = $_POST['certificacion_observacion'];
$resultado_nocheck = array_values(array_diff($certificacion_confirmacion, $certificacion_check));
for ($i=0; $i < sizeof($certificacion_confirmacion) ; $i++) { 
	if ($certificacion_check[$i]) {
		$s="UPDATE `certificacion` SET 
		`etapa_id`='$certificacion_etapa[$i]',
		`vigencia`='$certificacion_vigencia[$i]',
		`observacion`='$certificacion_observacion[$i]',
		`confirmacion`='si' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$certificacion_check[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$certificacion_check) {
		$s="UPDATE `certificacion` SET 
		`etapa_id`='3',
		`vigencia`='',
		`observacion`='',
		`confirmacion`='no' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$certificacion_confirmacion[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `certificacion` SET 
		`etapa_id`='3',
		`vigencia`='',
		`observacion`='',
		`confirmacion`='no' 
		WHERE info_com_id = '$info_com_id' AND pregunta_id = '$resultado_nocheck[$i]'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
//modificar otro de cerificacion
$otro_certificacion_etapa = $_POST['otro_certificacion_etapa'];
$otro_certificacion_vigencia = $_POST['otro_certificacion_vigencia'];
$otro_certificacion_nom = $_POST['otro_certificacion_nom'];
$otro_observacion_vigencia = $_POST['otro_observacion_vigencia'];
$otro_certificacion_hidden = $_POST['otro_certificacion_hidden'];
for ($i=0; $i <count($_POST['otro_certificacion_nom']) ; $i++) { 
	$s="UPDATE `certificacion` SET 
	`etapa_id`='$otro_certificacion_etapa[$i]',
	`vigencia`='$otro_certificacion_vigencia[$i]',
	`otro_nombre`='$otro_certificacion_nom[$i]',
	`observacion`='$otro_observacion_vigencia[$i]' 
	WHERE info_com_id = '$info_com_id' AND pregunta_id = '127' AND id = $otro_certificacion_hidden[$i]";
mysqli_query($conn,$s);
}
//____________________________________________________________________________________________________
//modificar total de empleados
//masculino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[t_masculino]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '1' AND sexo_id = '1' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[t_femenino]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '1' AND sexo_id = '2' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//______________________________________________________________________________________________________
//modificar total tipo de contrato
//masculino
$s="UPDATE `tipo_contrato` SET 
`directo`='$_POST[directo_m]',
`indirecto`='$_POST[indirecto_m]',
`temporal`='$_POST[temporal_m]' 
WHERE info_com_id = '$info_com_id' AND sexo_id = '1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `tipo_contrato` SET 
`directo`='$_POST[directo_f]',
`indirecto`='$_POST[indirecto_f]',
`temporal`='$_POST[temporal_f]' 
WHERE info_com_id = '$info_com_id' AND sexo_id = '2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
// modificar descripcion etaria
//masculino
$_18_30_m = $_POST["18-30_m"];
$_30_50_m = $_POST['30-50_m'];
$_mayor50_m = $_POST['mayor50_m'];
$s="UPDATE `descripcion_etaria` SET 
`18_30`='$_18_30_m',
`30_50`='$_30_50_m',
`mayor_50`='$_mayor50_m' 
WHERE info_com_id = '$info_com_id' AND sexo_id = '1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$_18_30_f = $_POST["18-30_f"];
$_30_50_f = $_POST['30-50_f'];
$_mayor50_f = $_POST['mayor50_f'];
$s="UPDATE `descripcion_etaria` SET 
`18_30`='$_18_30_f',
`30_50`='$_30_50_f',
`mayor_50`='$_mayor50_f' 
WHERE info_com_id = '$info_com_id' AND sexo_id = '2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//______________________________________________________________________________________________________
//____________________________________________________________________________________________________
// modificar condicion de vulnerabilidad

//masculino
$s="UPDATE `condicion_vulnerabilidad_es` SET 
`discapacidad`= '$_POST[discapacitado_m]',
`cabeza_familia`='$_POST[madre_m]' ,
`adulto_mayor`= '$_POST[adulto_m]',
`indigena`= '$_POST[indigena_m]',
`com_negras`= '$_POST[negras_m]',
`campesino`= '$_POST[campesino_m]',
`reinsertado`= '$_POST[reinsertado_m]',
`victimas_armado`= '$_POST[victima_m]',
`vulnerabilidad_econo`='$_POST[vulnerable_m]' 
 WHERE `info_com_id`='$info_com_id' AND `total_rotulo_id`= '4' AND `sexo_id`='1' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `condicion_vulnerabilidad_es` SET 
`discapacidad`= '$_POST[discapacitado_f]',
`cabeza_familia`='$_POST[madre_f]' ,
`adulto_mayor`= '$_POST[adulto_f]',
`indigena`= '$_POST[indigena_f]',
`com_negras`= '$_POST[negras_f]',
`campesino`= '$_POST[campesino_f]',
`reinsertado`= '$_POST[reinsertado_f]',
`victimas_armado`= '$_POST[victima_f]',
`vulnerabilidad_econo`='$_POST[vulnerable_f]' 
 WHERE `info_com_id`='$info_com_id' AND `total_rotulo_id`= '4' AND `sexo_id`='2' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));


//otro condicion de vulnerabilidad masculino
$s="UPDATE `otro_condicion_vulneravibilidad` SET
 `nombre`='$_POST[otro_vulnerablidad_nom]',
 `cantidad`='$_POST[otro_vulnerablidad_m]'
  WHERE `info_com_id`='$info_com_id' AND `otro_rotulo_id`= '4' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro condicion de vulnerabilidad femenino
$s="UPDATE `otro_condicion_vulneravibilidad` SET
 `nombre`='$_POST[otro_vulnerablidad_nom]',
 `cantidad`='$_POST[otro_vulnerablidad_f]'
  WHERE `info_com_id`='$info_com_id' AND `otro_rotulo_id`= '4' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//______________________________________________________________________________________________________
//modificar nivel educativo
//masculino
$s="UPDATE `nivel_educativo` SET 
`primaria`='$_POST[primaria_m]',
`bachillerato`='$_POST[bachillerato_m]',
`tecnico`='$_POST[tecnico_m]',
`tecnologo`='$_POST[tecnologo_m]',
`universitario`='$_POST[universitario_m]' 
WHERE `info_com_id`='$info_com_id' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `nivel_educativo` SET 
`primaria`='$_POST[primaria_f]',
`bachillerato`='$_POST[bachillerato_f]',
`tecnico`='$_POST[tecnico_f]',
`tecnologo`='$_POST[tecnologo_f]',
`universitario`='$_POST[universitario_f]' 
WHERE `info_com_id`='$info_com_id' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//otro nivel educativo masculino
$s="UPDATE `otro_nivel_educativo` SET
 `nombre`='$_POST[otro_nivel_nom]',
 `cantidad`='$_POST[otro_nivel_m]'
  WHERE `info_com_id`='$info_com_id' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro nivel educativo Femenino
$s="UPDATE `otro_nivel_educativo` SET
 `nombre`='$_POST[otro_nivel_nom]',
 `cantidad`='$_POST[otro_nivel_f]'
  WHERE `info_com_id`='$info_com_id' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//modificar temporada alta
//masculino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[alta_m]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '2' AND sexo_id = '1' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[alta_f]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '2' AND sexo_id = '2' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//____________________________________________________________________________________________________
//modificar temporada baja
//masculino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[baja_m]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '3' AND sexo_id = '1' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `total_empleados` SET 
`cantidad`='$_POST[baja_f]' 
WHERE info_com_id = '$info_com_id' AND total_rotulo_id = '3' AND sexo_id = '2' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//____________________________________________________________________________________________________
//modificar socio/colaborador
//masculino
$s="UPDATE `condicion_vulnerabilidad_es` SET 
`discapacidad`= '$_POST[s_discapacitado_m]',
`cabeza_familia`='$_POST[s_madre_m]' ,
`adulto_mayor`= '$_POST[s_adulto_m]',
`indigena`= '$_POST[s_indigena_m]',
`com_negras`= '$_POST[s_negra_m]',
`campesino`= '$_POST[s_campesino_m]',
`reinsertado`= '$_POST[s_reinsertado_m]',
`victimas_armado`= '$_POST[s_victima_m]',
`vulnerabilidad_econo`='$_POST[s_vulnerable_m]' 
 WHERE `info_com_id`='$info_com_id' AND `total_rotulo_id`= '5' AND `sexo_id`='1' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `condicion_vulnerabilidad_es` SET 
`discapacidad`= '$_POST[s_discapacitado_f]',
`cabeza_familia`='$_POST[s_madre_f]' ,
`adulto_mayor`= '$_POST[s_adulto_f]',
`indigena`= '$_POST[s_indigena_f]',
`com_negras`= '$_POST[s_negra_f]',
`campesino`= '$_POST[s_campesino_f]',
`reinsertado`= '$_POST[s_reinsertado_f]',
`victimas_armado`= '$_POST[s_victima_f]',
`vulnerabilidad_econo`='$_POST[s_vulnerable_f]' 
 WHERE `info_com_id`='$info_com_id' AND `total_rotulo_id`= '5' AND `sexo_id`='2' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//otro condicion de vulnerabilidad masculino
$s="UPDATE `otro_condicion_vulneravibilidad` SET
 `nombre`='$_POST[otro_vulne_nom_s]',
 `cantidad`='$_POST[otro_vulne_m_s]'
  WHERE `info_com_id`='$info_com_id' AND `otro_rotulo_id`= '5' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//otro condicion de vulnerabilidad femenino
$s="UPDATE `otro_condicion_vulneravibilidad` SET
 `nombre`='$_POST[otro_vulne_nom_s]',
 `cantidad`='$_POST[otro_vulne_f_s]'
  WHERE `info_com_id`='$info_com_id' AND `otro_rotulo_id`= '5' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//_______________________________________________________________________________________________

//modificar miembros de las comunidades locales
//masculino
$s="UPDATE `negocio_comunidad` SET 
`socios`='$_POST[socio_m]',
`empleados_directos`='$_POST[directo_m_s]',
`empleados_indirectos`='$_POST[indirecto_m_s]',
`empleados_temporales`='$_POST[temporal_m_s]' 
WHERE `info_com_id`='$info_com_id' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `negocio_comunidad` SET 
`socios`='$_POST[socio_f]',
`empleados_directos`='$_POST[directo_f_s]',
`empleados_indirectos`='$_POST[indirecto_f_s]',
`empleados_temporales`='$_POST[temporal_f_s]' 
WHERE `info_com_id`='$info_com_id' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//otro miembro de comunidades locales
//masculino
$s="UPDATE `otro_negocio_comunidad` SET
 `nombre`='$_POST[otro_involucra_nom]',
 `cantidad`='$_POST[otro_involucra_m]' 
 WHERE `info_com_id`='$info_com_id' AND `sexo_id`='1'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//femenino
$s="UPDATE `otro_negocio_comunidad` SET
 `nombre`='$_POST[otro_involucra_nom]',
 `cantidad`='$_POST[otro_involucra_f]' 
 WHERE `info_com_id`='$info_com_id' AND `sexo_id`='2'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//____________________________________________________________________________________________________

//modificar datos de actividades
$actividades_check = $_POST['actividades'];
$actividades_confirmacion = $_POST['actividades_hidden'];
$actividades_recurso = $_POST['actividades_recurso'];
$actividades_desc = $_POST['actividades_desc'];
$resultado_nocheck = array_values(array_diff($actividades_confirmacion, $actividades_check));
for ($i=0; $i < sizeof($actividades_confirmacion) ; $i++) { 
	if ($actividades_check[$i]) {
	$s="UPDATE `actividades` SET
	 `recurso_id`='$actividades_recurso[$i]',
	 `descripcion`='$actividades_desc[$i]',
	 `confirmacion`='si' 
	 WHERE `info_com_id`='$info_com_id' AND `pregunta_id`=$actividades_check[$i]";
	mysqli_query($conn,$s) or die(mysqli_error($conn));

	}else if (!$actividades_check) {
	$s="UPDATE `actividades` SET
	 `recurso_id`='2',
	 `descripcion`='',
	 `confirmacion`='no' 
	 WHERE `info_com_id`='$info_com_id' AND `pregunta_id`=$actividades_confirmacion[$i]";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `actividades` SET
	 `recurso_id`='2',
	 `descripcion`='',
	 `confirmacion`='no' 
	 WHERE `info_com_id`='$info_com_id' AND `pregunta_id`=$resultado_nocheck[$i]";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
//____________________________________________________________________________________________________
//modificar datos de programas

$programa_check = $_POST['programa'];
$programa_confirmacion = $_POST['programa_hidden'];
$programa_recurso = $_POST['programa_recurso'];
$programa_desc = $_POST['programa_desc'];
$resultado_nocheck = array_values(array_diff($programa_confirmacion, $programa_check));
for ($i=0; $i < sizeof($programa_confirmacion) ; $i++) { 
	if ($programa_check[$i]) {
		$s="UPDATE `programa` SET
		 `recurso_id`='$programa_recurso[$i]',
		 `descripcion`='$programa_desc[$i]',
		 `confirmacion`='si'
		  WHERE `info_com_id`= $info_com_id AND `pregunta_id`='$programa_check[$i]' ";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}else if (!$programa_check) {
		$s="UPDATE `programa` SET
		 `recurso_id`='2',
		 `descripcion`='',
		 `confirmacion`='no'
		  WHERE `info_com_id`= $info_com_id AND `pregunta_id`='$programa_confirmacion[$i]' ";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
for ($i=0; $i <sizeof($resultado_nocheck) ; $i++) { 
	if ($resultado_nocheck[$i]) {
		$s="UPDATE `programa` SET
		 `recurso_id`='2',
		 `descripcion`='',
		 `confirmacion`='no'
		  WHERE `info_com_id`= $info_com_id AND `pregunta_id`='$resultado_nocheck[$i]' ";
		mysqli_query($conn,$s) or die(mysqli_error($conn));
	}
}
//otro programa
$otro_programa_hidden=$_POST['otro_programa_hidden'];
$otro_programa_nom=$_POST['otro_programa_nom'];
$otro_programa_recurso=$_POST['otro_programa_recurso'];
$otro_programa_desc=$_POST['otro_programa_desc'];

for ($i=0; $i <count($otro_programa_hidden) ; $i++) { 
	$s="UPDATE `otro_programa` SET
	 `recurso_id`='$otro_programa_recurso[$i]',
	 `nombre`='$otro_programa_nom[$i]',
	 `descripcion`='$otro_programa_desc[$i]' 
	 WHERE `info_com_id`= $info_com_id AND `id`='$otro_programa_hidden[$i]'";
mysqli_query($conn,$s);
}
//____________________________________________________________________________________________________
//modificar datos de apoyo
$apoyo_hidden = $_POST['apoyo_hidden'];
$apoyo_descripcion = $_POST['apoyo_descripcion'];
$apoyo_entidad = $_POST['apoyo_entidad'];
$apoyo_tipo = $_POST['apoyo_tipo'];
$apoyo_anio = $_POST['apoyo_anio'];

for ($i=0; $i <sizeof($apoyo_hidden); $i++) {
$s="UPDATE `apoyo` SET 
`descripcion`='$apoyo_descripcion[$i]',
`nombre_entidad`='$apoyo_entidad[$i]',
`tipo_entidad_id`='$apoyo_tipo[$i]',
`año`='$apoyo_anio[$i]' 
WHERE `info_com_id`= $info_com_id AND `id` ='$apoyo_hidden[$i]' ";
mysqli_query($conn,$s);
}
//________________________________________________________________________________________________________
//modificar en cadena de valor
$cadena=$_POST['cadena_hidden'];
$cadena_si_no=$_POST['cadena_si_no'];
for ($i=0; $i <sizeof($cadena) ; $i++) {
$s="UPDATE `cadena_valor` SET 
`respuesta_id`='$cadena_si_no[$i]' 
	WHERE `info_com_id`= $info_com_id AND `pregunta_id` = '$cadena[$i]'";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//otro cadena de valor
$otro_cadena=$_POST['otro_cadena_nom'];
$otro_cadena_hidden=$_POST['otro_cadena_hidden'];
for ($i=0; $i <sizeof($otro_cadena) ; $i++) { 
	$s="UPDATE `cadena_valor` SET 
`otro_nombre`='$otro_cadena[$i]' 
	WHERE `id`='$otro_cadena_hidden[$i]' AND `info_com_id`= $info_com_id AND `pregunta_id` = '136'";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//_____________________________________________________________________________________________________
//insertar sostenibilidad economica
$sost_hidden = $_POST['sost_hidden'];
// $bien = $_POST['bien_hidden'];
$unidad_v_anual = $_POST['unidad_v_anual'];
$unidad_medida = $_POST['unidad_medida'];
$cantidad_unidad = $_POST['cantidad'];
$costo_pro_unidad = $_POST['costo_pro_unidad'];
$precio_v_unitario = $_POST['precio_v_unitario'];
$ganancia_unidad = $_POST['ganancia_unidad'];
$venta_anual = $_POST['venta_anual'];
$ingresos_sup_costo = $_POST['ingresos_sup_costo'];

for ($i=0; $i <sizeof($sost_hidden); $i++) {
$s="UPDATE `sost_economica` SET 
`u_vendidadas_anuales`='$unidad_v_anual[$i]',
`unidad_medida_id`='$unidad_medida[$i]',
`cantidad_unidad`='$cantidad_unidad[$i]',
`costo_produccion_unidad`='$costo_pro_unidad[$i]',
`precio_v_unitario`='$precio_v_unitario[$i]',
`ganancia_unidad`='$ganancia_unidad[$i]',
`ventas_anual`='$venta_anual[$i]',
`ingreso_superior`='$ingresos_sup_costo[$i]' 
WHERE `id`='$sost_hidden[$i]' AND `info_com_id`= '$info_com_id'";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}
// otro bien o servicio de sostenbulidad economica
$s="UPDATE `bienes_servicios_adicionales` SET 
`bien`='$_POST[otro_bien_nom]',
`costo_total_produccion`='$_POST[otro_t_produccion]',
`venta_total_anual`='$_POST[otro_venta_total]',
`ingresos_superior`='$_POST[ingresos_sup_costo_otro]' 
WHERE `info_com_id`= '$info_com_id'";
mysqli_query($conn,$s) or die(mysqli_error($conn));

//modificar total de ventas
$s="UPDATE `total_ventas` SET 
`costo_pro_insumos_totales`='$_POST[costo_p_insumos]',
`costo_pro_mano_obra`='$_POST[costo_p_mano_obra]',
`total_ventas_realizadas_ant`='$_POST[total_ventas_realizadas]'
WHERE `info_com_id`= '$info_com_id' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
//________________________________________________________________________________________________________
// modificar Comercializacion
$comercializacion = $_POST['comercializacion_hidden'];
$numero = $_POST['comer_numero'];
$local = $_POST['comer_local'];
$regional = $_POST['comer_regional'];
$nacional = $_POST['comer_nacional'];
$global = $_POST['comer_global'];
$observacion = $_POST['comer_observacion'];

for ($i=0; $i <sizeof($comercializacion); $i++) {
	$s="UPDATE `comercializacion` SET 
	`numero`='$numero[$i]',
	`local`='$local[$i]',
	`regional`='$regional[$i]',
	`nacional`='$nacional[$i]',
	`global`='$global[$i]',
	`observacion`='$observacion[$i]' 
	WHERE `info_com_id`= '$info_com_id' AND `pregunta_id` = '$comercializacion[$i]' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}
//__________________________________________________________________________________________________
//modificar turismo
$turismo = $_POST['turismo_hidden'];
$turismo_respuesta = $_POST['turismo_si_respuesta'];
for ($i=0; $i <sizeof($turismo); $i++) {
	$s="UPDATE `turismo` SET 
	`respuesta_id`='$turismo_respuesta[$i]' 
	WHERE `info_com_id`= '$info_com_id' AND `pregunta_id` = '$turismo[$i]' ";
mysqli_query($conn,$s) or die(mysqli_error($conn));
}


?>