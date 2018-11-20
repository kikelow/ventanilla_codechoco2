<?php 
  if(!isset($_SESSION["vev_admin_contenido"])){
    header("Location:index.php");
    exit();
  }
 ?>
<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Contenidos</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>


<div class="row">
	<div class="col s12">
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_new_content2">Cerrar</a>
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_content">Nuevo Contenido</a>
	</div>
	<div class="col s12">
		<div class="oculto s12">
			<form action="" id="content_form">

					<div class="input-field col s12">
			         <input placeholder="" id="id" type="hidden" class="validate" name="id">
			        </div>

		      		<div class="input-field col s12">
		             <input placeholder="" id="titulo" type="text" class="validate" name="titulo">
		             <label for="titulo">Titulo</label>
	    	        </div>
                     <div class="input-field col s12">
					    <select name="alias" id="alias">
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
			          <textarea id="descripcion" class="materialize-textarea" name="descripcion"></textarea>
			          <label for="textarea1"></label>
			        </div> 

			          <div class="input-field col s12">
			  		    <select name="imagen" id="imagen">
			  		      <option value="" disabled selected>Seleccione...</option>
			  
			  				<?php 
			  				$s = "SELECT * from img_page order by id asc";
			  				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
			  				if (mysqli_num_rows($r)>0) {
			  					while ($data=mysqli_fetch_assoc($r)) {
			  				?>
			  		      <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>			   
			  				<?php }
			  				} ?>
			  			 </select>
			  		    <label>Imagen Relacionada</label>
			  	</div> 

		      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_content" class="waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;">Guardar</a>
				<a href="#!" id="btn_modifcar_qs" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="editar_qs()">Modificar</a>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col s12 ">
		<ul class="collapsible">
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>¿Quienes Sómos?</div>
		      <div class="collapsible-body">
		      	<span>

					<table class=" highlight" id="tabla_qs">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Alias</th>
			              <th>Imagen Relacionada</th>
			              <th>Edit</th>
			              <th>Delete</th>
			          </tr>
			        </thead>
					<?php 
					$s = "SELECT c.id as id,c.titulo as titulo, a.nombre as alias,i.nombre as imagen from contenido c, alias a,img_page i where a.nombre = 'Quienes somos' and c.alias_id = a.id and c.id_img_page = i.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[alias]"; ?></td>
				            <td><?php echo "$data[imagen]"; ?></td>
				            <td><a href="#content_form" id="cargar_datos_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		
					<?php }
					} ?>
			        </tbody>
			      </table>
		        </span>
		  	  </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Servicios</div>
		      <div class="collapsible-body">
		      	<span>
		      		
					<table class="responsive-table highlight" id="tabla_qs">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Alias</th>
			              <th>Imagen Relacionada</th>
			              <th>Edit</th>
			              <th>Delete</th>
			          </tr>
			        </thead>
					<?php 
					$s = "SELECT c.id as id,c.titulo as titulo, a.nombre as alias,i.nombre as imagen from contenido c, alias a,img_page i where a.nombre = 'Servicios' and c.alias_id = a.id and c.id_img_page = i.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[alias]"; ?></td>
				            <td><?php echo "$data[imagen]"; ?></td>
				            <td><a href="#content_form" id="cargar_datos_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		
					<?php }
					} ?>
			        </tbody>
			      </table>


		       </span>
		  	 </div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Negocios Verdes</div>
		      <div class="collapsible-body">
		      	<span>
		      		<!-- para mercados verdes -->
					<table class=" highlight" id="tabla_qs">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Alias</th>
			              <th>Imagen Relacionada</th>
			              <th>Edit</th>
			              <th>Delete</th>
			          </tr>
			        </thead>
					<?php 
					$s = "SELECT c.id as id,c.titulo as titulo, a.nombre as alias,i.nombre as imagen from contenido c, alias a,img_page i where a.nombre = 'Negocios verdes' and c.alias_id = a.id and c.id_img_page = i.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[alias]"; ?></td>
				            <td><?php echo "$data[imagen]"; ?></td>
				            <td><a href="#content_form" id="cargar_datos_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_qs('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		
					<?php }
					} ?>
			        </tbody>
			      </table>

		      	</span>
		      	<!-- fi para oticias ////////////////////////////////////////////////////////////////////////////-->
		  	</div>
		    </li>
		    <li>
		      <div class="collapsible-header"><i class="material-icons">chrome_reader_mode</i>Noticias</div>
		      <div class="collapsible-body">
		      	<span>

		      		<table class="responsive-table highlight" id="tabla_qs">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Fecha de Publicación</th>
			              <th>Fuente/Autor</th>
			              <th>Editar</th>
			              <th>Eliminar</th>
			          </tr>
			        </thead>
					<?php 
					$s = "SELECT n.id as id,n.titulo as titulo,n.fecha_publicacion,n.fuente_autor,i.nombre as imagen from noticia n, img_page i where n.id_img_page = i.id order by fecha_publicacion desc ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[fecha_publicacion]"; ?></td>
				            <td><?php echo "$data[fuente_autor]"; ?></td>
				           <!--  <td><?php echo "$data[imagen]"; ?></td> -->
				            <td><a href="#content_form_nt" id="cargar_datos_nt" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_nt('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_nt('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      	
					<?php }
					} ?>
			        </tbody>
			      </table>


		      		
				  <div class="row">
				  	<div class="col s12">
				  		 
				  		<form action="" id="content_form_nt">
						
						<div class="input-field col s12">
				         <input placeholder="" id="id_nt" type="hidden" class="validate" name="id_nt">
				        </div>

				  		<div class="input-field col s12">
				         <input placeholder="" id="titulo_nt" type="text" class="validate" name="titulo_nt">
				         <label for="titulo_nt">Titulo</label>
				        </div>

		
				     
						<div class="input-field col s12">
				          <textarea id="descripcion_nt" class="materialize-textarea" name="descripcion_nt"></textarea>
				          <label for="descripcion_nt"></label>
				        </div>


				        <div class="input-field col s12">
				         <input placeholder="" id="autor_nt" type="text" class="validate" name="autor_nt">
				         <label for="autor_nt">Fuente o Autor</label>
				        </div>

				        <div class="input-field col s12">
				  		    <select name="imagen_nt" id="imagen_nt">
				  		      <option value="" disabled selected>Seleccione...</option>
				  
				  				<?php 
				  				$s = "SELECT * from img_page order by id asc";
				  				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
				  				if (mysqli_num_rows($r)>0) {
				  					while ($data=mysqli_fetch_assoc($r)) {
				  				?>
				  		      <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>			   
				  				<?php }
				  				} ?>
				  			 </select>
				  		    <label>Imagen Relacionada</label>
				  	</div> 
				  </form>
				  
				    <div class="">
				      <a href="#!" id="btn_guardar_not" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" >Guardar</a>

				      <a href="#!" id="btn_modificar_not" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;margin-right: 10px;" onclick="editar_nt()">Modificar</a>

				      <a href="#!" id="btn_limpiar_not" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;margin-right: 10px;" onclick="limpiar_nt()">Limpiar</a>


				    </div>
				  	</div>
				  </div>
			  	</span>
			  </div>

			  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
		<form action="" id="image_form" enctype="multipart/form-data" method="post">
				
				<div class="input-field col s12">
			         <input placeholder="" id="id_img" type="hidden" class="validate" name="id_img">
			    </div>

	      		<div class="input-field col s12">
	             <input placeholder="" id="nombre_imagen" type="text" class="validate" name="nombre_imagen">
	             <label for="nombre_imagen">Nombre</label>
    	        </div>					

				 <div class='file-field input-field col s12'>
     				<div class='btn'>
    					<span>Archivo</span>
    					<input type='file' name='file_img' id='file_img'>
  					</div>
  					<div class='file-path-wrapper'>
    					<input class='file-path validate' type='text' id="nombre_img">
  					</div>  
    			</div>   			
	      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_image" class="modal-action modal-close waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;">Guardar</a>
				<a href="#!" id="btn_modificar_image" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="editar_img()">Modificar</a> 
				<a href="#!" id="btn_limpiar_image" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="limpiar_img()">Limpiar</a>  
			</div>
		
			


		</div>
	</div>
	<div class="row">
		<div class="col s12">
		<table class="responsive-table highlight" id="tabla_img">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Nombre</th>
			              <th>Ruta Imagen</th>
			             
			          </tr>
			        </thead>
					<?php 
						$s = "SELECT i.id,i.nombre,i.ruta,n.id_img_page as 'noticia',c.id_img_page as 'contenido',s.id_img_page as 'slide'

							FROM img_page i

							left JOIN noticia n ON i.id = n.id_img_page
							left JOIN contenido c ON i.id = c.id_img_page
							left JOIN slide s ON i.id = s.id_img_page";

					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<?php if ($data['id'] == $data['noticia'] || $data['id'] == $data['contenido'] || $data['id'] == $data['slide'] ) { ?>
				          		
				          		<td><?php echo "$data[id]"; ?></td>
				            	<td><?php echo "$data[nombre]"; ?></td>
				            	<td><?php echo "$data[ruta]"; ?></td>
				            	<td><a href="#image_form" id="cargar_datos_img" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_img('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            	<td><a href="#!" id="eliminar_datos_img" class="disabled waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_img('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          		</tr>
							<?php

				          	}
				          	else
				          	{ ?>
								
								<td><?php echo "$data[id]"; ?></td>
				            	<td><?php echo "$data[nombre]"; ?></td>
				            	<td><?php echo "$data[ruta]"; ?></td>
				            	<td><a href="#image_form" id="cargar_datos_img" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_img('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            	<td><a href="#!" id="eliminar_datos_img" class=" waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_img('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          		</tr>

				      <?php } ?>	          			      	
					<?php }
					} ?>
			        </tbody>
			      </table>
	</div>
	</div>
	

</div>

<!-- para archivos -->

<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Archivos</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>


<div class="row">
	<div class="col s12">
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_cerrar_archivo">Cerrar</a>
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_archivo">Nuevo Archivo</a>
	</div>

	<div class="col s12">
		<div class="oculto3 s12">
		<form action="" id="archivo_form" enctype="multipart/form-data" method="post">

				<div class="input-field col s12">
			         <input placeholder="" id="id_file" type="hidden" class="validate" name="id_file">
			    </div>

	      		<div class="input-field col s12">
	             <input placeholder="" id="nombre_archivo" type="text" class="validate" name="nombre_archivo">
	             <label for="nombre_archivo">Nombre</label>
    	        </div>					

				 <div class='file-field input-field col s12'>
     				<div class='btn'>
    					<span>Archivo</span>
    					<input type='file' name='file' id='file'>
  					</div>
  					<div class='file-path-wrapper'>
    					<input class='file-path validate' type='text' id="nombre_file" >
  					</div>  
    			</div> 

    			<div class="input-field col s12">
				  		    <select name="alias_archivo" id="alias_archivo">
				  		      <option value="" disabled selected>Seleccione...</option>
				  
				  				<?php 
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


	      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_archivo" class="waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;">Guardar</a> 
				<a href="#!" id="btn_modificar_archivo" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="editar_file()">Modificar</a>  
				<a href="#!" id="btn_eliminar_archivo" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="limpiar_file()">Limpiar</a>  
			</div>
		</div>
	</div>


	<div class="col s12">
		<table class="responsive-table highlight" id="tabla_img">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Nombre</th>
			              <th>Ruta Archivo</th>
			              <th>Alias</th>
			          </tr>
			        </thead>
					<?php 
					$s = "SELECT a.id,a.nombre,a.ruta,c.nombre as alias from archivo_page a,alias c where a.alias_id = c.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[nombre]"; ?></td>	
				            <td><?php echo "$data[ruta]"; ?></td>
				            <td><?php echo "$data[alias]"; ?></td>
				            <td><a href="#archivo_form" id="cargar_datos_archivo" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_archivo('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_file('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		</tbody>
					<?php }
					} ?>

			      </table>
	</div>

</div>

<!-- modales -->

<!-- para slidee -->

<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Slide</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>


<div class="row">
	<div class="col s12">
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_cerrar_slide">Cerrar</a>
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_slide">Nuevo Slide</a>
	</div>

	<div class="col s12">
		<div class="oculto5 s12">
		<form action="" id="slide_form" method="post">
				
				<div class="input-field col s12">
			         <input placeholder="" id="id_slide" type="hidden" class="validate" name="id_slide">
			    </div>

	      		<div class="input-field col s12">
	             <input placeholder="" id="titulo_slide" type="text" class="validate" name="titulo_slide">
	             <label for="titulo">Titulo</label>
    	        </div>					

    	        <div class="input-field col s12">
			          <textarea id="descripcion_slide" class="materialize-textarea" name="descripcion_slide"></textarea>
			          <label for="textarea">Descripción</label>
			        </div> 

				<!--  <div class='file-field input-field col s12'>
     				<div class='btn'>
    					<span>Archivo</span>
    					<input type='file' name='file' id='file'>
  					</div>
  					<div class='file-path-wrapper'>
    					<input class='file-path validate' type='text' >
  					</div>  
    			</div>  -->

    			<div class="input-field col s12">
				  		    <select name="img_slide" id="img_slide">
				  		      <option value="" disabled selected>Seleccione...</option>
				  
				  				<?php 
				  				$s = "SELECT * from img_page order by id asc";
				  				$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
				  				if (mysqli_num_rows($r)>0) {
				  					while ($data=mysqli_fetch_assoc($r)) {
				  				?>
				  		      <option value="<?php echo $data['id'] ?>"><?php echo $data['nombre'] ?></option>			   
				  				<?php }
				  				} ?>
				  			 </select>
				  		    <label>Imagen</label>
				  	</div>


	      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_slide" class="waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;">Guardar</a>
				 <a href="#!" id="btn_modificar_slide" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;margin-right: 10px;" onclick="editar_slide()">Modificar</a> 
				 <a href="#!" id="btn_eliminar_slide" class="right waves-effect waves-white btn-flat white-text" style="background-color:#00853b;margin-right: 10px;" onclick="limpiar_slide()">Limpiar</a>  
			</div>
		</div>
	</div>

	<div class="col s12">
		 <table class="responsive-table highlight" id="tabla_img">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Titulo</th>
			              <th>Descripción</th>
			              <th>Ruta Imagen</th>
			          </tr>
			        </thead>
				 	<?php 
					$s = "SELECT a.id,a.titulo,a.descripcion,i.ruta as ruta from slide a,img_page i where a.id_img_page = i.id ";
					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?> 
			      	   <tbody>
				          <tr>
				          	<td><?php echo "$data[id]"; ?></td>
				            <td><?php echo "$data[titulo]"; ?></td>
				            <td><?php echo "$data[descripcion]"; ?></td>
				            <td><?php echo "$data[ruta]"; ?></td>
				            <td><a href="#slide_form" id="cargar_datos_qs" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_slide('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            <td><a href="#!" id="" class="modal-action modal-close waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_slide('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          </tr>
			      		</tbody>
					<?php }
					} ?>

			      </table> 
	</div>
	

</div>

<!-- para partner -->
<div class="row">
	<div class="col s12"><h4 class="diagonal" style="text-align: center;">Colaboradores</h4> <div class="divider" style=" background-color:  #00853b;"></div></div>
</div>


<div class="row">
	<div class="col s12">
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;" id="btn_cerrar_colaborador">Cerrar</a>
		<a class="waves-effect waves-light btn right " style=" background-color:  #00853b;margin-right: 10px;" id="btn_new_colaborador">Nueva Colaborador</a>
	</div>

	<div class="col s12">
		<div class="oculto6 s12">
		<form action="" id="partner_form" enctype="multipart/form-data" method="post">
				
				<div class="input-field col s12">
			         <input placeholder="" id="id_partner" type="hidden" class="validate" name="id_partner">
			    </div>

	      		<div class="input-field col s12">
	             <input placeholder="" id="nombre_partner" type="text" class="validate" name="nombre_partner">
	             <label for="nombre_imagen">Nombre</label>
    	        </div>					

				 <div class='file-field input-field col s12'>
     				<div class='btn'>
    					<span>Archivo</span>
    					<input type='file' name='file_partner' id='file_partner'>
  					</div>
  					<div class='file-path-wrapper'>
    					<input class='file-path validate' type='text' id="nombre_partner">
  					</div>  
    			</div>   			
	      </form>
			<div class="col s12">
				<a href="#!" id="btn_guardar_partner" class="modal-action modal-close waves-effect waves-white btn-flat white-text right" style=" background-color:  #00853b;">Guardar</a>
				<a href="#!" id="btn_modificar_partner" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="editar_partner()">Modificar</a> 
				<a href="#!" id="btn_limpiar_partner" class="waves-effect waves-white btn-flat white-text right" style="background-color:#00853b;margin-right: 10px;" onclick="limpiar_partner()">Limpiar</a>  
			</div>
		
			


		</div>
	</div>
	<div class="row">
		<div class="col s12">
		<table class="responsive-table highlight" id="tabla_partner">
			        <thead>
			          <tr>
			          	  <th>ID</th>
			              <th>Nombre</th>
			              <th>Ruta Imagen</th>
			             
			          </tr>
			        </thead>
					<?php 
						$s = "SELECT id,nombre,ruta FROM partner_page";

					$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
					if (mysqli_num_rows($r)>0) {
						while ($data=mysqli_fetch_assoc($r)) {
					?>
			      	   <tbody>
				          <tr>
					
				          		<td><?php echo "$data[id]"; ?></td>
				            	<td><?php echo "$data[nombre]"; ?></td>
				            	<td><?php echo "$data[ruta]"; ?></td>
				            	<td><a href="#partner_form" id="cargar_datos_partner" class="waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="cargar_datos_partner('<?php echo "$data[id]"; ?>')"><i class="material-icons">mode_edit</i></a></td>
				            	<td><a href="#!" id="eliminar_datos_partner" class=" waves-effect waves-white btn-flat white-text" style="background-color:#00853b;" onclick="borrar_datos_partner('<?php echo "$data[id]"; ?>')"><i class="material-icons">delete</i></a></td>
				          		</tr>
							
							
		      <?php } ?>	          			      	
			<?php } ?>
	        </tbody>
	      </table>
	</div>
</div>
	

</div>