$(document).ready(function() {
$('#empresa').select2();

$('[name="tierra[]"]#tt12').click(function() {

    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t12').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t12').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt13').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t13').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t13').attr('disabled','disabled');
    }
});



$('[name="tierra[]"]#tt14').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t14').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t14').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt15').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t15').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t15').attr('disabled','disabled');
    }
});

$('[name="tierra[]"]#tt16').click(function() {

    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t16').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t16').attr('disabled','disabled');
    }
});


$('[name="tierra[]"]#tt17').click(function() {
    if($(this).is(':checked')) {
      $('[name="desc_t[]"]#desc_t17').removeAttr('disabled');

    } else {
      $('[name="desc_t[]"]#desc_t17').attr('disabled','disabled');
    }
})


});

$('#registrar_informacion').click(function(event) {
  event.preventDefault();

//valiadacion combo emrpesa
if ($('#empresa').val() == null) {
	$('#empresa').selected = true;
	var $toastContent = $('<span>Debe escoger un emprendimiento</span>');
	Materialize.toast($toastContent, 1800);
}


else {
alert('todo bien')
var empresa = $('#empresa').val() 
	$.ajax({
		url: 'evaluacion/formato_informacion_as/insertar.php?empresa='+empresa,
		type: 'POST',
		data: $('#form_informacion').serialize(),
	})
	.done(function(respuesta) {
		console.log(respuesta);
	})
	}
});





