$('#btn_guardar_content').click(function(event) {
  event.preventDefault();
  tinyMCE.triggerSave();
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
      setTimeout("document.location=document.location",1500);
    }
  })
 
  
});