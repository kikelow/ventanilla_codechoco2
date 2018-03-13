<?php 
include "../../conexion.php";
	$empresa = $_GET['empresa'];
	$persona_id="";

	$s="SELECT persona_id FROM empresa WHERE id = '$empresa'";
	$cs=mysqli_query($conn,$s);
	while($resul=mysqli_fetch_array($cs)){
		$persona_id=$resul[0];
	}

// modificar los datos del representante legal
$s = "UPDATE `persona` SET `identificacion`='$_POST[documento_m]',
	`nombre1`='$_POST[representante_m]',
	`correo`='$_POST[correo_m]',
	`celular`='$_POST[celular_m]',
	`fijo`='$_POST[fijo_m]',
	`direccion`='$_POST[direccion_c_m]'
	WHERE id = '$persona_id'";
	// mysqli_query($conn,$s);	

//modificar datos de la tabla persona
	$s ="UPDATE `empresa` SET `tipo_persona_id`='$_POST[t_persona_m]',`tipo_identificacion_id`='$_POST[t_identificacion_m]',`identificacion`='$_POST[identificacion_m]',`razon_social`='$_POST[razon_social_m]',`municipio_id`=$_POST[municipio_m],`vereda`='$_POST[vereda_m]',`direccion`='$_POST[direccion_p_m]',`coodenadas_n`='$_POST[coordenada_n_m]',`coordenadas_w`='$_POST[coordenada_w_m]',`altitud`='$_POST[altitud_m]',`area`='$_POST[area_m]',`si_no_pot_id`=$_POST[pot_m],`fami_empresa_si_no`='$_POST[famiempresa_m]',`tamaño_empresa_id`='$_POST[tamaño_empresa_m]',`descripcion`='$_POST[desc_negocio_m]',`impacto_amb_si_no`='$_POST[impacto_amb_m]',`desc_impacto_amb`='$_POST[desc_imp_ambiental_m]',`impacto_soc_si_no`='$_POST[impacto_soc_m]',`desc_impacto_soc`='$_POST[desc_imp_social_m]',`num_socios`='$_POST[num_asociados_m]',`asociacion_si_no`='$_POST[asociacion_m]',`subsector_id`='$_POST[subsector_m]',`etapa_empresa_id`='$_POST[etapa_empresa_m]',`const_legalmente_sino`='$_POST[cmb_legal_m]',`año_funcionamiento`='$_POST[legal_m]',`personeria_juridi_sino`='$_POST[cmb_personeria_m]',`tipo_personeria`='$_POST[personeria_m]',`opera_actualmente_sino`='$_POST[cmb_ope_actualidad_m]',`año_func_desp_reg_camara`='$_POST[año_desp_registro_m]' WHERE id = '$empresa'";
	// mysqli_query($conn,$s) ;

// modificar datos en la tabla empleado sexo
	$s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_1_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '1' AND sexo_id = '1'";
	 // mysqli_query($conn,$s);
	 $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_1_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '1' AND sexo_id = '2'";
	 // mysqli_query($conn,$s);
	 $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_2_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '2' AND sexo_id = '1'";
	 // mysqli_query($conn,$s);
	 $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_2_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '2' AND sexo_id = '2'";
	 // mysqli_query($conn,$s);
	 $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_3_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '3' AND sexo_id = '1'";
	 // mysqli_query($conn,$s);
	  $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_3_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '3' AND sexo_id = '2'";
	 // mysqli_query($conn,$s);

//modificar datos en la tabla empleado_edad
	$s="UPDATE `empleado_edad` SET `cantidad`='$_POST[entre_18_30_m]' WHERE empresa_id='$empresa' AND edad_id='1'";
	// mysqli_query($conn,$s);
	$s="UPDATE `empleado_edad` SET `cantidad`='$_POST[entre_30_50_m]' WHERE empresa_id='$empresa' AND edad_id='2'";
	// mysqli_query($conn,$s);
	$s="UPDATE `empleado_edad` SET `cantidad`='$_POST[mayor_50_m]' WHERE empresa_id='$empresa' AND edad_id='3'";
	// mysqli_query($conn,$s);

//Modificar datos en la tabla tipo_vinculacion
	$s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[indefinido_m]' WHERE empresa_id='$empresa' AND vinculacion_id='1'";
	// mysqli_query($conn,$s);
	$s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[definido_m]' WHERE empresa_id='$empresa' AND vinculacion_id='2'";
	// mysqli_query($conn,$s);
	$s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[por_dias_m]' WHERE empresa_id='$empresa' AND vinculacion_id='3'";
	// mysqli_query($conn,$s);

//Modificar datos en la tabla nivel_educativo
	$s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[primaria_m]' WHERE empresa_id='$empresa' AND nivel_id='1'	";
	// mysqli_query($conn,$s);
	$s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[bachillerato_m]' WHERE empresa_id='$empresa' AND nivel_id='2'	";
	// mysqli_query($conn,$s);
	$s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[tecnico_m]' WHERE empresa_id='$empresa' AND nivel_id='3'	";
	// mysqli_query($conn,$s);
	$s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[universitario_m]' WHERE empresa_id='$empresa' AND nivel_id='4'	";
	// mysqli_query($conn,$s);
	$s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[otro_m]' WHERE empresa_id='$empresa' AND nivel_id='5'	";
	// mysqli_query($conn,$s);

//insertar datos en la tabla demografia
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_indigena_m]',`cantidad`='$_POST[indigena_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='1'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_discapacitado_m]',`cantidad`='$_POST[discapacitado_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='2'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_adulto_m]',`cantidad`='$_POST[adulto_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='3'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_madre_familia_m]',`cantidad`='$_POST[madre_familia_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='4'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_reinsertados_m]',`cantidad`='$_POST[reinsertados_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='5'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_desplazado_m]',`cantidad`='$_POST[desplazado_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='6'";
	// mysqli_query($conn,$s);
	$s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_demografia_otro_m]',`cantidad`='$_POST[demografia_otro_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='7'";
	// mysqli_query($conn,$s);

// Modificar de actividad empresa checkbox
	$check = $_POST['actividad_emp_m'];
	$confirmacion = $_POST['actividad_emp_hidden_m'];
	$resultado_chequeado = array_intersect($confirmacion,$check);
	$resultado_nochequeado = array_diff($confirmacion,$check);
	for ($i=0; $i <sizeof($confirmacion); $i++) {
	
		if ($resultado_nochequeado[$i]) {
		$s="UPDATE `actividad_empresa` SET 
	`confirmacion`='no' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$resultado_nochequeado[$i]."'";
		// mysqli_query($conn,$s);	
		}else if ($resultado_chequeado[$i]) {
			$s="UPDATE `actividad_empresa` SET 
		`confirmacion`='si' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$resultado_chequeado[$i]."' ";
			// mysqli_query($conn,$s);
		}else if (!$check) {
			$s="UPDATE `actividad_empresa` SET 
		`confirmacion`='no' WHERE empresa_id ='$empresa' and `actividad_item_id` = '".$confirmacion[$i]."' ";
			// mysqli_query($conn,$s);
		}
	}

	// Modificar datos en la tabla de bienes o servicios
	$id_bien_servicio = array();
	$s="SELECT id FROM bienes_servicios WHERE empresa_id = '$empresa' AND lider = '' ";
	$cs=mysqli_query($conn,$s);
	while($resul=mysqli_fetch_array($cs)){
		array_push($id_bien_servicio, $resul[0]);
	}
	$bienes = $_POST['bienes_m'];
	for ($i=0; $i <sizeof($bienes); $i++) {
	$s="UPDATE `bienes_servicios` SET `nombre`='$bienes[$i]' WHERE id ='$id_bien_servicio[$i]' AND lider = '' ";
	// mysqli_query($conn,$s);
	}
	$s="UPDATE `bienes_servicios` SET `lider`='$_POST[b_lider_m]' WHERE empresa_id = '$empresa' AND lider != '' ";
	// mysqli_query($conn,$s);
	echo "bien";

 ?>