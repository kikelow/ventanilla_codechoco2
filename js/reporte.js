$(document).ready(function() {
	$('#empresa').select2();
	$('#empresa_plan').select2();
});
//-------------------------Reporte 1 Resumen----------------------------------------

$('#reporte1').click(function(event) {
	event.preventDefault();
	var empresa = $('#empresa').val()
	if (!empresa) {
		Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
	}else {	
		window.open("evaluacion/reporte/resumen.php?empresa="+empresa);
	}
});


//------------------------- Reporte 2 Plan de mejora --------------------------------

$('.plan').click(function(event) {
	event.preventDefault();
	var empresa_plan = $('#empresa_plan').val()
	if (!empresa_plan) {
		Materialize.toast('Debe seleccionar un emprendimiento de la lista desplegable!', 2000)
	}else {
		window.open("evaluacion/reporte/reporte_plan_mejora.php?empresa="+empresa_plan);
	}
});	

