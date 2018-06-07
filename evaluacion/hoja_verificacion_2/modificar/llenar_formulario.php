<?php
	if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../../conexion.php');
    }
    $empresa = $_POST['empresa_m'];
    $calificador_id = "";
	$observacion = "";
	$evidencia = "";
    $opciones_id = "";
    $i = 0;
    echo "<div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
      <h6>NOTA: Si desea caragar algún archivo, su tamaño debe ser inferior a 300kb</h6>
    </div>  "; 
    echo " <hr style='border: 1px solid green'><h5>Nivel 1. Criterios de Cumplimiento de Negocios Verdes</h5><ul class='collapsible' data-collapsible='accordion'>"; 



        $s="SELECT id,nombre from opciones where codigo LIKE '%VIABILIDAD_ECONOMICA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Viabilidad económica del Negocio</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Viabilidad económica del Negocio</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>"
         ;
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }

              }
          }
          echo "</div></li>";

// segundo li
          $s="SELECT id,nombre from opciones where codigo LIKE '%CONTRIBUCION_CONSERVACION%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

 // Tercer li
          $s="SELECT id,nombre from opciones where codigo LIKE '%CICLO_VIDA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Enfoque ciclo de vida del bien o servicio</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Enfoque ciclo de vida del bien o servicio</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

 // Cuarto li
          $s="SELECT id,nombre from opciones where codigo LIKE '%VIDA_UTIL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Vida útil</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Vida útil</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";
     // Quinto li
          $s="SELECT id,nombre from opciones where codigo LIKE '%SUSTITUCION_MATERIALES%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Sustitución de sustancias o materiales peligrosos</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Sustitución de sustancias o materiales peligrosos</div>
			      <div class='row' style='border: 1px solid;height: 170px;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

 // Sexto li
          $s="SELECT id,nombre from opciones where codigo LIKE '%MATERIALES_RECICLADOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Reciclabilidad y/o uso de materiales reciclados</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Reciclabilidad y/o uso de materiales reciclados</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
        

              }
          }
          echo "</div></li>";

// Septimo li
          $s="SELECT id,nombre from opciones where codigo LIKE '%SOSTENIBLE_RECURSO%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

// Octavo li
          $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_EMPRESA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social al interior de la empresa</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social al interior de la empresa</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
        

              }
          }
          echo "</div></li>";

// Noveno li
          $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_VALOR%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social en la cadena de valor de la empresa</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social en la cadena de valor de la empresa</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

 // Decimo li
          $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_EXTERIOR%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social al exterior de la empresa</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social al exterior de la empresa</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
         

              }
          }
          echo "</div></li>";

// Once li
          $s="SELECT id,nombre from opciones where codigo LIKE '%COMUNICACION_ATRIBUTOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
            	echo "<li>
			      <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Comunicación de atributos del bien y servicio</div>
			      <div class='collapsible-body'>
			         <div class='row' style='text-align: center;background-color: #bdbdbd;'>Comunicación de atributos del bien y servicio</div>
			      <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			        <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
              	$opciones_id = $rw['id'];
                $i++;

              	$s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
						$evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $calificador_id) {
                    		echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}else{
                    		echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    	}
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
        

              }
          }
          echo "</div></li></ul>";

echo "<h5> Nivel 2. Criterios Adicionales (ideales) Negocios Verdes</h5><ul class='collapsible' data-collapsible='accordion'>";

// Doce li
          $s="SELECT id,nombre from opciones where codigo LIKE '%ESQUEMAS_RECONOCIMIENTOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Esquemas, programas o reconocimientos ambientales o
sociales implementados o recibidos.</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Esquemas, programas o reconocimientos ambientales o
sociales implementados o recibidos.</div>
            <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $i++;

                $s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
            $evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                      if ($result1['id'] == $calificador_id) {
                        echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
        

              }
          }
          echo "</div></li>";

// Trece li
          $s="SELECT id,nombre from opciones where codigo LIKE '%RESPON_SOCIAL_ADICCIONAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social al interior de la empresa adicional</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social al interior de la empresa adicional</div>
            <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $i++;

                $s2="SELECT * from verificacion_2 WHERE opciones_id = '$opciones_id'  AND empresa_id = '$empresa'";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $calificador_id = $result2['calificador_id'];
                        $observacion = $result2['observacion'];
            $evidencia = $result2['evidencia'];
                    }
                  }
                  echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador_m[]' id='verifica2_calificador_m".$i."'>
          ";
          $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                      if ($result1['id'] == $calificador_id) {
                        echo"<option  value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                      }else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                  }
            echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs_m".$i."' name='verificacion2_obs_m[]' class='materialize-textarea'>$observacion</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>";
        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
          <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
        </div>";
            

              }
        }
          }
          echo "</div></li></ul>";

          $division = 0;
$suma = 0;
$s="SELECT verificacion_2.empresa_id, calificador.nombre AS calificador,verificacion_2.opciones_id FROM verificacion_2
INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id
WHERE verificacion_2.empresa_id = '$empresa' AND verificacion_2.opciones_id IN(86,87,88,89,137) ORDER BY verificacion_2.opciones_id";
$r = mysqli_query($conn,$s);
while ($rw = mysqli_fetch_assoc($r)) {
  if ($rw['calificador'] == 'N/A') {
    $division = $division;
  }else{
    $division++;
  }
$suma = $suma + $rw['calificador'];
}
$prom1 = round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 90 AND verificacion_2.opciones_id <= 97 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom2 =  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 98 AND verificacion_2.opciones_id <= 102 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom3=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 103 AND verificacion_2.opciones_id <= 105 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom4=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id = 106 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom5=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 107 AND verificacion_2.opciones_id <= 110 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom6=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 111 AND verificacion_2.opciones_id <= 116 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom7=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 117 AND verificacion_2.opciones_id <= 119 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom8=  round($suma/$division*100, 2) ;

  $division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 120 AND verificacion_2.opciones_id <= 122 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom9=  round($suma/$division*100, 2) ;


$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 123 AND verificacion_2.opciones_id <= 128 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom10=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 129 AND verificacion_2.opciones_id <= 130 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom11=  round($suma/$division*100, 2) ;

  $suma_total = $prom1+$prom2+$prom3+$prom4+$prom5+$prom6+$prom7+$prom8+$prom9+$prom10+$prom11;
  $prom_total1= round($suma_total/11, 2);

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 133 AND verificacion_2.opciones_id <= 134 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom12=  round($suma/$division*100, 2) ;

$division = 0;
$suma = 0;
$s="SELECT verificacion_2.id, calificador.nombre AS calificador, verificacion_2.opciones_id FROM verificacion_2 INNER JOIN calificador ON calificador.id = verificacion_2.calificador_id WHERE verificacion_2.opciones_id >= 135 AND verificacion_2.opciones_id <= 136 AND verificacion_2.empresa_id = '$empresa' ORDER BY verificacion_2.opciones_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A') {
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  $prom13=  round($suma/$division*100, 2) ;

  $suma_total2 = $prom12+$prom13;
  $prom_total2= round($suma_total2/2, 2);

          echo'<table class="" style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%;" class="green center" colspan="2">Resultado Nivel 1. Criterios de Cumplimiento de Negocios Verdes</th>
            </tr>
            <tr>
              <th style="width: 90%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Viabilidad económica del Negocio</td>
              <td id="prom1m">'.$prom1.'% <input type="hidden" id="td1" value="'.$prom1.'" /> </td>
            </tr>
            <tr>
              <td>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</td>
              <td id="prom2m">'.$prom2.'% <input type="hidden" id="td2" value="'.$prom2.'" /></td>
            </tr>
            <tr>
              <td>Enfoque ciclo de vida del bien o servicio</td>
              <td id="prom3m">'.$prom3.'% <input type="hidden" id="td3" value="'.$prom3.'" /></td>
            </tr>
            <tr>
              <td>Vida útil</td>
              <td id="prom4m">'.$prom4.'% <input type="hidden" id="td4" value="'.$prom4.'" /></td>
            </tr>
            <tr>
              <td>Sustitución de sustancias o materiales peligrosos</td>
              <td id="prom5m">'.$prom5.'% <input type="hidden" id="td5" value="'.$prom5.'" /></td>
            </tr>
            <tr>
              <td>Reciclabilidad y/o uso de materiales reciclados</td>
              <td id="prom6m">'.$prom6.'% <input type="hidden" id="td6" value="'.$prom6.'" /></td>
            </tr>
            <tr>
              <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
              <td id="prom7m">'.$prom7.'% <input type="hidden" id="td7" value="'.$prom7.'" /></td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa</td>
              <td id="prom8m">'.$prom8.'% <input type="hidden" id="td8" value="'.$prom8.'" /></td>
            </tr>
            <tr>
              <td>Responsabilidad social en la cadena de valor de la empresa</td>
              <td id="prom9m">'.$prom9.'% <input type="hidden" id="td9" value="'.$prom9.'" /></td>
            </tr>
            <tr>
              <td>Responsabilidad social al exterior de la empresa</td>
              <td id="prom10m">'.$prom10.'% <input type="hidden" id="td10" value="'.$prom10.'" /></td>
            </tr>
            <tr>
              <td>Comunicación de atributos del bien y servicio</td>
              <td id="prom11m">'.$prom11.'% <input type="hidden" id="td11" value="'.$prom11.'" /></td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="totalm">'.$prom_total1.'% </th>
            </tr>

          </tbody>

        </table>

        <table style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%;" class="green center" colspan="2">Resultado Nivel 2. Criterios Adicionales (ideales) Negocios Verdes</th>
            </tr>
            <tr>
              <th style="width: 90%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Esquemas, programas o reconocimientos implementados o recibidos</td>
              <td id="prom12m">'.$prom12.'% <input type="hidden" id="td12" value="'.$prom12.'" /></td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa adicional</td>
              <td id="prom13m">'.$prom13.'%  <input type="hidden" id="td13" value="'.$prom13.'" /></td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total2m">'.$prom_total2.'% </th>
            </tr>
            
          </tbody>
        </table>
';
echo '<table style="margin-top:20px;width:100%">
          <thead>
            <tr>
              <th style="width: 100%; background-color:#a5d6a7" class="green center" colspan="2">Resultado Nivel 1 + Nivel 2</th>
            </tr>
            <tr>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="width: 90%">Puntaje Total. Criterios de Cumplimiento de Negocios Verdes</td>
              <td id="puntaje1m" style="width: 10%">'.$prom_total1.'%</td>
            </tr>
            <tr>
              <td>Puntaje Total.  Criterios Adicionales (ideales) Negocios Verdes</td>
              <td id="puntaje2m">'.$prom_total2.'%</td>
            </tr>
            <tr>';
              $suma_total3 = $prom_total1+$prom_total2;
              $resultado= round($suma_total3/2, 2);
           echo '
              <th class=" grey lighten-1">Resultado</th>
              <th class="grey lighten-1" id="resultado">'.$resultado.'% </th>
               <input type="hidden" name="prom_form_m" value="'.$resultado.'" id="prom_form_m" />
            </tr>
            
          </tbody>
        </table>';

          echo"<hr>  <button  class=' yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_verificacion2'><i class='material-icons right'>create</i>Modificar</button>

<script type='text/javascript' src='js/accion_verificacion2.js'></script>
	<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')


  })

</script>";	

?>