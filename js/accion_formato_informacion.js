$(document).ready(function() {
$('#empresa').select2();

});

var tierra = []

$('#registrar_informacion').click(function(event) {

 

//valiadacion combo emrpesa
if (empresa == null) {
	$('#empresa').selected = true;
	 //document.empresa.focus ();
	// function setFocus (num) {
 //      if (num == 1) {
 //        document.empresa.focus ();
 //      } else  if (num == 2) {
 //        document.empresa.focus ();
 //      }
 //    }

	var $toastContent = $('<span>Debe escoger un emprendimiento</span>');
	Materialize.toast($toastContent, 1800);
}



	event.preventDefault();
	// tierra.push($('.ch').val())
	// console.log(tierra)
	// for (var i = 0; i < ; i--) {
	// 	[i]
	// }
	// tierra.push(items...: any)
	//  	if ($('#tierra').prop('checked')) {
	// 	tierra.push($('#tierra').val())
		
	// 

	var empresa = $('#empresa').val();
	$.ajax({
		url: 'evaluacion/formato_informacion_as/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_informacion').serialize(),
	})
	.done(function(respuesta) {
		console.log(respuesta);
	})
	
});



$('[name="tierra[]"]#tt12').click(function() {

	//$('[name="desc_t[]"]#desc_t12').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t12').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t12').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt13').click(function() {

	//$('[name="desc_t[]"]#desc_t13').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t13').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t13').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt14').click(function() {

	//$('[name="desc_t[]"]#desc_t14').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t14').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t14').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt15').click(function() {

	//$('[name="desc_t[]"]#desc_t15').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t15').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t15').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt16').click(function() {

	//$('[name="desc_t[]"]#desc_t16').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t16').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t16').attr('disabled','disabled');
    }
});


$('[name="tierra[]"]#tt17').click(function() {

	//$('[name="desc_t[]"]#desc_t17').attr('disabled','disabled');

    if($(this).is(':checked')) {
      console.log('Se hizo check en el checkbox.');
      $('[name="desc_t[]"]#desc_t17').removeAttr('disabled');

    } else {
      console.log('Se destildo el checkbox');
      $('[name="desc_t[]"]#desc_t17').attr('disabled','disabled');
    }
})

