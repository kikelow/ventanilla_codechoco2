$(document).ready(function() {
	
	$('#empresa').select2();

});
//-----------------------------------Cargar formulario----------------------------------
$('#empresa').change(function(event) {
	event.preventDefault();
	var empresa = $('#empresa').val()

	$.ajax({
		url: 'evaluacion/plan_mejora/llenar_index2.php',
		type: 'POST',
		data: {empresa: empresa},
	})
	.done(function(respuesta) {
		// console.log(respuesta)
		$('#cargar_infos').html(respuesta)
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
			$('#btn_verificacion1').attr('disabled', 'disabled');
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