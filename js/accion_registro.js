var total_3 ="";

// verificar el total socios de la empresa
$('#femenino_1, #masculino_1').keyup(function(event) {
	var masculino_1 = $('#masculino_1').val()
	var femenino_1 = $('#femenino_1').val()
	
	if (masculino_1 == "") {
		masculino_1 = 0
	}else if (femenino_1 == "") {
		femenino_1 = 0
	}
	var resul_1 = Number(masculino_1) + Number(femenino_1)
	var total_1 = isNaN(resul_1)  ? 0 : resul_1;
	$('#total_1').val(total_1)
});
// verificar el total socios vinculados con la empresa
$('#femenino_2, #masculino_2').keyup(function(event) {
	var masculino_2 = $('#masculino_2').val()
	var femenino_2 = $('#femenino_2').val()
	
	if (masculino_2 == "") {
		masculino_2 = 0
	}else if (femenino_2 == "") {
		femenino_2 = 0
	}
	var resul_2 = Number(masculino_2) + Number(femenino_2)
	var total_2 = isNaN(resul_2)  ? 0 : resul_2;
	$('#total_2').val(total_2)
});
// verificar el total  de empleados 
$('#femenino_3, #masculino_3').keyup(function(event) {
	var masculino_3 = $('#masculino_3').val()
	var femenino_3 = $('#femenino_3').val()
	
	if (masculino_3 == "") {
		masculino_3 = 0
	}else if (femenino_3 == "") {
		femenino_3 = 0
	}
	var resul_3 = Number(masculino_3) + Number(femenino_3)
	total_3 = isNaN(resul_3)  ? 0 : resul_3;
	$('#total_3').val(total_3)
});
//llenar combo dpartamento
$('#departamento').change(function(event) {
	var departamento = $('#departamento').val()
	var id = ""
	var nombre = ""
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {

        $('#municipio').html('<option disabled selected>Seleccione...</option>')  
        $('#municipio').append(respuesta)
		$('#municipio').material_select();

	})
	$.ajax({
		url: 'emprendimiento/registro/combo_region.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
		var aut = $.parseJSON(respuesta);
		
		$('#region').html('<option value='+aut['id']+'>'+aut['nombre']+'</option>')  
		$('#region').material_select();
		

	})
		
});

//cargar autoridad ambiental 
$('#municipio').change(function(event) {
	var municipio = $('#municipio').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_autoridad.php',
		type: 'POST',
		 // dataType: "json",
		data: {municipio: municipio},
	})
	.done(function(respuesta) {
		$('#autoridad_ambiental').val(respuesta)
		$('#autoridad_ambiental').focus();

	})
});


//llenar combo sector
$('#categoria').change(function(event) {
	var categoria = $('#categoria').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_sector.php',
		type: 'POST',
		data: {categoria: categoria},
	})
	.done(function(respuesta) {  
		$('#sector').html('<option disabled selected>Seleccione...</option>')
        $('#sector').append(respuesta)
		$('#sector').material_select();
	})

	$('#subsector').html('<option disabled selected>Seleccione...</option>')
	$('#subsector').material_select();
});
//llenar combo subsector
$('#sector').change(function(event) {
	var sector = $('#sector').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_subsector.php',
		type: 'POST',
		data: {sector: sector},
	})
	.done(function(respuesta) {  
		$('#subsector').html('<option disabled selected>Seleccione...</option>')
        $('#subsector').append(respuesta)
		$('#subsector').material_select();
	})
});


//acciones para validar y luego registrar
$("#form_registro").submit(function(event) {
	event.preventDefault(); 

//total de los valores de edad de los empleados
	 var entre_18_30 = $('#entre_18_30').val()
	 var entre_30_50 = $('#entre_30_50').val()
	 var mayor_50 = $('#mayor_50').val()
	 if (entre_18_30 == "") {
	 	entre_18_30 = 0
	 }
	 else if (entre_30_50 == "") {
	 	entre_30_50 = 0
	 }else if (mayor_50 == "") {
	 	mayor_50 = 0
	 }
	var r = Number(entre_18_30) + Number(entre_30_50) + Number(mayor_50)
	var total_edad = isNaN(r)  ? 0 : r;

//total de los valores de tipo de vinculacion laboral
var indefinido = $('#indefinido').val()
var definido = $('#definido').val()
var por_dias = $('#por_dias').val()
if (indefinido == "") {
	indefinido = 0
}
else if (definido == "") {
	definido = 0
}
else if (por_dias == "") {
	por_dias = 0
}
var r = Number(indefinido) + Number(definido) + Number(por_dias)
var total_vinculacion = isNaN(r)  ? 0 : r;
//total de valores de nivel educativo
var primaria = $('#primaria').val()
var bachillerato = $('#bachillerato').val()
var tecnico = $('#tecnico').val()
var universitario = $('#universitario').val()
var otro = $('#otro').val()
if (primaria == "") {
	primaria = 0
}else if (bachillerato == "") {
	bachillerato = 0
}else if (tecnico == "") {
	tecnico = 0
}else if (universitario == "") {
	universitario = 0
}else if (otro == "") {
	otro = 0
}
var r = Number(primaria)+Number(bachillerato)+Number(tecnico)+Number(universitario)+Number(otro)
var total_educativo = isNaN(r)  ? 0 : r;

	
///aqui inician las validaciones
if (! $('#cmb_verificacion').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	 // $('#person').attr('required');
	$('#div_verificacion').focus().addClass("red-text");
	// alert("Debe seleccioar el tipo de persona");
	$('html, body').animate({scrollTop: $( $( '#cmb_verificacion' ) ).offset().top}, 1000);
}
else if ( ! $('#departamento').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#div_verificacion').focus().removeClass("red-text")
	$('#depto_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $( '#departamento')).offset().top}, 1000);
}
else if ( ! $('#municipio').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#depto_valida').focus().removeClass("red-text")
	$('#municipio_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $( '#municipio')).offset().top}, 1000);
}
else if (! $('#t_persona').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 1);
	$('#municipio_valida').focus().removeClass("red-text")
	$('#ti_person').addClass("red-text");
	$('#t_persona').focus();
	$('html, body').animate({scrollTop: $( $( '#t_persona' ) ).offset().top}, 1000);
}
else if ( ! $('#t_identificacion').val()) {
	$('.collapsible').collapsible('close', 1);
	$('.collapsible').collapsible('open', 1);
	$('#ti_person').removeClass("red-text")
	$('#t_identifica').addClass("red-text")
	$('#t_identificacion').focus()
	$('html, body').animate({scrollTop: $( $( '#t_identificacion' ) ).offset().top}, 1000);
}
else if ($('#identificacion').val()=="") {
	$('.collapsible').collapsible('close', 1);
	$('.collapsible').collapsible('open', 1);
	$('#t_identifica').removeClass("red-text")
	$('#identificacion').focus().addClass("invalid")
}else if ($('#razon_social').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#razon_social').focus().addClass("invalid")
}
else if ($('#representante').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#representante').focus().addClass("invalid")
}
else if ($('#documento').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#documento').focus().addClass("invalid")
}

else if ( ! $('#categoria').val()) {
	$('.collapsible').collapsible('close',1);
	$('.collapsible').collapsible('open', 3);
	$('#municipio_valida').removeClass("red-text")
	$('#categoria_valida').addClass("red-text")
	$('#categoria').focus();
	$('html, body').animate({scrollTop: $( $( '#categoria')).offset().top}, 1000);
}
else if ( ! $('#sector').val()) {
	$('.collapsible').collapsible('close',3);
	$('.collapsible').collapsible('open',3);
	$('#categoria_valida').removeClass("red-text")
	$('#sector_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $('#sector')).offset().top}, 1000);
}
else if ( ! $('#subsector').val()) {
	$('.collapsible').collapsible('close',3);
	$('.collapsible').collapsible('open', 3);
	$('#sector_valida').removeClass("red-text")
	$('#subsector_valida').addClass("red-text")
	$('#subsector').focus()
	$('html, body').animate({scrollTop: $( $('#sector')).offset().top}, 1000);
}
// else if ($('#total_1').val()==0) {
// 	$('#subsector_valida').removeClass("red-text")
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_1').focus().addClass("invalid")
// }
// else if (Number($('#total_2').val())  > Number($('#total_1').val())) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_1').focus().removeClass("invalid")
// 	 $('#total_2').focus().addClass("invalid")
// 	 $('#mensaje1').html('<span class="red-text">El total no puede ser mayor al de la pregunta 1</span>')
// }
// else if ( (Number($('#femenino_2').val())  > Number($('#femenino_1').val())) || (Number($('#masculino_2').val())  > Number($('#masculino_1').val())) ) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_2').focus().removeClass("invalid")
// 	 $('#mensaje1').focus()
// 	 $('#mensaje1').html('<span class="red-text">El valor del sexo no puede ser mayor al de la pregunta 1</span>')
// }
// else if ( Number(total_edad) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje1').html(" ")
// 	 $('#mensaje_edad').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// }
// else if ( Number(total_vinculacion) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje_edad').html(" ")
// 	 $('#mensaje_vinculacion').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// }
// else if (Number(total_educativo) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje_vinculacion').html(" ")
// 	 $('#mensaje_educativo').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// 	// document.getElementById('mensaje_educativo').scrollIntoView();
// $('html, body').animate({scrollTop: $( $( '#mensaje_educativo' ) ).offset().top}, 1000);

// }
else if (! $('#tipo_bien').val()) {
	$('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 3);
	$('#tipo_b').addClass("red-text")
	$('#tipo_bien').focus()								
	$('#subsector_valida').removeClass("red-text")
	$('html, body').animate({scrollTop: $( $( '#bien_lider' ) ).offset().top}, 1000);
}else if ($('#bien_lider').val()=="") {
	 $('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 3);
	 $('#subsector_valida').removeClass("red-text")
	 $('#bien_lider').focus().addClass("invalid")
}
else if ($('#entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 4);
	 $('#entrevistado').focus().addClass("invalid")
}
else if ($('#identificacion_entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 4);
	 $('.collapsible').collapsible('open', 4);
	 $('#identificacion_entrevistado').focus().addClass("invalid")
}
else if ($('#cargo_entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 4);
	 $('.collapsible').collapsible('open', 4);
	 $('#cargo_entrevistado').focus().addClass("invalid")
}


else {
	var formData = new FormData(document.getElementById("form_registro"));
	$.ajax({
		url: 'emprendimiento/registro/insertar.php',
		type: 'POST',
		data: formData,
		cache: false,
        contentType: false,
	    processData: false,
		beforeSend: function() {
	  	$('#registrar_emp').attr('disabled', 'disabled');
   	// console.log('cargando')
   	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
    	// console.log(respuesta)
    	swal ({
  				icon: "success",
  				 text: "Datos INSERTADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	setTimeout("document.location=document.location",1500);
    }
	})
	
	}

});
////////////////////////////////////////------modificar------ ////////////////////////////////////////////////////////////////////////

//para cargar el formulario
$('#empresa').select2()
// $('#form_modificar').hide()
$('#empresa').change(function(event) { 
var empresa_id = $('#empresa').val()
// var region_m = $('#region_m').val()
// alert(region_m)
$.ajax({
  url: 'evaluacion/formato_inscripcion/modificar/llenar_formulario.php',
   type: 'POST',
   data: {empresa_id: empresa_id},
 beforeSend: function() {
			$('#form_modificar').hide()
			$('#preload').addClass('progress')
    },
    success: function(respuesta) {
    	$('#form_modificar').show()
    	$('#preload').removeClass('progress')
    	$('#cargar_info').html(respuesta)
    }
 })

});

$('#departamento_m').change(function(event) {
	var departamento = $('#departamento_m').val()
	var id = ""
	var nombre = ""
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
        $('#municipio_m').html('<option disabled selected>Seleccione...</option>')  
        $('#municipio_m').append(respuesta)
		$('#municipio_m').material_select();

	})



	$.ajax({
		url: 'emprendimiento/registro/combo_region.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
		var aut = $.parseJSON(respuesta);

		$('#region_m').html('<option value='+aut['id']+'>'+aut['nombre']+'</option>')  
		$('#region_m').material_select();
		$('#autoridad_ambiental_m').val(aut['autoridad'])
		$('#autoridad_ambiental_m').focus();

	})
		// $('#municipio').html('<option disabled selected>Seleccione...</option>')
		// $('#municipio').material_select();
});
//comobos de categoria sector y sub_sector
$('#categoria_m').change(function(event) { 
var categoria_m = $('#categoria_m').val()

$.ajax({
   url: 'evaluacion/formato_inscripcion/modificar/combo_sector_modificar.php',
   type: 'POST',
   data: {categoria_m: categoria_m},
 })
 .done(function(respuesta) {
 	$('#sector_m').html(" <option disabled selected>Seleccione...</option>")
    $('#sector_m').append(respuesta)
	$('#sector_m').material_select();
 })

$('#subsector_m').html(" <option disabled selected>Seleccione...</option>")
$('#subsector_m').material_select();
});

$('#sector_m').change(function(event) { 
var sector_m = $('#sector_m').val()
$.ajax({
   url: 'evaluacion/formato_inscripcion/modificar/combo_subsector_modificar.php',
   type: 'POST',
   data: {sector_m: sector_m},
 })
 .done(function(respuesta) {
 	$('#subsector_m').html(" <option disabled selected>Seleccione...</option>")
    $('#subsector_m').append(respuesta)
	$('#subsector_m').material_select();
 })
});




var total_3_m ="";
// verificar el total socios de la empresa
$('#femenino_1_m, #masculino_1_m').keyup(function(event) {
	var masculino_1_m = $('#masculino_1_m').val()
	var femenino_1_m = $('#femenino_1_m').val()
	
	if (masculino_1_m == "") {
		masculino_1_m = 0
	}else if (femenino_1_m == "") {
		femenino_1_m = 0
	}
	var resul_1 = Number(masculino_1_m) + Number(femenino_1_m)
	var total_1 = isNaN(resul_1)  ? 0 : resul_1;
	$('#total_1_m').val(total_1)
});
// verificar el total socios vinculados con la empresa
$('#femenino_2_m, #masculino_2_m').keyup(function(event) {
	var masculino_2_m = $('#masculino_2_m').val()
	var femenino_2_m = $('#femenino_2_m').val()
	
	if (masculino_2_m == "") {
		masculino_2_m = 0
	}else if (femenino_2_m == "") {
		femenino_2_m = 0
	}
	var resul_2 = Number(masculino_2_m) + Number(femenino_2_m)
	var total_2 = isNaN(resul_2)  ? 0 : resul_2;
	$('#total_2_m').val(total_2)
});
// verificar el total  de empleados 
$('#femenino_3_m, #masculino_3_m').keyup(function(event) {
	var masculino_3_m = $('#masculino_3_m').val()
	var femenino_3_m = $('#femenino_3_m').val()
	
	if (masculino_3_m == "") {
		masculino_3_m = 0
	}else if (femenino_3_m == "") {
		femenino_3_m = 0
	}
	var resul_3 = Number(masculino_3_m) + Number(femenino_3_m)
	total_3_m = isNaN(resul_3)  ? 0 : resul_3;
	$('#total_3_m').val(total_3_m)
});


//depto y municipio activida
$('#actividad_empresa_depto1').change(function(event) {
	var departamento = $('#actividad_empresa_depto1').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
        $('#actividad_empresa_municipio1').html('<option disabled selected>Seleccione...</option>')  
        $('#actividad_empresa_municipio1').append(respuesta)
		$('#actividad_empresa_municipio1').material_select();

	})
});

$('#actividad_empresa_depto2').change(function(event) {
	var departamento = $('#actividad_empresa_depto2').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
        $('#actividad_empresa_municipio2').html('<option disabled selected>Seleccione...</option>')  
        $('#actividad_empresa_municipio2').append(respuesta)
		$('#actividad_empresa_municipio2').material_select();

	})

	$('#actividad_empresa_depto3').change(function(event) {
	var departamento = $('#actividad_empresa_depto3').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		 // dataType: "json",
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		 
        $('#actividad_empresa_municipio3').html('<option disabled selected>Seleccione...</option>')  
        $('#actividad_empresa_municipio3').append(respuesta)
		$('#actividad_empresa_municipio3').material_select();
	})
});
});

//_____________________ cuando de click en el botton modificar_____________________________________________
$('#form_modificar').submit(function(event) {
	 var entre_18_30 = $('#entre_18_30_m').val()
	 var entre_30_50 = $('#entre_30_50_m').val()
	 var mayor_50 = $('#mayor_50_m').val()
	 if (entre_18_30 == "") {
	 	entre_18_30 = 0
	 }
	 else if (entre_30_50 == "") {
	 	entre_30_50 = 0
	 }else if (mayor_50 == "") {
	 	mayor_50 = 0
	 }
	var r = Number(entre_18_30) + Number(entre_30_50) + Number(mayor_50)
	var total_edad = isNaN(r)  ? 0 : r;

//total de los valores de tipo de vinculacion laboral
var indefinido = $('#indefinido_m').val()
var definido = $('#definido_m').val()
var por_dias = $('#por_dias_m').val()
if (indefinido == "") {
	indefinido = 0
}
else if (definido == "") {
	definido = 0
}
else if (por_dias == "") {
	por_dias = 0
}
var r = Number(indefinido) + Number(definido) + Number(por_dias)
var total_vinculacion = isNaN(r)  ? 0 : r;
//total de valores de nivel educativo
var primaria = $('#primaria_m').val()
var bachillerato = $('#bachillerato_m').val()
var tecnico = $('#tecnico_m').val()
var universitario = $('#universitario_m').val()
var otro = $('#otro_m').val()
if (primaria == "") {
	primaria = 0
}else if (bachillerato == "") {
	bachillerato = 0
}else if (tecnico == "") {
	tecnico = 0
}else if (universitario == "") {
	universitario = 0
}else if (otro == "") {
	otro = 0
}
var r = Number(primaria)+Number(bachillerato)+Number(tecnico)+Number(universitario)+Number(otro)
var total_educativo = isNaN(r)  ? 0 : r;

//validaciones

	event.preventDefault();
//aqui inician las validaciones
if (! $('#cmb_verificacion').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	 // $('#person').attr('required');
	$('#div_verificacion').focus().addClass("red-text");
	// alert("Debe seleccioar el tipo de persona");
	$('html, body').animate({scrollTop: $( $( '#cmb_verificacion' ) ).offset().top}, 1000);
}
else if ( ! $('#departamento_m').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#div_verificacion').focus().removeClass("red-text")
	$('#depto_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $( '#departamento_m')).offset().top}, 1000);
}
else if ( ! $('#municipio_m').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#depto_valida').focus().removeClass("red-text")
	$('#municipio_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $( '#municipio_m')).offset().top}, 1000);
}
else if (! $('#t_persona').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 1);
	$('#municipio_valida').focus().removeClass("red-text")
	$('#ti_person').addClass("red-text");
	$('#t_persona').focus();
	$('html, body').animate({scrollTop: $( $( '#t_persona' ) ).offset().top}, 1000);
}
else if ( ! $('#t_identificacion').val()) {
	$('.collapsible').collapsible('close', 1);
	$('.collapsible').collapsible('open', 1);
	$('#ti_person').removeClass("red-text")
	$('#t_identifica').addClass("red-text")
	$('#t_identificacion').focus()
	$('html, body').animate({scrollTop: $( $( '#t_identificacion' ) ).offset().top}, 1000);
}
else if ($('#identificacion').val()=="") {
	$('.collapsible').collapsible('close', 1);
	$('.collapsible').collapsible('open', 1);
	$('#t_identifica').removeClass("red-text")
	$('#identificacion').focus().addClass("invalid")
}else if ($('#razon_social').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#razon_social').focus().addClass("invalid")
}
else if ($('#representante').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#representante').focus().addClass("invalid")
}
else if ($('#documento').val()=="") {
	 $('.collapsible').collapsible('close', 1);
	 $('.collapsible').collapsible('open', 1);
	 $('#documento').focus().addClass("invalid")
}

else if ( ! $('#categoria').val()) {
	$('.collapsible').collapsible('close',1);
	$('.collapsible').collapsible('open', 3);
	$('#municipio_valida').removeClass("red-text")
	$('#categoria_valida').addClass("red-text")
	$('#categoria').focus();
	$('html, body').animate({scrollTop: $( $( '#categoria')).offset().top}, 1000);
}
else if ( ! $('#sector').val()) {
	$('.collapsible').collapsible('close',3);
	$('.collapsible').collapsible('open',3);
	$('#categoria_valida').removeClass("red-text")
	$('#sector_valida').addClass("red-text")
	$('html, body').animate({scrollTop: $( $('#sector')).offset().top}, 1000);
}
else if ( ! $('#subsector').val()) {
	$('.collapsible').collapsible('close',3);
	$('.collapsible').collapsible('open', 3);
	$('#sector_valida').removeClass("red-text")
	$('#subsector_valida').addClass("red-text")
	$('#subsector').focus()
	$('html, body').animate({scrollTop: $( $('#sector')).offset().top}, 1000);
}
// else if ($('#total_1').val()==0) {
// 	$('#subsector_valida').removeClass("red-text")
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_1').focus().addClass("invalid")
// }
// else if (Number($('#total_2').val())  > Number($('#total_1').val())) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_1').focus().removeClass("invalid")
// 	 $('#total_2').focus().addClass("invalid")
// 	 $('#mensaje1').html('<span class="red-text">El total no puede ser mayor al de la pregunta 1</span>')
// }
// else if ( (Number($('#femenino_2').val())  > Number($('#femenino_1').val())) || (Number($('#masculino_2').val())  > Number($('#masculino_1').val())) ) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#total_2').focus().removeClass("invalid")
// 	 $('#mensaje1').focus()
// 	 $('#mensaje1').html('<span class="red-text">El valor del sexo no puede ser mayor al de la pregunta 1</span>')
// }
// else if ( Number(total_edad) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje1').html(" ")
// 	 $('#mensaje_edad').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// }
// else if ( Number(total_vinculacion) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje_edad').html(" ")
// 	 $('#mensaje_vinculacion').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// }
// else if (Number(total_educativo) != Number(total_3)) {
// 	 $('.collapsible').collapsible('close', 3);
// 	 $('.collapsible').collapsible('open', 3);
// 	 $('#mensaje_vinculacion').html(" ")
// 	 $('#mensaje_educativo').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
// 	// document.getElementById('mensaje_educativo').scrollIntoView();
// $('html, body').animate({scrollTop: $( $( '#mensaje_educativo' ) ).offset().top}, 1000);

// }
else if ($('#bien_lider').val()=="") {
	 $('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 3);
	 $('#subsector_valida').removeClass("red-text")
	 $('#bien_lider').focus().addClass("invalid")
}
else if (! $('#tipo_bien').val()) {
	$('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 3);
	$('#tipo_b').addClass("red-text")
	$('#tipo_bien').focus()								
	 $('#representante').focus().removeClass("invalid")
	$('html, body').animate({scrollTop: $( $( '#bien_lider' ) ).offset().top}, 1000);
}

else if ($('#entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 4);
	 $('#entrevistado').focus().addClass("invalid")
}
else if ($('#identificacion_entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 4);
	 $('.collapsible').collapsible('open', 4);
	 $('#identificacion_entrevistado').focus().addClass("invalid")
}
else if ($('#cargo_entrevistado').val() == "") {
	$('.collapsible').collapsible('close', 4);
	 $('.collapsible').collapsible('open', 4);
	 $('#cargo_entrevistado').focus().addClass("invalid")
}
else if ($('#observacion_general').val() == "") {
	$('.collapsible').collapsible('close', 5);
	 $('.collapsible').collapsible('open', 5);
	 $('#observacion_general').focus().addClass("invalid")
}
else {
	$('#mensaje_educativo2').html(" ")

	var formData = new FormData(document.getElementById("form_modificar"));
	var empresa = $('#empresa').val()
	$.ajax({
		url: 'evaluacion/formato_inscripcion/modificar/modificar.php?empresa='+empresa,
		type: 'POST',
		data:formData,
		cache: false,
        contentType: false,
	    processData: false,
		beforeSend: function() {
	  	// $('#modificar_emp').attr('disabled', 'disabled');
   	// console.log('cargando')
   	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
    	// console.log(respuesta)
    	swal ({
  				icon: "success",
  				 text: "Datos MODIFICADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	setTimeout("document.location=document.location",1500);
    }
	})
}
	
});

	$('#ano_view').hide()
$('#cmb_verificacion').change(function(event) {

	if ($('#cmb_verificacion').val() == 1) {
		$('#ano_view').show()
	}else{
		$('#ano_view').hide()
	}
});

$('#nombre_consejo').attr('readonly','readonly');
$('#consejo_com').change(function(event) {
	if ($('#consejo_com').val() == 2) {
		$('#nombre_consejo').attr('readonly','readonly');
	}else{
		$('#nombre_consejo').removeAttr('readonly')
	}
});

$('#nombre_junta').attr('readonly', 'readonly');
$('#junta').change(function(event) {
	if ($('#junta').val() == 2) {
		$('#nombre_junta').attr('readonly', 'readonly');
	}else{
		$('#nombre_junta').removeAttr('readonly')
	}
});

$('#nombre_cabildo').attr('readonly', 'readonly');
$('#cabildo').change(function(event) {
	if ($('#cabildo').val() == 2) {
		$('#nombre_cabildo').attr('readonly', 'readonly');
	}else{
		$('#nombre_cabildo').removeAttr('readonly')
	}
});

$('#nombre_territorio').attr('readonly', 'readonly');
$('#tcpi').change(function(event) {
	if ($('#tcpi').val() == 2) {
		$('#nombre_territorio').attr('readonly', 'readonly');
	}else{
		$('#nombre_territorio').removeAttr('readonly')
	}
});

$('#nombre_etnico').attr('readonly', 'readonly');
$('#grupo_etnico').change(function(event) {
	if ($('#grupo_etnico').val() == 2) {
		$('#nombre_etnico').attr('readonly', 'readonly');
	}else{
		$('#nombre_etnico').removeAttr('readonly')
	}
});
