<?php 
if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {
    
        require_once('../../conexion.php');
    }

    $i = 0;
	$empresa = $_POST['empresa_m'];
	$opciones_id = "";
	$si_no_noaplica = "";
	$observacon = "";
	$verificacion = "";
	echo" <ul class='collapsible' data-collapsible='accordion'>";
	$s="SELECT id,nombre from opciones where codigo LIKE '%CUMPLIMIENTO_LEGAL%'  order by id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
               $opciones_id = $rw[0];
				$i++;
	echo" 
			<li>
			  <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Cumplimiento legal</div>
			  <div class='collapsible-body'>
			  	<div class='row' style='text-align: center;background-color: #bdbdbd;'>Cumplimiento legal</div>
			  <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			    <div class='divider' ></div>
					
    
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no_m[]' id='verifica1_si_no_m".$i."'>";
          $s2="SELECT si_no_noaplica_id,observacion,verificacion from verificacion_1 WHERE opciones_id = '$opciones_id'  ";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $si_no_noaplica = $result2['si_no_noaplica_id'];
                        $observacon = $result2['observacion'];
						$verificacion = $result2['verificacion'];
                    }
                  }

            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $si_no_noaplica) {
                    	echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}
                    	else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs_m".$i."' name='verificacion1_obs_m[]' class='materialize-textarea'>$observacon</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri_m".$i."'' name='verificacion1_veri_m[]' class='materialize-textarea'>$verificacion</textarea>
          <label for='r' class='activar'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>

					

				</div>
			   </li>
			";
            }
        }


        // ---------------------------------------segundo li

        echo"<li>
			  <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Condiciones laborales</div>
			  <div class='collapsible-body'>
			  	<div class='row' style='text-align: center;background-color: #bdbdbd;'>Condiciones laborales</div>
			  <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			    <div class='divider' ></div> ";
        $s="SELECT id,nombre from opciones where codigo LIKE '%CONDICION_LABORAL%'  order by id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
               $opciones_id = $rw[0];
				$i++;
	echo" 
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no_m[]' id='verifica1_si_no_m".$i."'>";
          $s2="SELECT si_no_noaplica_id,observacion,verificacion from verificacion_1 WHERE opciones_id = '$opciones_id'  ";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $si_no_noaplica = $result2['si_no_noaplica_id'];
                        $observacon = $result2['observacion'];
						$verificacion = $result2['verificacion'];
                    }
                  }

            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $si_no_noaplica) {
                    	echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}
                    	else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs_m".$i."' name='verificacion1_obs_m[]' class='materialize-textarea'>$observacon</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri_m".$i."'' name='verificacion1_veri_m[]' class='materialize-textarea'>$verificacion</textarea>
          <label for='r' class='activar'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";
            }
        }
        echo"</div></li>";

        // ---------------------------------------tercer li

        echo"<li>
			  <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos</div>
			  <div class='collapsible-body'>
			  	<div class='row' style='text-align: center;background-color: #bdbdbd;'>Impacto ambiental positivo y contribución a la conservación y preservación de los recursos ecosistemicos</div>
			  <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			    <div class='divider' ></div> ";
        $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_AMBIENTAL%'  order by id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
               $opciones_id = $rw[0];
				$i++;
	echo" 
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no_m[]' id='verifica1_si_no_m".$i."'>";
          $s2="SELECT si_no_noaplica_id,observacion,verificacion from verificacion_1 WHERE opciones_id = '$opciones_id'  ";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $si_no_noaplica = $result2['si_no_noaplica_id'];
                        $observacon = $result2['observacion'];
						$verificacion = $result2['verificacion'];
                    }
                  }

            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $si_no_noaplica) {
                    	echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}
                    	else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs_m".$i."' name='verificacion1_obs_m[]' class='materialize-textarea'>$observacon</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri_m".$i."'' name='verificacion1_veri_m[]' class='materialize-textarea'>$verificacion</textarea>
          <label for='r' class='activar'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";
            }
        }
        echo"</div></li>";

                // ---------------------------------------cuarto li

        echo"<li>
			  <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Impacto social positivo</div>
			  <div class='collapsible-body'>
			  	<div class='row' style='text-align: center;background-color: #bdbdbd;'>Impacto social positivo</div>
			  <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			    <div class='divider' ></div> ";
        $s="SELECT id,nombre from opciones where codigo LIKE '%IMPACTO_SOCIAL%'  order by id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
               $opciones_id = $rw[0];
				$i++;
	echo" 
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no_m[]' id='verifica1_si_no_m".$i."'>";
          $s2="SELECT si_no_noaplica_id,observacion,verificacion from verificacion_1 WHERE opciones_id = '$opciones_id'  ";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $si_no_noaplica = $result2['si_no_noaplica_id'];
                        $observacon = $result2['observacion'];
						$verificacion = $result2['verificacion'];
                    }
                  }

            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $si_no_noaplica) {
                    	echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}
                    	else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs_m".$i."' name='verificacion1_obs_m[]' class='materialize-textarea'>$observacon</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri_m".$i."'' name='verificacion1_veri_m[]' class='materialize-textarea'>$verificacion</textarea>
          <label for='r' class='activar'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";
            }
        }
        echo"</div></li>";

         // ---------------------------------------quinto li

        echo"<li>
			  <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Sustancias o materiales peligrosos</div>
			  <div class='collapsible-body'>
			  	<div class='row' style='text-align: center;background-color: #bdbdbd;'>Sustancias o materiales peligrosos</div>
			  <div class='row' style='border: 1px solid;height: auto;display:inline-block; width: 100% '>
			    <div class='divider' ></div> ";
        $s="SELECT id,nombre from opciones where codigo LIKE '%MATERIAL_PELIGROSO%'  order by id";
            $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_array($r)){
               $opciones_id = $rw[0];
				$i++;
	echo" 
       <div class='row'>
                <div class='input-field col s12 m6 l6'>
           <input type='hidden' name='opcion_m[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica1_si_no_m[]' id='verifica1_si_no_m".$i."'>";
          $s2="SELECT si_no_noaplica_id,observacion,verificacion from verificacion_1 WHERE opciones_id = '$opciones_id'  ";
                  $r2= mysqli_query($conn,$s2) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $si_no_noaplica = $result2['si_no_noaplica_id'];
                        $observacon = $result2['observacion'];
						$verificacion = $result2['verificacion'];
                    }
                  }

            $s1="select id,nombre from si_no_noaplica ";
                  $r1= mysqli_query($conn,$s1) or die(mysqli_error($conn));
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                    	if ($result1['id'] == $si_no_noaplica) {
                    	echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
                    	}
                    	else{
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                    }
                  }
        echo"
          </select>
         <label for=''>Si/ No/ No Aplica</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_obs_m".$i."' name='verificacion1_obs_m[]' class='materialize-textarea'>$observacon</textarea>
          <label for='' class='activar'>Observaciones</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion1_veri_m".$i."'' name='verificacion1_veri_m[]' class='materialize-textarea'>$verificacion</textarea>
          <label for='r' class='activar'>Medios de verificacion</label>
        </div></div>
      <div class='divider'></div>";
            }
        }
        echo"</div></li>";
			   
			   

echo"</ul> <button  class='waves-effect green darken-2 btn right' style='margin-bottom: 8px' id='modificar_verificacion1'><i class='material-icons right'>add</i>Modificar Hoja de verificacion 1</button>
<script type='text/javascript' src='js/accion_verificacion1.js'></script>


	<script type='text/javascript'>
$(document).ready(function(){
    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')


  })

</script>";	


?>

