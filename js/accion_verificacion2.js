$(document).ready(function() {
	
$('#empresa').select2();
});

$('#btn_verificacion2').click(function(event) {
	 event.preventDefault();
	 var empresa = $('#empresa').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_2/insertar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: $('#form_verificacion2').serialize(),
	 })
	 .done(function(respuesta) {
	 	console.log(respuesta);
	 })
	 
});