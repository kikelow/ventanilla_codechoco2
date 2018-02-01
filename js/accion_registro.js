
$('#region').change(function(){
	var region = $('#region').val()
	
	$.ajax({
		url: 'emprendimientos/registro/combo.php',
		type: 'POST',
		 // dataType: "json",
		data: {region: region},
	})
	.done(function(respuesta) {
			$('#departamento').html(respuesta);
		
		// var depto = JSON.parse(respuesta)
		//  for(var i in depto.datos){
  //           var id = depto.datos[i]['id']
  //           var nombre = depto.datos[i]['nombre']
  //           // console.log(nombre)
  //         $('#departamento').html('<option value="'+id+'">'+nombre+'</option>')
  //        // $('div #s ul').append('<li class ="active"><span>'+nombre+'</span></li>');
  //       }
       	$('#departamento').material_select();
	})

	
});



$("#registrar_emp").click(function(event) {
	event.preventDefault();
if ($('#identificacion').val()=="") {
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
// 	// $.ajax({
// 	// 	url: 'emprendimientos/registro/insertar.php',
// 	// 	type: 'POST',
// 	// 	data: $("#form_registro").serialize(),
// 	// })
// 	// .done(function(respuesta) {
		
// 	// 	alert(respuesta)
// 	// })
// 	// .fail(function() {
// 	// 	console.log("error");
// 	// })
// 	// .always(function() {
// 	// 	console.log("complete");
// 	// });
	}

});
