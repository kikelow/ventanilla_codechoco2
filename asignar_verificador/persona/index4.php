<?php 
  if(!isset($_SESSION["vev_admin_verificador"])){
    header("Location:../../index.php");
    exit();
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div class="row">
  <div class="col s12"><h4 class="diagonal" style="text-align: center; font-size: 1.9rem;">Crear Verificador</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>

<div class="row" style="">
      <div class="col s12 m12 ">
        <div class="card-panel grey lighten-4" >
          <span class="black-text">
          	<div class="row">
    <form class="col s12" id="form_admin_verificador">
     <div class="row">
			<h5 class="center">Datos Personales</h5>
		</div>
      <div class="row">
      	<div class="input-field col s12 m4 l4">
          <input id="identificacion" name="identificacion" type="text" class="validate" required="">
          <label for="identificacion">Identificación</label>
        </div>
      	<div class="input-field col s12 m4 l4">
          <input id="nombre1" name="nombre1" type="text" class="validate" required="">
          <label for="nombre1">Primer Nombre</label>
        </div>
       <div class="input-field col s12 m4 l4">
          <input id="nombre2" name="nombre2" type="text" class="validate">
          <label for="nombre2">Segundo Nombre</label>
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s12 m6 l6">
          <input id="apellido1" name="apellido1" type="text" class="validate" required="">
          <label for="apellido1">Primer Apellido</label>
        </div>
       <div class="input-field col s12 m6 l6">
          <input id="apellido2" name="apellido2" type="text" class="validate" required="">
          <label for="apellido2">Segundo Apellido</label>
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s12 m4 l4">
          <input id="email" name="email" type="email" class="validate" >
          <label for="email">Correo</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <input id="celular" name="celular" type="text" class="validate" required="">
          <label for="celular">Celular</label>
        </div>
        <div class="input-field col s12 m4 l4">
          <input id="fijo" name="fijo" type="text" class="validate">
          <label for="fijo">Fijo</label>
        </div>
      </div>
       
      <div class="row">
        <div class="input-field col s12 m12 l12">
          <input id="direccion" name="direccion" type="text" class="validate" >
          <label for="direccion">Dirección</label>
        </div>
      </div>
		
		<center> <button type="submit" class="waves-effect green darken-2 btn " style="" id="registrar_veri"><i class="material-icons right">add</i>Registrar Verificador</button></center>
    </form>
  </div>
          </span>
        </div>
      </div>
    </div>

	
<script type="text/javascript" src="js/accion_admin_verificador.js"></script>
</body>
</html>