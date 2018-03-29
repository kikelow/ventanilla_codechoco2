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