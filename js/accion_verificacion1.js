$(document).ready(function() {
	
$('#empresa').select2();
});

$('#btn_verificacion1').click(function(event) {
	 event.preventDefault();
	 var empresa = $('#empresa').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_1/insertar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: $('#form_verificacion1').serialize(),
	 })
	 .done(function(respuesta) {
	 	console.log(respuesta);
	 })
	 
});