$(document).ready(function() {
$('#empresa').select2();

});

var tierra = []

$('#registrar_informacion').click(function(event) {
	event.preventDefault();
	// tierra.push($('.ch').val())
	// console.log(tierra)
	// for (var i = 0; i < ; i--) {
	// 	[i]
	// }
	// tierra.push(items...: any)
	//  	if ($('#tierra').prop('checked')) {
	// 	tierra.push($('#tierra').val())
		
	//  }

	

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