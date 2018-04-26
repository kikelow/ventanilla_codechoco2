<?php 
  if(!isset($_SESSION["vev_admin_contenido"])){
    header("Location:index.php");
    exit();

  }
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administración de usuarios</title>
</head>
<body>
	<div class="row">
		<div class="col s12">
			<table class="responsive-table highlight" id="tabla_img">
		        <thead>
		          <tr>
		          	  <th>ID</th>
		              <th>Usuario</th>
		              <th>Clave</th>
		              <th>Emplaedo</th>
		          </tr>
		        </thead>
				<?php require 'conexion.php';

				$s = "SELECT login.id,login.usuario,login.clave, concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1) as Empleado from login,persona WHERE login.persona_id = persona.id";

				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));

				if (mysqli_num_rows($r)>0) {
					while ($data=mysqli_fetch_assoc($r)) {
				?>
		      	<tbody>
			          <tr>
			          	<td><?php echo "$data[id]"; ?></td>
			            <td><?php echo "$data[usuario]"; ?></td>
			            <td><?php echo "$data[clave]"; ?></td>
			            <td><?php echo "$data[Empleado]"; ?></td>
			            <td><a href="#content_form" id="cargar_datos_usuario" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_usuario('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
			            <td><a href="#!" id="borrar_datos_usuario" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_usuario('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
			          </tr>
	
				<?php }
				} ?>
		        </tbody>
			 </table>
		</div>
	</div>
	<div class="row">
		<div class="col s12">
			<div class="oculto4">
				<form action="" id="content_form">

					<div class="input-field col s12">
			         <input placeholder="" id="id" type="hidden" class="validate" name="id">
			        </div>

		      		<div class="input-field col s12">
		             <input placeholder="" id="usuario" type="text" class="validate" name="usuario">
		             <label for="usuario">Usuario</label>
	    	        </div>

	    	        <div class="input-field col s12">
		             <input placeholder="" id="clave" type="text" class="validate" name="clave">
		             <label for="clave">Clave</label>
	    	        </div>

              
			          <div class="input-field col s12">
			  		    <select name="empleado" id="empleado">
			  		      <option value="" disabled selected>Seleccione...</option>
			  
			  				<?php 
			  				$s = "SELECT id,concat(persona.nombre1,' ',ifnull(persona.nombre2, ''),' ',persona.apellido1) as Empleado from persona where persona.rol_id = 1 OR  persona.rol_id = 2 OR  persona.rol_id = 3";
			  				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
			  				if (mysqli_num_rows($r)>0) {
			  					while ($data=mysqli_fetch_assoc($r)) {
			  				?>
			  		      <option value="<?php echo $data['id'] ?>"><?php echo $data['Empleado'] ?></option>			   
			  				<?php }
			  				} ?>
			  			 </select>
			  		    <label>Empleado</label>
			  	</div> 
		      </form>

		      <div class="">
				     <!--  <a href="#" id="btn_guardar_usuario" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" >Guardar</a> -->

				      <a href="#" id="btn_modifcar_usuario" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;margin-right: 10px;" onclick="editar_usuario()">Modificar</a>
			  </div>

			</div>
		</div>
	</div>
</body>
</html>