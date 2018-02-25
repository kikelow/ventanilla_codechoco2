<?php 
include "../../conexion.php";

 // Inserto los datos del representante legal
	 $s="INSERT INTO `persona`( `identificacion`,  `nombre1`, `nombre2`, `apellido1`, `paellido2`, `correo`, `celular`, `fijo`, `direccion`) VALUES ('$_POST[documento]','$_POST[representante]','','','','$_POST[correo]','$_POST[celular]','$_POST[fijo]','$_POST[direccion_c]')";
	mysqli_query($conn,$s);

//selecciono el id del ultimo representante legal insertado
	$s="SELECT id FROM persona WHERE id = (SELECT MAX(id) FROM persona)";
	$cs=mysqli_query($conn,$s);
	$persona_id="";
	while($resul=mysqli_fetch_array($cs)){
		$persona_id=$resul[0];
	}
	//sacar la fecha
		date_default_timezone_set('UTC');
		$fecha_registro = date("Y-m-d H:i:s");

//inserto los datos de la empresa
	$s="INSERT INTO `empresa`(`tipo_persona_id`, `tipo_identificacion_id`, `identificacion`, `razon_social`, `persona_id`, `municipio_id`, `vereda`, `direccion`, `aut_ambiental`, `coodenadas_n`, `coordenadas_w`, `altitud`, `area`, `si_no_pot_id`, `fami_empresa_si_no`, `tamaño_empresa_id`, `fecha_registro`, `descripcion`, `impacto_amb_si_no`, `desc_impacto_amb`, `impacto_soc_si_no`, `desc_impacto_soc`, `num_socios`, `asociacion_si_no`, `subsector_id`, `etapa_empresa_id`, `const_legalmente_sino`, `año_funcionamiento`, `personeria_juridi_sino`, `tipo_personeria`, `opera_actualmente_sino`, `año_func_desp_reg_camara`, `informacion_as`, `verificacion1`, `verificacion2`, `plan_mejora`) VALUES ('$_POST[t_persona]','$_POST[t_identificacion]','$_POST[identificacion]','$_POST[razon_social]','$persona_id','$_POST[municipio]','$_POST[vereda]','$_POST[direccion_p]','$_POST[autoridad_ambiental]','$_POST[coordenada_n]','$_POST[coordenada_w]','$_POST[altitud]','$_POST[area]','$_POST[pot]','$_POST[famiempresa]','$_POST[tamaño_empresa]','$fecha_registro','$_POST[desc_negocio]','$_POST[impacto_amb]','$_POST[desc_imp_ambiental]','$_POST[impacto_soc]','$_POST[desc_imp_social]','$_POST[num_asociados]','$_POST[asosiacion]','$_POST[subsector]','$_POST[etapa_empresa]','$_POST[cmb_legal]','$_POST[legal]','$_POST[cmb_personeria]','$_POST[personeria]','$_POST[cmb_ope_actualidad]','$_POST[año_desp_registro]','no','no','no','no')";
	mysqli_query($conn,$s) or die(mysqli_error($conn));
//selecciono el id de l ultim empresa insertada
	$s="SELECT id FROM empresa WHERE id = (SELECT MAX(id) FROM empresa)";
	$cs=mysqli_query($conn,$s);
	$empresa_id="";
	while($resul=mysqli_fetch_array($cs)){
		$empresa_id=$resul[0];
	}
	//insertar datos en la tabla empleado sexo
	$s="INSERT INTO `empleado_sexo`(`empresa_id`, `socio_empleado_id`, `sexo_id`, `cantidad`) VALUES
	('$empresa_id','1','1','$_POST[masculino_1]'),('$empresa_id','1','2','$_POST[femenino_1]'),
	('$empresa_id','2','1','$_POST[masculino_2]'),('$empresa_id','2','2','$_POST[femenino_2]'),
	('$empresa_id','3','1','$_POST[masculino_3]'),('$empresa_id','3','2','$_POST[femenino_3]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla empleado_edad
	$s="INSERT INTO `empleado_edad`(`empresa_id`, `edad_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[entre_18_30]'), ('$empresa_id','2','$_POST[entre_30_50]'), ('$empresa_id','3','$_POST[mayor_50]')";
	mysqli_query($conn,$s);

	//insetar datos en la tabla tipo_vinculacion
	$s="INSERT INTO `tipo_vinculacion`(`empresa_id`, `vinculacion_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[indefinido]'), ('$empresa_id','2','$_POST[definido]'), ('$empresa_id','3','$_POST[por_dias]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla nivel_educativo
	$s="INSERT INTO `nivel_educativo`(`empresa_id`, `nivel_id`, `cantiad`) VALUES('$empresa_id','1','$_POST[primaria]'), ('$empresa_id','2','$_POST[bachillerato]'),('$empresa_id','3','$_POST[tecnico]'), ('$empresa_id','4','$_POST[universitario]'), ('$empresa_id','5','$_POST[otro]')";
	mysqli_query($conn,$s);

	//insertar datos en la tabla demografia
	$s="INSERT INTO `demografia`(`empresa_id`, `desc_demografia_id`, `si_no_id`, `cantidad`) VALUES('$empresa_id','1','$_POST[cmb_indigena]','$_POST[indigena]'), ('$empresa_id','2','$_POST[cmb_discapacitado]','$_POST[discapacitado]'),('$empresa_id','3','$_POST[cmb_adulto]','$_POST[adulto]'), ('$empresa_id','4','$_POST[cmb_madre_familia]','$_POST[madre_familia]'),('$empresa_id','5','$_POST[cmb_reinsertados]','$_POST[reinsertados]'), ('$empresa_id','6','$_POST[cmb_desplazado]','$_POST[desplazado]'),('$empresa_id','7','$_POST[cmb_demografia_otro]','$_POST[demografia_otro]') ";
	mysqli_query($conn,$s);

	//insetar datos en la tabla activdad_empresa
	$check = $_POST['actividad_emp'];
	for ($i=0; $i <sizeof($check); $i++) { 
		$s="INSERT INTO `actividad_empresa`(`empresa_id`, `actividad_item_id`) VALUES('$empresa_id','".$check[$i]."')";
		mysqli_query($conn,$s) ;
	}

	// Insertar datos en la tabla de bienes o servicios
	$s="INSERT INTO `bienes_servicios`(`empresa_id`, `nombre`, `lider`) VALUES ('$empresa_id','$_POST[b1]',''),  ('$empresa_id','$_POST[b2]',''),  ('$empresa_id','$_POST[b3]',''),  ('$empresa_id','$_POST[b4]',''),  ('$empresa_id','$_POST[b5]',''),  ('$empresa_id','','$_POST[b_lider]')";
	mysqli_query($conn,$s);

	//





 ?>
