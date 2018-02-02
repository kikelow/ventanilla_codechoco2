$(document).ready(function() {
$('#empresa').select2();

});

$('#registrar_informacion').click(function(event) {
	event.preventDefault();
	var empresa = $('#empresa').val()

	$.ajax({
		url: 'evaluacion/formato_informacion_as/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_informacion').serialize(),
	})
	.done(function(respuesta) {
		console.log(respuesta);
	})
	
});