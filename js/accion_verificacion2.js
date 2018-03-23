$(document).ready(function() {
	
$('#empresa').select2();
$('#empresa_m').select2();
});



$('#form_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}
else if ($('#verificacion2_obs1').val()==''||$('#verificacion2_obs2').val()==''||$('#verificacion2_obs3').val()==''||$('#verificacion2_obs4').val()==''||$('#verificacion2_obs5').val()==''||$('#verificacion2_obs6').val()==''||$('#verificacion2_obs7').val()==''||$('#verificacion2_obs8').val()==''||$('#verificacion2_obs9').val()==''||$('#verificacion2_obs10').val()==''||$('#verificacion2_obs11').val()==''||$('#verificacion2_obs12').val()==''||$('#verificacion2_obs13').val()==''||$('#verificacion2_obs14').val()==''||$('#verificacion2_obs15').val()==''||$('#verificacion2_obs16').val()==''||$('#verificacion2_obs17').val()==''||$('#verificacion2_obs18').val()==''||$('#verificacion2_obs19').val()==''||$('#verificacion2_obs20').val()==''||$('#verificacion2_obs21').val()==''||$('#verificacion2_obs22').val()==''||$('#verificacion2_obs23').val()==''||$('#verificacion2_obs24').val()==''||$('#verificacion2_obs25').val()==''||$('#verificacion2_obs26').val()==''||$('#verificacion2_obs27').val()==''||$('#verificacion2_obs28').val()==''||$('#verificacion2_obs29').val()==''||$('#verificacion2_obs30').val()==''||$('#verificacion2_obs31').val()==''||$('#verificacion2_obs32').val()==''||$('#verificacion2_obs33').val()==''||$('#verificacion2_obs34').val()==''||$('#verificacion2_obs35').val()==''||$('#verificacion2_obs36').val()==''||$('#verificacion2_obs37').val()==''||$('#verificacion2_obs38').val()==''||$('#verificacion2_obs39').val()==''||$('#verificacion2_obs40').val()==''||$('#verificacion2_obs41').val()==''||$('#verificacion2_obs42').val()==''||$('#verificacion2_obs43').val()==''||$('#verificacion2_obs44').val()==''||$('#verificacion2_obs45').val()==''||$('#verificacion2_obs46').val()==''||$('#verificacion2_obs47').val()==''||$('#verificacion2_obs48').val()==''||$('#verificacion2_obs49').val()=='') {
	Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
}
else {
	var formData = new FormData(document.getElementById("form_verificacion2"));
	 var empresa = $('#empresa').val()
	 $.ajax({
 		url: 'evaluacion/hoja_verificacion_2/insertar.php?empresa='+empresa,
	 	type: 'POST',
	 	data: formData,
	 	cache: false,
        contentType: false,
	     processData: false,
	   beforeSend: function() {
   	// console.log('cargando')
   	$('#btn_verificacion2').attr('disabled', 'disabled');
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
 // console.log('exitoso')

    }
	 })
	 // .done(function(respuesta) {
	 // 	console.log(respuesta);
	 // }) 
}
});
//-----------------------------------Cargar formulario----------------------------------
$('#empresa_m').change(function(event) {
	event.preventDefault();
	var empresa_m = $('#empresa_m').val()

	$.ajax({
		url: 'evaluacion/hoja_verificacion_2/modificar/llenar_formulario.php',
		type: 'POST',
		data: {empresa_m: empresa_m},
	})
	.done(function(respuesta) {
		// console.log(respuesta)
		$('#cargar_info').html(respuesta)
	})
	
});

// ------------------------------Modificar
$('#form_modificar_verificacion2').submit(function(event) {
	 event.preventDefault();
if (! $('#empresa_m').val()) {
	Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
}else if ($('#verificacion2_obs_m1').val()==''||$('#verificacion2_obs_m2').val()==''||$('#verificacion2_obs_m3').val()==''||$('#verificacion2_obs_m4').val()==''||$('#verificacion2_obs_m5').val()==''||$('#verificacion2_obs_m6').val()==''||$('#verificacion2_obs_m7').val()==''||$('#verificacion2_obs_m8').val()==''||$('#verificacion2_obs_m9').val()==''||$('#verificacion2_obs_m10').val()==''||$('#verificacion2_obs_m11').val()==''||$('#verificacion2_obs_m12').val()==''||$('#verificacion2_obs_m13').val()==''||$('#verificacion2_obs_m14').val()==''||$('#verificacion2_obs_m15').val()==''||$('#verificacion2_obs_m16').val()==''||$('#verificacion2_obs_m17').val()==''||$('#verificacion2_obs_m18').val()==''||$('#verificacion2_obs_m19').val()==''||$('#verificacion2_obs_m20').val()==''||$('#verificacion2_obs_m21').val()==''||$('#verificacion2_obs_m22').val()==''||$('#verificacion2_obs_m23').val()==''||$('#verificacion2_obs_m24').val()==''||$('#verificacion2_obs_m25').val()==''||$('#verificacion2_obs_m26').val()==''||$('#verificacion2_obs_m27').val()==''||$('#verificacion2_obs_m28').val()==''||$('#verificacion2_obs_m29').val()==''||$('#verificacion2_obs_m30').val()==''||$('#verificacion2_obs_m31').val()==''||$('#verificacion2_obs_m32').val()==''||$('#verificacion2_obs_m33').val()==''||$('#verificacion2_obs_m34').val()==''||$('#verificacion2_obs_m35').val()==''||$('#verificacion2_obs_m36').val()==''||$('#verificacion2_obs_m37').val()==''||$('#verificacion2_obs_m38').val()==''||$('#verificacion2_obs_m39').val()==''||$('#verificacion2_obs_m40').val()==''||$('#verificacion2_obs_m41').val()==''||$('#verificacion2_obs_m42').val()==''||$('#verificacion2_obs_m43').val()==''||$('#verificacion2_obs_m44').val()==''||$('#verificacion2_obs_m45').val()==''||$('#verificacion2_obs_m46').val()==''||$('#verificacion2_obs_m47').val()==''||$('#verificacion2_obs_m48').val()==''||$('#verificacion2_obs_m49').val()=='') {
	Materialize.toast('Las observaciones son obligatorias en cada uno de los indicadores', 2000)
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
	 