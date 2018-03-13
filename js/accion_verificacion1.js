$(document).ready(function() {
	
$('#empresa').select2();
$('#empresa_m').select2();
});

/// Insertar
$('#btn_verificacion1').click(function(event) {
	 event.preventDefault();
if (! $('#empresa').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}else {
	 var empresa = $('#empresa').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_1/insertar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: $('#form_verificacion1').serialize(),
	 })
	 .done(function(respuesta) {
	 	$('#btn_verificacion1').attr('disabled', 'disabled');
	 	swal ({
  				icon: "success",
  				 text: "Datos INSERTADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
		setTimeout("document.location=document.location",1500);
	 })
}
	 
});

//cargar formulario
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


///modificar
$('#modificar_verificacion1').click(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()
	$.ajax({
		url: 'evaluacion/hoja_verificacion_1/modificar.php?empresa='+empresa_m,
		type: 'POST',
		data: $('#form_modificar_verificacion1').serialize(),
	})
	.done(function(respuesta) {
		$('#modificar_verificacion1').attr('disabled', 'disabled');
		swal ({
  				icon: "success",
  				 text: "Datos MODIFICADOS exitosamente!",
  				 button: {
    				visible: false
  				},
			});
		setTimeout("document.location=document.location",1500);
	})
	
});
