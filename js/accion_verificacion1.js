$(document).ready(function() {

	$('#empresa').select2();
	$('#empresa_m').select2();
});

/// Insertar
$('#btn_verificacion1').click(function(event) {
	event.preventDefault();
	if (! $('#empresa').val()) {
		Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
	}else if ( $('#verificacion1_obs1').val()==''|| $('#verificacion1_obs2').val()==''|| $('#verificacion1_obs3').val()==''|| $('#verificacion1_obs4').val()==''|| $('#verificacion1_obs5').val()==''|| $('#verificacion1_obs6').val()==''|| $('#verificacion1_obs7').val()==''|| $('#verificacion1_obs8').val()==''|| $('#verificacion1_obs9').val()==''|| $('#verificacion1_obs10').val()==''|| $('#verificacion1_obs11').val()==''|| $('#verificacion1_obs12').val()==''|| $('#verificacion1_obs13').val()=='') {
		Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
	}else {
		var empresa = $('#empresa').val()
		$.ajax({
			url: 'evaluacion/hoja_verificacion_1/insertar.php?empresa='+empresa,
			type: 'POST',
			data: $('#form_verificacion1').serialize(),
			beforeSend: function() {
				$('#btn_verificacion1').attr('disabled', 'disabled');
				
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
				setTimeout("document.location=document.location",1500);
			}
		})
		
	}
	
});

//cargar formulario
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_1/modificar/llenar_formulario.php',
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
	if ( $('#verificacion1_obs_m1').val()==''|| $('#verificacion1_obs_m2').val()==''|| $('#verificacion1_obs_m3').val()==''|| $('#verificacion1_obs_m4').val()==''|| $('#verificacion1_obs_m5').val()==''|| $('#verificacion1_obs_m6').val()==''|| $('#verificacion1_obs_m7').val()==''|| $('#verificacion1_obs_m8').val()==''|| $('#verificacion1_obs_m9').val()==''|| $('#verificacion1_obs_m10').val()==''|| $('#verificacion1_obs_m11').val()==''|| $('#verificacion1_obs_m12').val()==''|| $('#verificacion1_obs_m13').val()=='') {
		Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
	}else {
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
	}
});
