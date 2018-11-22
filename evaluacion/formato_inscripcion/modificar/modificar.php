<?php 
include "../../../conexion.php";
	$empresa = $_GET['empresa'];
	$persona_id="";
	$empresario_id = "";

	$s="SELECT persona_id,empresario_id FROM empresa WHERE id = '$empresa'";
	$cs=mysqli_query($conn,$s);
	while($resul=mysqli_fetch_assoc($cs)){
		$persona_id=$resul['persona_id'];
		$empresario_id=$resul['empresario_id'];
	}

// modificar los datos del representante legal
$s = "UPDATE `persona` SET `identificacion`='$_POST[documento_m]',
	`nombre1`='$_POST[representante_m]',
	`correo`='$_POST[correo_m]',
	`celular`='$_POST[celular_m]',
	`fijo`='$_POST[fijo_m]',
	`direccion`='$_POST[direccion_c_m]'
	WHERE id = '$persona_id'";
	mysqli_query($conn,$s);	

// modificar los datos del empresario entrevistado
$s = "UPDATE `empresario` SET `identificacion`='$_POST[identificacion_entrevistado]',
	`nombre`='$_POST[entrevistado]',
	`cargo`='$_POST[cargo_entrevistado]',
	`carta_si_no`='$_POST[carta_m]'
	 WHERE id = '$empresario_id'";
	mysqli_query($conn,$s);	

//modificar datos de la tabla persona
	$s ="UPDATE `empresa` SET 
	`tipo_persona_id`='$_POST[t_persona_m]',
	`tipo_identificacion_id`='$_POST[t_identificacion_m]',
	`identificacion`='$_POST[identificacion_m]',
	`razon_social`='$_POST[razon_social_m]',
	`municipio_id`=$_POST[municipio_m],
	`vereda`='$_POST[vereda_m]',
	`latitud`='$_POST[latitud_m]',
	`longitud`='$_POST[longitud_m]',
	`altitud`='$_POST[altitud_m]',
	`fami_empresa_si_no`='$_POST[famiempresa_m]',
	`tamaño_empresa_id`='$_POST[tamaño_empresa_m]',
	`descripcion`='$_POST[desc_negocio_m]',
	`num_socios`='$_POST[num_asociados_m]',
	`organizacion`='$_POST[organizacion_m]',
	`subsector_id`='$_POST[subsector_m]',
	`etapa_empresa_id`='$_POST[etapa_empresa_m]',
	`años_funcionamiento`='$_POST[ano_func_m]',
	`año_func_desp_reg_camara`='$_POST[ano_func_des_camara_m]',
	`id_personeria`='$_POST[tipo_personeria_m]',
	`bien_serv_op`='$_POST[tipo_bien_m]',
	`pagina_web`='$_POST[pw_rd_m]',
	`obs_general`='$_POST[obs_generales_m]' WHERE id = '$empresa'";
	mysqli_query($conn,$s);

// modificar datos en la tabla empleado sexo
	// $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_1_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '1' AND sexo_id = '1'";
	//  mysqli_query($conn,$s);
	//  $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_1_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '1' AND sexo_id = '2'";
	//  mysqli_query($conn,$s);
	//  $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_2_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '2' AND sexo_id = '1'";
	//  mysqli_query($conn,$s);
	//  $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_2_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '2' AND sexo_id = '2'";
	//  mysqli_query($conn,$s);
	//  $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[masculino_3_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '3' AND sexo_id = '1'";
	//  mysqli_query($conn,$s);
	//   $s="UPDATE `empleado_sexo` SET  `cantidad`='$_POST[femenino_3_m]' WHERE empresa_id = '$empresa' AND socio_empleado_id = '3' AND sexo_id = '2'";
	//  mysqli_query($conn,$s);

//modificar datos en la tabla empleado_edad
	// $s="UPDATE `empleado_edad` SET `cantidad`='$_POST[entre_18_30_m]' WHERE empresa_id='$empresa' AND edad_id='1'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `empleado_edad` SET `cantidad`='$_POST[entre_30_50_m]' WHERE empresa_id='$empresa' AND edad_id='2'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `empleado_edad` SET `cantidad`='$_POST[mayor_50_m]' WHERE empresa_id='$empresa' AND edad_id='3'";
	// mysqli_query($conn,$s);

//Modificar datos en la tabla tipo_vinculacion
	// $s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[indefinido_m]' WHERE empresa_id='$empresa' AND vinculacion_id='1'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[definido_m]' WHERE empresa_id='$empresa' AND vinculacion_id='2'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `tipo_vinculacion` SET `cantidad`='$_POST[por_dias_m]' WHERE empresa_id='$empresa' AND vinculacion_id='3'";
	// mysqli_query($conn,$s);

//Modificar datos en la tabla nivel_educativo
	// $s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[primaria_m]' WHERE empresa_id='$empresa' AND nivel_id='1'	";
	// mysqli_query($conn,$s);
	// $s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[bachillerato_m]' WHERE empresa_id='$empresa' AND nivel_id='2'	";
	// mysqli_query($conn,$s);
	// $s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[tecnico_m]' WHERE empresa_id='$empresa' AND nivel_id='3'	";
	// mysqli_query($conn,$s);
	// $s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[universitario_m]' WHERE empresa_id='$empresa' AND nivel_id='4'	";
	// mysqli_query($conn,$s);
	// $s="UPDATE `nivel_educativo` SET `cantiad`='$_POST[otro_m]' WHERE empresa_id='$empresa' AND nivel_id='5'	";
	// mysqli_query($conn,$s);

//modificar datos en la tabla demografia
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_indigena_m]',`cantidad`='$_POST[indigena_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='1'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_discapacitado_m]',`cantidad`='$_POST[discapacitado_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='2'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_adulto_m]',`cantidad`='$_POST[adulto_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='3'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_madre_familia_m]',`cantidad`='$_POST[madre_familia_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='4'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_reinsertados_m]',`cantidad`='$_POST[reinsertados_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='5'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_desplazado_m]',`cantidad`='$_POST[desplazado_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='6'";
	// mysqli_query($conn,$s);
	// $s="UPDATE `demografia` SET `si_no_id`='$_POST[cmb_demografia_otro_m]',`cantidad`='$_POST[demografia_otro_m]' WHERE empresa_id='$empresa' AND desc_demografia_id='7'";
	// mysqli_query($conn,$s);
// Modificar año verificacion
	$año_veri = $_POST['año_veri'];
	$anio_hidden = $_POST['anio_hidden'];
	// print_r($año_veri);

	for ($i=0; $i < sizeof($año_veri); $i++) { 
		if ($año_veri[$i] != "") {

		$s = " UPDATE veri_empresa SET 
		`si_no_id`='$_POST[cmb_verificacion]',
		`anio`= '$año_veri[$i]' WHERE id_empresa = '$empresa' and id = '$anio_hidden[$i]' ";

		// echo $s;
		mysqli_query($conn,$s) or die (mysqli_error($conn));

		}else{
$s = " UPDATE veri_empresa SET 
		`si_no_id`='$_POST[cmb_verificacion]',
		`anio`= '0000' WHERE id_empresa = '$empresa' and id = '$anio_hidden[$i]' ";

		// echo $s;
		mysqli_query($conn,$s) or die (mysqli_error($conn));
	}

	}

// Modificar de actividad empresa checkbox
	$id_actividad_item = $_POST['actividad_item_hidden'];
	$si_no_actividad = $_POST['actividad_empresa_si_no'];
	$direccion = $_POST['direccion_actividad'];
	$municipio = $_POST['actividad_empresa_municipio'];
	$tipo_tenencia = $_POST['actividad_empresa_tenencia'];
	$area = $_POST['actividad_empresa_area'];
	$pot_actividad = $_POST['actividad_empresa_pot'];
	$observacion = $_POST['actividad_empresa_obs'];

	// $resultado_chequeado = array_intersect($confirmacion,$check);
	// $resultadom_nochequeado = array_diff($confirmacion,$check);
	
	for ($i=0; $i <sizeof($id_actividad_item); $i++) {
			
			$s ="UPDATE `actividad_empresa` SET 
			`si_no_actividad_id`='$si_no_actividad[$i]',
			`direccion`='$direccion[$i]',
			`municipio_id`='$municipio[$i]',
			`tipo_tenencia_id`='$tipo_tenencia[$i]',
			`area`='$area[$i]',
			`pot_si_no_id`='$pot_actividad[$i]',
			`observacion`='$observacion[$i]' WHERE empresa_id = '$empresa' and actividad_item_id = '$id_actividad_item[$i]' ";
			// echo $s;
			mysqli_query($conn,$s) or die(mysqli_error($conn));
	}

	// Modificar datos en la tabla de bienes o servicios
	$id_bien_servicio = array();
	$s="SELECT id FROM bienes_servicios WHERE empresa_id = '$empresa' AND lider = '' ";
	$cs=mysqli_query($conn,$s);
	while($resul=mysqli_fetch_assoc($cs)){
		array_push($id_bien_servicio, $resul['id']);
	}
	$bienes = $_POST['bienes_m'];
	for ($i=0; $i <sizeof($bienes); $i++) {
	$s="UPDATE `bienes_servicios` SET `nombre`='$bienes[$i]' WHERE id ='$id_bien_servicio[$i]' AND lider = '' ";
	mysqli_query($conn,$s);
	}
	$s="UPDATE `bienes_servicios` SET `lider`='$_POST[bien_lider]' WHERE empresa_id = '$empresa' AND lider != '' ";
	mysqli_query($conn,$s);
	
	// modificar la tabla de verificador
	$s="UPDATE `verificador` SET 
	`nombre`='$_POST[verificador_m]',
	`entidad`='$_POST[entidad_verificador_m]',
	`area`='$_POST[area_verificador_m]',
	`cargo`='$_POST[cargo_verificador_m]' WHERE `empresa_id`='$empresa'";
	mysqli_query($conn,$s);

	// modificar archivo
	$limite_kb = 5000;
	// if ($_FILES["img_emprendimiento_m"]["name"] == "") {
	// 	// $s = "UPDATE `img_empresa` SET imagen = '$_POST[nombre_imagen]' WHERE empresa_id = '$empresa'";
	// 	// mysqli_query($conn,$s);
 //    }else
    	if ($_FILES["img_emprendimiento_m"]["size"] <= $limite_kb * 1024) {
    		if (($_FILES["img_emprendimiento_m"]["type"] == "image/gif")
		   		|| ($_FILES["img_emprendimiento_m"]["type"] == "image/jpeg")
		   		|| ($_FILES["img_emprendimiento_m"]["type"] == "image/jpg")
		   		|| ($_FILES["img_emprendimiento_m"]["type"] == "image/png")){
    			$s="SELECT imagen FROM img_empresa WHERE empresa_id = '$empresa'";
          	$r = mysqli_query($conn,$s);
          	while ($rw=mysqli_fetch_assoc($r)) {
          		unlink("../imagenes/".$rw['imagen']);
          	}

        $tmp_name = $_FILES["img_emprendimiento_m"]["tmp_name"];
        $name = basename($_FILES["img_emprendimiento_m"]["name"]);
        $ruta = "../imagenes/$empresa"."_$name";
        $nombre = "$empresa"."_$name";

         move_uploaded_file($tmp_name, $ruta);

         $s = "UPDATE `img_empresa` SET imagen = '$nombre' WHERE empresa_id = '$empresa'";
		mysqli_query($conn,$s) or die(mysqli_error($conn));;
		// echo "$s";
    		}
    	}
    



 ?>
