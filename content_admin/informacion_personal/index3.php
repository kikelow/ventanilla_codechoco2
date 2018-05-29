
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
<?php 
	require_once('conexion.php');
	$persona_id = $_SESSION["vev_admin_contenido"];
	$s="SELECT * FROM persona WHERE id = '$persona_id'";
	$r = mysqli_query($conn,$s);
	while ($rw = mysqli_fetch_assoc($r)) {
		
	
?>

<div class="row" style="">
      <div class="col s12 m12 ">
        <div class="card-panel grey lighten-4" >
          <span class="black-text">
          	<div class="row">
    <form class="col s12" id="form_personales">
     <div class="row">
  <div class="col s12 m10 l10"><h4 class="diagonal" style="text-align: center;">Datos personales</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>
      <div class="row">
      	<input type="hidden" name="id" value='<?php echo $persona_id ?>''>
      	<div class="input-field col s12 m4 l4">
          <input id="identificacion" name="identificacion" type="text" class="validate" required value='<?php echo $rw['identificacion'] ?>'>
          <label for="identificacion">Identificación</label>
        </div>
      	<div class="input-field col s12 m4 l4">
          <input id="nombre1" name="nombre1" type="text" class="validate" required value='<?php echo $rw['nombre1'] ?>'>
          <label for="nombre1">Primer Nombre</label>
        </div>
       <div class="input-field col s12 m4 l4">
          <input id="nombre2" name="nombre2" type="text" class="validate" value='<?php echo $rw['nombre2'] ?>'>
          <label for="nombre2">Segundo Nombre</label>
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s12 m6 l6">
          <input id="apellido1" name="apellido1" type="text" class="validate" required value='<?php echo $rw['apellido1'] ?>'>
          <label for="apellido1">Primer Apellido</label>
        </div>
       <div class="input-field col s12 m6 l6">
          <input id="apellido2" name="apellido2" type="text" class="validate" required value='<?php echo $rw['paellido2'] ?>'>
          <label for="apellido2">Segundo Apellido</label>
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s12 m4 l4">
          <input id="email" name="email" type="email" class="validate" value='<?php echo $rw['correo'] ?>' >
          <label for="email">Correo</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <input id="celular" name="celular" type="text" class="validate" required value='<?php echo $rw['celular'] ?>'>
          <label for="celular">Celular</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <input id="fijo" name="fijo" type="text" class="validate" value='<?php echo $rw['fijo'] ?>'>
          <label for="fijo">Fijo</label>
        </div>
      </div>
       
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input id="direccion" name="direccion" type="text" class="validate" value='<?php echo $rw['direccion'] ?>' >
          <label for="direccion">Dirección</label>
        </div>
      </div>
		<?php } ?>
		 <center> <button type="submit" class="waves-effect yellow darken-4 darken-2 btn  " style="" id="inf_personal"><i class="material-icons right">create</i>Modificar</button></center>
    </form>
  </div>
 <div class="row">
  <div class="col s12"><h4 class="diagonal" style="text-align: center;">Cambiar contraseña</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>
   <div class="row">
			<h5 class="center">Modificar contraseña</h5>

			<form id="form_contraseña">
				<div class="row">
      	<div class="input-field col s12 m4 l4">
          <input id="contra_actual" name="contra_actual" type="password" class="validate limpiar" required>
          <label for="contra_actual">Contraseña actual</label>
        </div>
      	<div class="input-field col s12 m4 l4">
          <input id="nueva_contra" name="nueva_contra" type="password" class="validate limpiar" required>
          <label for="nueva_contra">Nueva contraseña</label>
        </div>
       <div class="input-field col s12 m4 l4">
          <input id="conf_contra" name="conf_contra" type="password" class="validate limpiar" required>
          <label for="conf_contra">Confirmar contraseña</label>
        </div>
      </div>
     <center> <button type="submit" class="waves-effect yellow darken-4 darken-2 btn" style="" id="modificar_contra"><i class="material-icons right">create</i>Modificar</button> </center>
			</form>
		</div>
          </span>
        </div>
      </div>
    </div>

	
<script type="text/javascript" >
	//Datos Personales
$('#form_personales').submit(function(event) {
	event.preventDefault();
	$.ajax({
		url: 'content_admin/informacion_personal/modificar_personal.php',
		type: 'POST',
		data: $("#form_personales").serialize(),
		beforeSend: function() {
   	swal ({
  				// icon: "success",
  				 text: "Procesando información!",
  				 button: {
    				visible: false
  				},
			});
    },success: function(respuesta) {
    	// console.log(respuesta)
    	swal ({
  				icon: "success",
  				 text: "Datos Modificados exitosamente!",
  				 button: {
    				visible: false
  				},
			});
    	window.setTimeout('location.reload()',1500);
    }
	})
});

/// cambiar contraseña 
$('#form_contraseña').submit(function(event) {
	event.preventDefault();

	if ($('#nueva_contra').val() != $('#conf_contra').val()) {
		Materialize.toast('La confirmacion de contraseña no coincide', 3000)
	}else{
		$.ajax({
		url: 'content_admin/informacion_personal/modificar_contrasena.php',
		type: 'POST',
		data: $("#form_contraseña").serialize(),
	})
		.done(function(data) {
			// console.log(data)
			if (data == 'no') {
				swal ({
          icon: "error",
           text: "La contraseña actual no es correcta",
           button: {
            visible: true
          },
      });
			}else if (data == 'si'){
				swal ({
          icon: "success",
           text: "Contraseña actualizada correctamente",
           button: {
            visible: true
          },
      });
				$('.limpiar').val('');
			}
		})
		
	}
});

</script>
</body>
</html>