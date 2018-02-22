var total_3 =""

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
$('#region').change(function(event) {
	var region = $('#region').val()
	var id = ""
	var nombre = ""
	$.ajax({
		url: 'emprendimiento/registro/combo_departamento.php',
		type: 'POST',
		 // dataType: "json",
		data: {region: region},
	})
	.done(function(respuesta) {
		 
        $('#departamento').html('<option disabled selected>Seleccione...</option>')  
        $('#departamento').append(respuesta)
		$('#departamento').material_select();
	})
});

//llenar combo municipio
$('#departamento').change(function(event) {
	var departamento = $('#departamento').val()
	// console.log(departamento)
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		$('#municipio').html('<option disabled selected>Seleccione...</option>')
        $('#municipio').append(respuesta)
		$('#municipio').material_select();
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
$("#registrar_emp").click(function(event) {
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

	 // alert (r)
///aqui inician las validaciones
	
if (! $('#t_persona').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#person').focus().addClass("red-text");

	alert("Debe seleccioar el tipo de persona");
}
// else if ( ! $('#t_identificacion').val()) {
// 	$('.collapsible').collapsible('close', 0);
// 	$('.collapsible').collapsible('open', 0);
//	$('#person').focus().removeClass("red-text")
// 	$('#identifica').addClass("red-text")
// }
// else if ($('#identificacion').val()=="") {
// 	$('.collapsible').collapsible('close', 0);
// 	$('.collapsible').collapsible('open', 0);
// 	$('#identifica').removeClass("red-text")
// 	$('#identificacion').focus().addClass("invalid")
// }else if ($('#razon_social').val()=="") {
// 	 $('.collapsible').collapsible('close', 0);
// 	 $('.collapsible').collapsible('open', 0);
// 	 $('#razon_social').focus().addClass("invalid")
// }
// else if ($('#representante').val()=="") {
// 	 $('.collapsible').collapsible('close', 0);
// 	 $('.collapsible').collapsible('open', 0);
// 	 $('#representante').focus().addClass("invalid")
// }
// else if ($('#documento').val()=="") {
// 	 $('.collapsible').collapsible('close', 0);
// 	 $('.collapsible').collapsible('open', 0);
// 	 $('#documento').focus().addClass("invalid")
// }
// else if ($('#correo').val()=="") {
// 	 $('.collapsible').collapsible('close', 0);
// 	 $('.collapsible').collapsible('open', 0);
// 	 $('#correo').focus().addClass("invalid")
// }
// else if ($('#total_1').val()==0) {
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
else if (Number(total_educativo) != Number(total_3)) {
	 $('.collapsible').collapsible('close', 3);
	 $('.collapsible').collapsible('open', 3);
	 $('#mensaje_vinculacion').html(" ")
	 $('#mensaje_educativo').focus().html('<span class="red-text">La suma de los valores debe ser igual al total de la pregunta 3</span>')
	 document.getElementById('mensaje_educativo').scrollIntoView();
}
else {

alert('todo bien')
	// $.ajax({
	// 	url: 'emprendimiento/registro/insertar.php',
	// 	type: 'POST',
	// 	data: $("#form_registro").serialize(),
	// })
	// .done(function(respuesta) {
	// 	console.log(respuesta)
	// })
	
	}

});
