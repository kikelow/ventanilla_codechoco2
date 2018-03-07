$(document).ready(function() {
	
$('#empresa').select2();
$('#empresa_m').select2();
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

$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_1/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
	})
	.done(function(respuesta) {
		console.log(respuesta)
		$('#cargar_info').html(respuesta)
	})
	
});

$('#modificar_verificacion1').click(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()
	$.ajax({
		url: 'evaluacion/hoja_verificacion_1/modificar.php?empresa='+empresa_m,
		type: 'POST',
		data: $('#form_modificar_verificacion1').serialize(),
	})
	.done(function(respuesta) {
		alert(respuesta);
	})
	
});
