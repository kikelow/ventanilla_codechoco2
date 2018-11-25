$(document).ready(function() {

	$('#empresa').select2();
	$('#empresa_m').select2();
});
//------certificaciones
	$('#medio_verificacion1').change(function(event) {
		$('#medio1').val($(this).val())
	});
//------requisitos excluyentes
	$('#medio_verificacion21').change(function(event) {
		$('#medio21').val($(this).val())
	});
	$('#medio_verificacion22').change(function(event) {
		$('#medio22').val($(this).val())
	});
	$('#medio_verificacion23').change(function(event) {
		$('#medio23').val($(this).val())
	});
	$('#medio_verificacion24').change(function(event) {
		$('#medio24').val($(this).val())
	});
	$('#medio_verificacion25').change(function(event) {
		$('#medio25').val($(this).val())
	});
//------Administrativos
	$('#medio_verificacion31').change(function(event) {
		$('#medio31').val($(this).val())
	});
	$('#medio_verificacion32').change(function(event) {
		$('#medio32').val($(this).val())
	});
	$('#medio_verificacion33').change(function(event) {
		$('#medio33').val($(this).val())
	});
	$('#medio_verificacion34').change(function(event) {
		$('#medio34').val($(this).val())
	});
	$('#medio_verificacion35').change(function(event) {
		$('#medio35').val($(this).val())
	});
	$('#medio_verificacion36').change(function(event) {
		$('#medio36').val($(this).val())
	});
	$('#medio_verificacion37').change(function(event) {
		$('#medio37').val($(this).val())
	});
	$('#medio_verificacion38').change(function(event) {
		$('#medio38').val($(this).val())
	});
	$('#medio_verificacion39').change(function(event) {
		$('#medio39').val($(this).val())
	});
//------Ambiental
	$('#medio_verificacion41').change(function(event) {
		$('#medio41').val($(this).val())
	});
	$('#medio_verificacion42').change(function(event) {
		$('#medio42').val($(this).val())
	});
	$('#medio_verificacion43').change(function(event) {
		$('#medio43').val($(this).val())
	});
	$('#medio_verificacion44').change(function(event) {
		$('#medio44').val($(this).val())
	});
	$('#medio_verificacion45').change(function(event) {
		$('#medio45').val($(this).val())
	});
	$('#medio_verificacion46').change(function(event) {
		$('#medio46').val($(this).val())
	});
	$('#medio_verificacion47').change(function(event) {
		$('#medio47').val($(this).val())
	});
	$('#medio_verificacion48').change(function(event) {
		$('#medio48').val($(this).val())
	});
	$('#medio_verificacion49').change(function(event) {
		$('#medio49').val($(this).val())
	});
	$('#medio_verificacion410').change(function(event) {
		$('#medio410').val($(this).val())
	});
	$('#medio_verificacion411').change(function(event) {
		$('#medio411').val($(this).val())
	});





/// Insertar
$('#btn_verificacion1').click(function(event) {
	event.preventDefault();
	// if (! $('#empresa').val()) {
		// Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
	// }else {
		var empresa = $('#empresa').val()
		$.ajax({
			url: 'evaluacion/hoja_verificacion_1/insertar.php?empresa='+empresa,
			type: 'POST',
			data: $('#form_verificacion1').serialize(),
			beforeSend: function() {
				// $('#btn_verificacion1').attr('disabled', 'disabled');
				
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
					text: "Datos INSERTADOS exitosamente!",
					button: {
						visible: false
					},
				});
				// setTimeout("document.location=document.location",1500);
			}
		})
		
	// }
	
}
);

//cargar formulario
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_1/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
		beforeSend: function() {
			$('#form_modificar_verificacion1').hide()
			$('#preload').addClass('progress')

   	
    },
    success: function(respuesta) {
    	$('#form_modificar_verificacion1').show()
    	$('#preload').removeClass('progress')
    	$('#cargar_info').html(respuesta)
    }
	})
});


///modificar
$('#modificar_verificacion1').click(function(event) {
	event.preventDefault();
		var empresa_m = $('#empresa_m').val()
		$.ajax({
			url: 'evaluacion/hoja_verificacion_1/modificar/modificar.php?empresa='+empresa_m,
			type: 'POST',
			data: $('#form_modificar_verificacion1').serialize(),
			beforeSend: function() {
				$('#modificar_verificacion1').attr('disabled', 'disabled');
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
	
});
