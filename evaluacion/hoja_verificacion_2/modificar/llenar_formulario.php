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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."' value='$evidencia'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

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
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia_m[]' id='verificacion2_evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_veidencia[]' >
      </div>
            
          </div>
        </div>
      ";

              }
          }
          echo "</div></li>";

          echo"</ul> <button  class=' yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_verificacion2'><i class='material-icons right'>create</i>Modificar</button>


	<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')


  })

</script>";	

?>