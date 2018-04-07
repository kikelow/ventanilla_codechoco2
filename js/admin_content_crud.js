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

 					$('#id2').val(content["id"]);
   					$('#titulo2').val(content["titulo"]);
	   				$('#alias2  option[value='+content['alias_id']+']').attr('selected',true);
	   				$('#alias2').material_select();
	   				$('#alias2').attr("disabled");

					$('#descripcion2').trumbowyg('html',content["descripcion"] );
				
			} 
		}			
	});
}


function editar_qs(){

	var datos = {
		"id":$('#id2').val(),
		"titulo":$('#titulo2').val(),
		"descripcion":$('#descripcion2').val()
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