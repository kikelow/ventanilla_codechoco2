<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Contenidos</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>





<div class="row">
	<div class="col s12 ">
		<ul class="collapsible">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>¿Quienes Sómos?</div>
		      <div class="collapsible-body">
		      	<span>
		      		<div class="row">
						<div class="col s12">
							<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_new_content2">Cerrar</a>
							<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_content">Nuevo Contenido</a>
						</div>
						<div class="col s12">
							<div class="oculto s12">
								<form action="" id="content_form">
							      		<div class="input-field col s12">
							             <input placeholder="" id="titulo" type="text" class="validate" name="titulo">
							             <label for="titulo">Titulo</label>
						    	        </div>
					                     <div class="input-field col s12">
										    <select name="alias">
										      <option value="" disabled selected>Seleccione...</option>

												<?php require 'conexion.php';
												$s = "SELECT * from alias order by id asc";
												$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
												if (mysqli_num_rows($r)>0) {
													while ($data=mysqli_fetch_assoc($r)) {
												?>
										      <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>			   
												<?php }
												} ?>
											 </select>
										    <label>Alias</label>
										 </div>
						    	     
										<div class="input-field col s12">
								          <textarea id="textarea1" class="materialize-textarea" name="descripcion"></textarea>
								          <label for="textarea1"></label>
								        </div> 	
							      </form>
								<div class="col s12">
									<a href="#!" id="btn_guardar_content" class="modal-action modal-close waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;margin-top: 10px;">Guardar</a>
								</div>
							</div>
						</div>
					</div>
					<table class="responsive-table highlight" id="tabla_qs">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Alias</th>
			              <th>Edit</th>
			              <th>Delete</th>
			          </tr>
			        </thead>
					<?php require 'conexion.php';
					$s = "SELECT c.id as id,c.titulo as titulo, a.nombre as alias from contenido c, alias a where a.nombre = 'Quienes somos' and c.alias_id = a.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[alias]"; ?></td>
				            <td><a href="#modal_editar_content_q_somos" id="cargar_datos_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		</tbody>
					<?php }
					} ?>
			        </tbody>
			      </table>
		        </span>
		  	  </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Servicios</div>
		      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Negocios Verdes</div>
		      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Noticias</div>
		      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Mercados Evaluados</div>
		      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
		    </li>
	  	</ul>
        
	</div>
</div>

<!-- para imagenes -->

<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Imagenes</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>


<div class="row">
	<div class="col s12">
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_new_image2">Cerrar</a>
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_image">Nueva Imagen</a>
	</div>
	<div class="col s12">
		<div class="oculto2 s12">
			<form action="" id="image_form">
		      		<div class="input-field col s12">
		             <input placeholder="" id="nombre" type="text" class="validate" name="nombre">
		             <label for="nombre">Nombre</label>
	    	        </div>					

					 <div class='file-field input-field col s12'>
         				<div class='btn'>
        					<span>Archivo</span>
        					<input type='file' name='archivo' id='archivo'>
      					</div>
      					<div class='file-path-wrapper'>
        					<input class='file-path validate' type='text' >
      					</div>  
        			</div>   			
		      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_image" class="modal-action modal-close waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;margin-top: 10px;">Guardar</a>  
			</div>
		</div>
	</div>
</div>

<!-- modales -->

  <!-- Modal Structure -->
  <div id="modal_editar_content_q_somos" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modificar Contenido</h4>
      
      <form action="" id="content_form">
		
		<div class="input-field col s12">
         <input placeholder="" id="id2" type="hidden" class="validate" name="id">
        </div>

  		<div class="input-field col s12">
         <input placeholder="" id="titulo2" type="text" class="validate" name="titulo">
         <label for="titulo">Titulo</label>
        </div>

	 <!--         <div class="input-field col s12">
			    <select name="alias2" id="alias2">
			      <option value="" disabled selected>Seleccione...</option>

					<?php require 'conexion.php';
					$s = "SELECT * from alias order by id asc";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>			   
					<?php }
					} ?>
				 </select>
			    <label>Alias</label>
			 </div> -->
     
		<div class="input-field col s12">
          <textarea id="descripcion2" class="materialize-textarea" name="descripcion"></textarea>
          <label for="textarea1"></label>
        </div> 	
  </form>
    </div>
    <div class="modal-footer">
      <a href="#!" id="btn_modifcar_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="editar_qs()">Modificar</a>
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
    </div>
  </div>