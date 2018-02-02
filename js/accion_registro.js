$(document).ready(function() {

});
$('#femenino_3').change(function(event) {
	var total = parseInt($('#masculino_3').val()) + parseInt($('#femenino_3').val()) 
	
	$('#total_3').val(total)
	alert(total)
});
//llenar combo dpartamento
$('#region').change(function(event) {
	var region = $('#region').val()
	var id = ""
	var nombre = ""
	$.ajax({
<<<<<<< HEAD
		url: 'emprendimiento/registro/combo.php',
=======
		url: 'emprendimiento/registro/combo_departamento.php',
>>>>>>> 0e6efb7c227af023e5f8584feaefd1f0dc9ff3ee
		type: 'POST',
		 // dataType: "json",
		data: {region: region},
	})
	.done(function(respuesta) {
		 
        $('#departamento').html('<option disabled selected>Seleccione...</option>')  
        $('#departamento').append(respuesta)
		$('#departamento').material_select();
	})
});

//llenar combo municipio
$('#departamento').change(function(event) {
	var departamento = $('#departamento').val()
	// console.log(departamento)
	$.ajax({
		url: 'emprendimiento/registro/combo_municipio.php',
		type: 'POST',
		data: {departamento: departamento},
	})
	.done(function(respuesta) {
		$('#municipio').html('<option disabled selected>Seleccione...</option>')
        $('#municipio').append(respuesta)
		$('#municipio').material_select();
	})
});
//llenar combo sector
$('#categoria').change(function(event) {
	var categoria = $('#categoria').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_sector.php',
		type: 'POST',
		data: {categoria: categoria},
	})
	.done(function(respuesta) {  
		$('#sector').html('<option disabled selected>Seleccione...</option>')
        $('#sector').append(respuesta)
		$('#sector').material_select();
	})
});
//llenar combo subsector
$('#sector').change(function(event) {
	var sector = $('#sector').val()
	$.ajax({
		url: 'emprendimiento/registro/combo_subsector.php',
		type: 'POST',
		data: {sector: sector},
	})
	.done(function(respuesta) {  
		$('#subsector').html('<option disabled selected>Seleccione...</option>')
        $('#subsector').append(respuesta)
		$('#subsector').material_select();
	})
});


//acciones para validar y luego registrar
$("#registrar_emp").click(function(event) {
	event.preventDefault();
if (! $('#t_persona').val()) {
	alert('selecc')
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#t_persona').focus().addClass("invalid")
}
else if ( ! $('#t_identificacion').val()) {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#t_identificacion').focus().addClass("invalid")
}
else if ($('#identificacion').val()=="") {
	$('.collapsible').collapsible('close', 0);
	$('.collapsible').collapsible('open', 0);
	$('#identificacion').focus().addClass("invalid")
}else if ($('#razon_social').val()=="") {
	 $('.collapsible').collapsible('close', 0);
	 $('.collapsible').collapsible('open', 0);
	 $('#razon_social').focus().addClass("invalid")
}
else if ($('#representante').val()=="") {
	 $('.collapsible').collapsible('close', 0);
	 $('.collapsible').collapsible('open', 0);
	 $('#representante').focus().addClass("invalid")
}
else if ($('#documento').val()=="") {
	 $('.collapsible').collapsible('close', 0);
	 $('.collapsible').collapsible('open', 0);
	 $('#documento').focus().addClass("invalid")
}
else if ($('#correo').val()=="") {
	 $('.collapsible').collapsible('close', 0);
	 $('.collapsible').collapsible('open', 0);
	 $('#correo').focus().addClass("invalid")
}
else {
alert('todo bien')
	// $.ajax({
	// 	url: 'emprendimiento/registro/insertar.php',
	// 	type: 'POST',
	// 	data: $("#form_registro").serialize(),
	// })
	// .done(function(respuesta) {
	// 	console.log(respuesta)
	// })
	
	}

});
