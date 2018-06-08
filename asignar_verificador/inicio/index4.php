<?php 
  if(!isset($_SESSION["vev_admin_verificador"])){
    header("Location:../../index.php");
    exit();
  }
 ?>

<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">asignar Verificador</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>

<div class="row" style="">
      <div class="col s12 m12 ">
        <div class="card-panel grey lighten-4" >
          <span class="black-text">
          	<div class="row">
    <form class="col s12" id="form_asignar_verifi">
    <!--  <div class="row">
			<h5 class="center">Datos Personales</h5>
		</div> -->
      <div class="row">
      	<div class="input-field col s12 m6 l6" >
    
                <select name="verificador" id="verificador" class="validate">
                  <option disabled selected>Seleccione Un Verificador...</option>
                  <?php 
                  require_once('conexion.php');
                    $s="SELECT id,nombre1,nombre2,apellido1,paellido2,identificacion from persona WHERE rol_id = '2' order by id";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[nombre1] $rw[nombre2] $rw[apellido1] $rw[paellido2] - $rw[identificacion]</option>";          
                      }         
                    }
                  ?>
                </select>
                        
            </div>

      
      <div class="input-field col s12 m6 l6" >
    
                <select name="emprendimiento" id="emprendimiento" class="validate">
                  <option disabled selected>Seleccione Un Emprendimiento...</option>
                  <?php 
                  require_once('conexion.php');
                    $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM empresa
                     WHERE empresa.id NOT IN (SELECT verificadorxempresa.empresa_id FROM verificadorxempresa)";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                      }         
                    }
                  ?>
                </select>
                <!-- <label >Tipo de persona</label>   -->
                        
            </div>
      </div>
      
		
		<button type="submit" class="waves-effect btn right" style="background-color:#00853b" id="registrar_v"><i class="material-icons right">add</i>Asignar</button>
    </form>

<div class="row">
		<div class="col s12">
			<table class="responsive-table highlight" id="tabla_img">
		        <thead>
		          <tr>
		          	  <th>ID</th>
		              <th>Verificador</th>
		              <th>Empresa</th>
		              <th>Fecha De Asignación</th>
		          </tr>
		        </thead>
				<?php require 'conexion.php';

				$s = "SELECT verificadorxempresa.id, empresa.razon_social, concat(persona.nombre1,' ',ifnull(persona.nombre2,' '),' ',persona.apellido1,' ',persona.paellido2) as verificador, verificadorxempresa.fecha_asignacion from verificadorxempresa 
					INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
					INNER JOIN persona ON persona.id = verificadorxempresa.persona_id order by verificador";

				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));

				if (mysqli_num_rows($r)>0) {
					while ($data=mysqli_fetch_assoc($r)) {
				?>
		      	<tbody>
			          <tr>
			          	<td><?php echo "$data[id]"; ?></td>
			            <td><?php echo "$data[verificador]"; ?></td>
			            <td><?php echo "$data[razon_social]"; ?></td>
			            <td><?php echo "$data[fecha_asignacion]"; ?></td>
			            <td><a href="#modal1" id="cargar_datos_usuario" class="waves-effect waves-white btn-flat white-text modal-trigger" style="background-color:#00853b;" onclick="cargar_datos('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
			            <td><a href="#!" id="borrar_datos_usuario" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
			          </tr>
	
				<?php }
				} ?>
		        </tbody>
			 </table>
		</div>
	</div>

	<div id="modal1" class="modal">
    <div class="modal-content" id="centenido">
     
    </div>
    <div class="modal-footer" >
     <button  class='waves-effect yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar'><i class='material-icons right'>create</i>Modificar</button>
    </div>
  </div>

  </div>
          </span>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/accion_admin_verificador.js"></script>