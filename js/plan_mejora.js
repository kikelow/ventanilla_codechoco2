$(document).ready(function() {

	$('select').select2();
});
//-----------------------------------Cargar formulario----------------------------------
$('#empresa').change(function(event) {
	event.preventDefault();
	var empresa = $('#empresa').val()

	$.ajax({
		url: 'evaluacion/plan_mejora/llenar_index2.php',
		type: 'POST',
		data: {empresa: empresa},
		beforeSend: function() {
			$('#form_plan_mejora').hide()
			$('#preload').addClass('progress')
   	
    },
    success: function(respuesta) {
    	$('#form_plan_mejora').show()
    	$('#preload').removeClass('progress')
    	$('#cargar_infos').html(respuesta)
    }
	})
	
	
});
//------------------------------Enviar Datos Para Insertar--------------------------------------------
$('#form_plan_mejora').submit(function(event) {
	event.preventDefault();
	var empresa = $('#empresa').val()
	$.ajax({
		url: 'evaluacion/plan_mejora/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_plan_mejora').serialize(),
		beforeSend: function() {
			$('#insertar_plan_mejora').attr('disabled', 'disabled');
			swal ({
				text: "Procesando información!",
				button: {
					visible: false
				},
			});
		},success: function(respuesta) {
			console.log(respuesta)
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
});

//----------------------------  Seccion para modificar - ------------------

$('#empresa_m').change(function(event) {

	var empresa = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/plan_mejora/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa: empresa},
		beforeSend: function() {
			$('#form_plan_mejora_m').hide()
			$('#preload_m').addClass('progress')
   	
    },
    success: function(respuesta) {
    	$('#form_plan_mejora_m').show()
    	$('#preload_m').removeClass('progress')
    	$('#cargar_infos_m').html(respuesta)
    }
	})
	
});

//-------------------- Enviar datos para modificar ---------------------------
$('#form_plan_mejora_m').submit(function(event) {
	event.preventDefault();
	var empresa = $('#empresa_m').val()
	$.ajax({
		url: 'evaluacion/plan_mejora/modificar/modificar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_plan_mejora_m').serialize(),
		beforeSend: function() {
			$('#modificar_plan_mejora').attr('disabled', 'disabled');
			swal ({
				text: "Procesando información!",
				button: {
					visible: false
				},
			});
		},success: function(respuesta) {
			console.log(respuesta)
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
});