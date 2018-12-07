//------------------------------------ESTADISTICAS MODIFICAR
$('#empresa_m').select2();

//-------------------------------------------------------------------


//-----------------------------------Cargar formulario----------------------------------
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_2/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
		beforeSend: function() {
			$('#form_modificar_verificacion2').hide()
			$('#preload').addClass('progress')

   	
    },
    success: function(respuesta) {
    	$('#form_modificar_verificacion2').show()
    	$('#preload').removeClass('progress')
    	$('#cargar_info').html(respuesta)
    }
	})
});

// ------------------------------Modificar
$('#modificar_verificacion2').click(function(event) {
	 event.preventDefault();
if (! $('#empresa_m').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}else {
	var formData = new FormData(document.getElementById("form_modificar_verificacion2"));
	 var empresa = $('#empresa_m').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_2/modificar/modificar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: formData,
	 	cache: false,
        contentType: false,
	     processData: false,
	  beforeSend: function() {
	  	$('#modificar_verificacion2').attr('disabled', 'disabled');
   	// console.log('cargando')
   	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
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
	 // .done(function(respuesta) {
	 // 	console.log(respuesta);
	 // }) 
}
});