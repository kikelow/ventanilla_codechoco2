$(document).ready(function() {
	$('#empresa').select2();
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