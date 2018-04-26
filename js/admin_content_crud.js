$('#btn_new_content2').attr('disabled','disabled');
$('#btn_new_content').click(function() {

	if ($('.oculto').show('slow')) {
		$('#btn_new_content').attr('disabled','disabled');
		$('#btn_new_content2').removeAttr('disabled','disabled');
	}	
});
$('#btn_new_content2').click(function() {
	if ($('.oculto').hide('slow')) {
		$('#btn_new_content').removeAttr('disabled','disabled');
		$('#btn_new_content2').attr('disabled','disabled');
	}
});

///////////////////////////////////

// $('#btn_cerrar_content').attr('disabled','disabled');
// $('#btn_abrir_content').click(function() {

// 	if ($('.oculto').show('slow')) {
// 		$('#btn_cerrar_content').attr('disabled','disabled');
// 		$('#btn_new_content3').removeAttr('disabled','disabled');
// 	}	
// });
// $('#btn_new_content3').click(function() {
// 	if ($('.oculto').hide('slow')) {
// 		$('#btn_cerrar_content').removeAttr('disabled','disabled');
// 		$('#btn_new_content3').attr('disabled','disabled');
// 	}
// });
//////////////////

// para image
$('#btn_new_image2').attr('disabled','disabled');
$('#btn_new_image').click(function() {
	
	if ($('.oculto2').show('slow')) {
		$('#btn_new_image').attr('disabled','disabled');
		$('#btn_new_image2').removeAttr('disabled','disabled');
	}	
});


$('#btn_new_image2').click(function() {
	
	if ($('.oculto2').hide('slow')) {
		$('#btn_new_image').removeAttr('disabled','disabled');
		$('#btn_new_image2').attr('disabled','disabled');
	}
});

// para archivo

$('#btn_cerrar_archivo').attr('disabled','disabled');
$('#btn_new_archivo').click(function() {
	
	if ($('.oculto3').show('slow')) {
		$('#btn_new_archivo').attr('disabled','disabled');
		$('#btn_cerrar_archivo').removeAttr('disabled','disabled');
	}	
});


$('#btn_cerrar_archivo').click(function() {
	
	if ($('.oculto3').hide('slow')) {
		$('#btn_new_archivo').removeAttr('disabled','disabled');
		$('#btn_cerrar_archivo').attr('disabled','disabled');
	}
});


// guardar content 
$('#btn_guardar_content').click(function(event) {
  event.preventDefault();
  $.ajax({
    url: 'content_admin/content_save/guardar.php',
    type: 'POST',
    data: $('#content_form').serialize(),
    beforeSend: function() {
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
           text: "Datos Guardados Exitosamente!",
           button: {
            visible: false
          },
      });
      window.setTimeout('location.reload()', 1000);
    }
  })
});


function cargar_datos_qs(id){
	$.ajax({
	type: "POST",
	url: "content_admin/content_load/cargar.php",
	data: {id:id},
	cache: false,
		success: function(result){

			if (result != false) {

			console.log(result);
			var content = $.parseJSON(result);

					$('.oculto').show('slow')
 					$('#id').val(content["id"]);
   					$('#titulo').val(content["titulo"]);
	   				$('#alias  option[value='+content['alias_id']+']').attr('selected',true);
	   				$('#alias').material_select();
	   				$('#alias').attr("disabled");
					$('#descripcion').trumbowyg('html',content["descripcion"] );
					$('#imagen').val(content["id_img_page"]);
					$('#imagen').material_select();
				
			} 
		}			
	});
}


function editar_qs(){

	var datos = {
		"id":$('#id').val(),
		"titulo":$('#titulo').val(),
		"descripcion":$('#descripcion').val(),
		"imagen":$('#imagen').val()
	}

	$.ajax({
	type: "POST",
	url: "content_admin/content_edit/editar.php",
	data: datos,
	cache: false,
		success: function(result){
			swal({
			  title: "Muy Bien!",
			  text: "Registro actualizado satisfactoriamente!",
			  icon: "success",
			  button: false
			});
			
			window.setTimeout('location.reload()', 1000);
		}
	});
}

function borrar_datos_qs(id){
	swal({
	  title: "Estás seguro?",
	  text: "Una vez eliminado, no podrá recuperar este registro!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    $.ajax({
		type: "POST",
		url: "content_admin/content_delete/borrar.php",
		data: {id:id},
		cache: false,
			success: function(result){
				swal("¡El registro ha sido eliminado!", {
			      icon: "success",
			    });
				window.setTimeout('location.reload()',900); 
			}
		});
	  } else {
	    swal("¡Tu registro está seguro!");
	  }
	});
}


/////////////////////////////////////////////////////////////////////////////////////////////

$('#btn_guardar_not').click(function(event) {
  event.preventDefault();
  $.ajax({
    url: 'content_admin/content_save/guardar_nt.php',
    type: 'POST',
    data: $('#content_form_nt').serialize(),
    beforeSend: function() {
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
           text: "Datos Guardados Exitosamente!",
           button: {
            visible: false
          },
      });
      //window.setTimeout('location.reload()', 1000);
    }
  })
});


function cargar_datos_nt(id){
	$.ajax({
	type: "POST",
	url: "content_admin/content_load/cargar_nt.php",
	data: {id:id},
	cache: false,
		success: function(result){

			if (result != false) {

			console.log(result);
			var content = $.parseJSON(result);

					//$('.oculto').show('slow')
 					$('#id_nt').val(content["id"]);
   					$('#titulo_nt').val(content["titulo"]);
	   				$('#autor_nt').val(content["fuente_autor"]);
					$('#descripcion_nt').trumbowyg('html',content["descripcion"] );
					$('#imagen_nt').val(content["id_img_page"]);
					$('#imagen_nt').material_select();
				
			} 
		}			
	});
}


function editar_nt(){

	var datos = {
		"id":$('#id_nt').val(),
		"titulo":$('#titulo_nt').val(),
		"descripcion":$('#descripcion_nt').val(),
		"autor":$('#autor_nt').val(),
		"imagen":$('#imagen_nt').val()
	}

	$.ajax({
	type: "POST",
	url: "content_admin/content_edit/editar_nt.php",
	data: datos,
	cache: false,
		success: function(result){
			swal({
			  title: "Muy Bien!",
			  text: "Registro actualizado satisfactoriamente!",
			  icon: "success",
			  button: false
			});
			
			//window.setTimeout('location.reload()', 1000);
		}
	});
}

function borrar_datos_nt(id){
	swal({
	  title: "Estás seguro?",
	  text: "Una vez eliminado, no podrá recuperar este registro!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    $.ajax({
		type: "POST",
		url: "content_admin/content_delete/borrar_nt.php",
		data: {id:id},
		cache: false,
			success: function(result){
				swal("¡El registro ha sido eliminado!", {
			      icon: "success",
			    });
				window.setTimeout('location.reload()',900); 
			}
		});
	  } else {
	    swal("¡Tu registro está seguro!");
	  }
	});
}

///////////////////////////////////////////////////////////////////////////////////////////77


/////////////////////////////////////////////////////////////////////////////////////////////
/////        para archivos       ///////////////////////////////



$('#btn_guardar_archivo').click(function() {

	var formData = new FormData($("#archivo_form")[0]);
	    var ruta = "content_admin/content_save/guardar_file.php";
	    $.ajax({
	        url: ruta,
	        type: "POST",
	        data: formData,
	        contentType: false,
	        processData: false,
	    success: function(datos)
	        {
	            $("#respuesta").html(datos);
	        }
	 });
});


function cargar_datos_nt(id){
	$.ajax({
	type: "POST",
	url: "content_admin/content_load/cargar_nt.php",
	data: {id:id},
	cache: false,
		success: function(result){

			if (result != false) {

			console.log(result);
			var content = $.parseJSON(result);

					//$('.oculto').show('slow')
 					$('#id_nt').val(content["id"]);
   					$('#titulo_nt').val(content["titulo"]);
	   				$('#autor_nt').val(content["fuente_autor"]);
					$('#descripcion_nt').trumbowyg('html',content["descripcion"] );
					$('#imagen_nt').val(content["id_img_page"]);
					$('#imagen_nt').material_select();
				
			} 
		}			
	});
}


function editar_nt(){

	var datos = {
		"id":$('#id_nt').val(),
		"titulo":$('#titulo_nt').val(),
		"descripcion":$('#descripcion_nt').val(),
		"autor":$('#autor_nt').val(),
		"imagen":$('#imagen_nt').val()
	}

	$.ajax({
	type: "POST",
	url: "content_admin/content_edit/editar_nt.php",
	data: datos,
	cache: false,
		success: function(result){
			swal({
			  title: "Muy Bien!",
			  text: "Registro actualizado satisfactoriamente!",
			  icon: "success",
			  button: false
			});
			
			//window.setTimeout('location.reload()', 1000);
		}
	});
}

function borrar_datos_nt(id){
	swal({
	  title: "Estás seguro?",
	  text: "Una vez eliminado, no podrá recuperar este registro!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    $.ajax({
		type: "POST",
		url: "content_admin/content_delete/borrar_nt.php",
		data: {id:id},
		cache: false,
			success: function(result){
				swal("¡El registro ha sido eliminado!", {
			      icon: "success",
			    });
				window.setTimeout('location.reload()',900); 
			}
		});
	  } else {
	    swal("¡Tu registro está seguro!");
	  }
	});
}

///////////////////////////////////////////////////////////////////////////////////////////77

$('#btn_guardar_image').click(function() {

	var formData = new FormData($("#image_form")[0]);
	    var ruta = "content_admin/content_save/guardar_imagenes.php";
	    $.ajax({
	        url: ruta,
	        type: "POST",
	        data: formData,
	        contentType: false,
	        processData: false,
	    success: function(datos)
	        {
	            $("#respuesta").html(datos);
	        }
	 });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////7777
////////////////////////////////////////7 para usuarios ///////////////////////////////////////////////7


function cargar_datos_usuario(id){
	$.ajax({
	type: "POST",
	url: "content_admin/content_load/cargar_usuario.php",
	data: {id:id},
	cache: false,
		success: function(result){

			if (result != false) {

			console.log(result);
			var content = $.parseJSON(result);

					$('.oculto4').show('slow');
 					$('#id').val(content["id"]);
   					$('#usuario').val(content["usuario"]);
	   				$('#clave').val(content["clave"]);
					$('#empleado').val(content["persona_id"]);
					$('#empleado').material_select();
				
			} 
		}			
	});
}


function editar_usuario(){

	var datos = {
		"id":$('#id').val(),
		"usuario":$('#usuario').val(),
		"clave":$('#clave').val(),
		"persona_id":$('#empleado').val()
	
	}

	$.ajax({
	type: "POST",
	url: "content_admin/content_edit/editar_usuario.php",
	data: datos,
	cache: false,
		success: function(result){
			swal({
			  title: "Muy Bien!",
			  text: "Registro actualizado satisfactoriamente!",
			  icon: "success",
			  button: false
			});
			
			window.setTimeout('location.reload()', 1000);
		}
	});
}

function borrar_datos_usuario(id){
	swal({
	  title: "Estás seguro?",
	  text: "Una vez eliminado, no podrá recuperar este registro!",
	  icon: "warning",
	  buttons: true,
	  dangerMode: true,
	})
	.then((willDelete) => {
	  if (willDelete) {
	    $.ajax({
		type: "POST",
		url: "content_admin/content_delete/borrar_usuario.php",
		data: {id:id},
		cache: false,
			success: function(result){
				swal("¡El registro ha sido eliminado!", {
			      icon: "success",
			    });
				window.setTimeout('location.reload()',900); 
			}
		});
	  } else {
	    swal("¡Tu registro está seguro!");
	  }
	});
}
