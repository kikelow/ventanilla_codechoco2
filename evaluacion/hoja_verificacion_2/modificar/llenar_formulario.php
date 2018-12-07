<?php
  if (is_file('conexion.php')){
    
        require_once('conexion.php');
        
        }
        else {

          function multiexplode ($delimiters,$string) {

            $ready = str_replace($delimiters, $delimiters[0], $string);
            $launch = explode($delimiters[0], $ready);
            return  $launch;
          }
    
        
        require_once('../../../conexion.php');
    }
                                                                                                     
    $empresa = $_POST['empresa_m'];     
    $i = 0;          

    echo "<div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
      <h6>NOTA: Si desea cargar algún archivo, su tamaño debe ser inferior a 1Mb</h6>
    </div>  "; 
    echo " <hr style='border: 1px solid green'><h5>Nivel 1. Criterios de Cumplimiento de Negocios Verdes</h5>
    <ul class='collapsible' data-collapsible='accordion'>"; 



        $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 8 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Viabilidad económica del Negocio</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Viabilidad económica del Negocio</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
           <input type='hidden' name='pregunta_m[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m[]' id='calificador_m1".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion[]' id='medio_verificacion".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio[]' value='$rw[medio_verificacion]' id='medio".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



// segundo li
   
    $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 9 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Impacto ambiental positivo del bien o servicio</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Impacto ambiental positivo del bien o servicio</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m2[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m2[]' id='calificador_m2".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m2[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion2".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio2[]' value='$rw[medio_verificacion]' id='medio2".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m2[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia2[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m2[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia2[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



 // Tercer li
        
      $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 10 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Enfoque ciclo de vida del bien o servicio</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Enfoque ciclo de vida del bien o servicio</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m3[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m3[]' id='calificador_m3".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m3[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion3[]' id='medio_verificacion3".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio3[]' value='$rw[medio_verificacion]' id='medio3".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m3[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia3[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m3[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia3[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



 // Cuarto li
         
              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 11 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Vida util</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Vida util</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m4[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m4[]' id='calificador_m4".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m4[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion4[]' id='medio_verificacion4".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio4[]' value='$rw[medio_verificacion]' id='medio4".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m4[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia4[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m4[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia4[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";


     // Quinto li


              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 12 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Sustitución de sustancias o materiales peligrosos</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Sustitución de sustancias o materiales peligrosos</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m5[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m5[]' id='calificador_m5".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m5[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion5[]' id='medio_verificacion5".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio5[]' value='$rw[medio_verificacion]' id='medio5".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m5[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia5[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m5[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia5[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";


 // Sexto li

          

              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 13 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Reciclabilidad de los materiales y/o uso de materiales reciclados</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Reciclabilidad de los materiales y/o uso de materiales reciclados</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m6[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m6[]' id='calificador_m6".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m6[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion6[]' id='medio_verificacion6".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio6[]' value='$rw[medio_verificacion]' id='medio6".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m6[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia6[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m6[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia6[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";


// Septimo li
                  
              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 14 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'><i class='material-icons'></i>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m7[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m7[]' id='calificador_m7".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m7[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion7[]' id='medio_verificacion7".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio7[]' value='$rw[medio_verificacion]' id='medio7".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m7[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia7[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m7[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia7[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";


// Octavo li
                      $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 15 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social al interior de la empresa</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social al interior de la empresa</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m8[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m8[]' id='calificador_m8".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m8[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion8[]' id='medio_verificacion8".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio8[]' value='$rw[medio_verificacion]' id='medio8".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m8[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia8[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m8[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia8[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



// Noveno li
          
              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 16 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social y ambiental en la cadena de valor de la empresa</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social y ambiental en la cadena de valor de la empresa</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m9[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m9[]' id='calificador_m9".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m9[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion9[]' id='medio_verificacion9".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio9[]' value='$rw[medio_verificacion]' id='medio9".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m9[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia9[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m9[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia9[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



 // Decimo li
         
              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 17 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social y ambiental al exterior de la empresa</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social y ambiental al exterior de la empresa</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m10[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m10[]' id='calificador_m10".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m10[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion10[]' id='medio_verificacion10".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio10[]' value='$rw[medio_verificacion]' id='medio10".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m10[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia10[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m10[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia10[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";


         
// Once li
         
                       $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 18 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Comunicación de atributos sociales o ambientales asociados al bien o servicio</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Comunicación de atributos sociales o ambientales asociados al bien o servicio</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m11[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m11[]' id='calificador_m11".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m11[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion11[]' id='medio_verificacion11".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio11[]' value='$rw[medio_verificacion]' id='medio11".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m11[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia11[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m11[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia11[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li></ul>

<h5> Nivel 2. Criterios Adicionales (ideales) Negocios Verdes</h5><ul class='collapsible' data-collapsible='accordion'>

      ";



// Doce li
  
              $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 19 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Responsabilidad social al interior de la empresa</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Responsabilidad social al interior de la empresa</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m12[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m12[]' id='calificador_m12".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m12[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion12[]' id='medio_verificacion12".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio12[]' value='$rw[medio_verificacion]' id='medio12".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m12[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia12[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m12[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia12[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li>";



// Trece li
                        $i = 0;          

      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_2.calificador_id,hoja_verificacion_2.descripcion as descripcion_v,hoja_verificacion_2.medio_verificacion,hoja_verificacion_2.evidencia from hoja_verificacion_2 INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_2.pregunta_id where pregunta_indicativa.aspecto_id = 20 AND hoja_verificacion_2.empresa_id = '$empresa'";

            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              echo "<li>
            <div class='collapsible-header' style='font-weight: bold;'> <i class='material-icons'></i>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos</div>
            <div class='collapsible-body'>
               <div class='row' style='text-align: center;background-color: #bdbdbd;'>Esquemas, programas o reconocimientos ambientales o sociales implementados o recibidos</div>
            
              <div class='divider'></div>";
              while($rw=mysqli_fetch_assoc($r)){
                $opciones_id = $rw['id'];
                $calificador_id = $rw['calificador_id'];
                $evidencia = $rw['evidencia'];
                $descripcion_v = $rw['descripcion_v'];
                $i++;

        
                  echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'style='margin-top:0px;'>
           <input type='hidden' name='pregunta_m13[]' value='$rw[id]' />
          <p for='' style='text-align:justify'>$rw[descripcion]</p>
        </div>



        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='calificador_m13[]' id='calificador_m13".$i."'>
          ";
          $s1="SELECT id,nombre from calificador";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion_m".$i."' name='descripcion_m13[]' class='materialize-textarea'>$descripcion_v</textarea>
          <label for='' class='activar'>Observaciones y Evidencias</label>
        </div>
         
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion13[]' id='medio_verificacion13".$i."'>
        <option disabled>Seleccione...</option>";

        
         $medio_split = multiexplode(array(",",""), $rw['medio_verificacion']);
         $nombre = array();
         $y = 0;

         $s1="SELECT id,nombre from medio order by id asc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            array_push($nombre, $result1['nombre']);
            $intersect = array_intersect($nombre, $medio_split);
            if ($intersect[$y]) {
              echo"<option value=".$result1['nombre']." selected='selected'>".$result1['nombre' ]."</option>";

            }else{
              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            }


            $y++;
          }
        }

        echo "
        </select>";

        
          echo "<input type='hidden' name='medio13[]' value='$rw[medio_verificacion]' id='medio13".$i."' >";
        
 
        echo "

        </div>";



        if ($evidencia == '') {
          echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m13[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia13[]' >
      </div>
            
          </div>
        </div>";
        }else{
         echo "<div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='evidencia_m13[]' id='evidencia_m".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' value='$evidencia' name='name_evidencia13[]' >
        <a href='evaluacion/hoja_verificacion_2/modificar/descargar_archivo.php?archivo=$evidencia' target='_blank' style='margin-left: 150px'>Descargar</a>
      </div>
            
          </div>
          
        </div>";
            

              }

              }
          }
      echo "</div></li></ul>";



          $division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 35 AND hoja_verificacion_2.pregunta_id <= 43 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
$r = mysqli_query($conn,$s);
while ($rw = mysqli_fetch_assoc($r)) {
  if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
   
    $division = $division;

  }else{
    $division++;
  }
$suma = $suma + $rw['calificador'];
}

if (@is_nan(round($suma/$division*100, 2))) {
  $prom1 = 0;
}else{
  $prom1 = round($suma/$division*100, 2);
}




$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 44 AND hoja_verificacion_2.pregunta_id <= 47 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
      
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
// $prom2 =  round($suma/$division*100, 0) ;
if (@is_nan(round($suma/$division*100, 2))) {
  $prom2 = 0;
}else{
  $prom2 = round($suma/$division*100, 2);
}



$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 48 AND hoja_verificacion_2.pregunta_id <= 50 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
      
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
if (@is_nan(round($suma/$division*100, 2))) {
  $prom3 = 0;
}else{
  $prom3 = round($suma/$division*100, 2);
}


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 51 AND hoja_verificacion_2.pregunta_id <= 52 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom4 = 0;
}else{
  $prom4 = round($suma/$division*100, 2);
}


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 53 AND hoja_verificacion_2.pregunta_id <= 54 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom5=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom5 = 0;
}else{
  $prom5 = round($suma/$division*100, 2);
}

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 55 AND hoja_verificacion_2.pregunta_id <= 57 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom6=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom6 = 0;
}else{
  $prom6 = round($suma/$division*100, 2);
}

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 58 AND hoja_verificacion_2.pregunta_id <= 60 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A' && $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom7=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom7 = 0;
}else{
  $prom7 = round($suma/$division*100, 2);
}



$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 61 AND hoja_verificacion_2.pregunta_id <= 64 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom8=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom8 = 0;
}else{
  $prom8 = round($suma/$division*100, 2);
}
  $division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 65 AND hoja_verificacion_2.pregunta_id <= 67 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom9=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom9 = 0;
}else{
  $prom9 = round($suma/$division*100, 2);
}

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 68 AND hoja_verificacion_2.pregunta_id <= 73 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom10=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom10 = 0;
}else{
  $prom10 = round($suma/$division*100, 2);
}


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 74 AND hoja_verificacion_2.pregunta_id <= 76 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {


    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }


  $suma = $suma + $rw['calificador'];
  }

  // $prom11=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom11 = 0;
}else{
  $prom11 = round($suma/$division*100, 2);
}
  $suma_total = $prom1+$prom2+$prom3+$prom4+$prom5+$prom6+$prom7+$prom8+$prom9+$prom10+$prom11;
  $prom_total1= round($suma_total/11, 2);

$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 77 AND hoja_verificacion_2.pregunta_id <= 78 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom12=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom12 = 0;
}else{
  $prom12 = round($suma/$division*100, 2);
}


$division = 0;
$suma = 0;
$s="SELECT hoja_verificacion_2.empresa_id, calificador.nombre AS calificador,hoja_verificacion_2.pregunta_id    FROM hoja_verificacion_2
  INNER JOIN calificador ON calificador.id = hoja_verificacion_2.calificador_id
  WHERE hoja_verificacion_2.pregunta_id >= 79 AND hoja_verificacion_2.pregunta_id <= 81 AND hoja_verificacion_2.empresa_id = '$empresa' 
  ORDER BY hoja_verificacion_2.pregunta_id";
  $r = mysqli_query($conn,$s);
  while ($rw = mysqli_fetch_assoc($r)) {
    if ($rw['calificador'] == 'N/A'&& $rw['calificador'] == 0) {
      // $rw['calificador'] = 0;
      $division = $division;
    }else{
      $division++;
    }
  $suma = $suma + $rw['calificador'];
  }
  // $prom13=  round($suma/$division*100, 2) ;
 if (@is_nan(round($suma/$division*100, 2))) {
  $prom13 = 0;
}else{
  $prom13 = round($suma/$division*100, 2);
}


  $suma_total2 = $prom12+$prom13;
  $prom_total2= round($suma_total2/2, 2);

          echo'<table class="bordered" style="margin-top:20px">
          <thead>
            <tr>
              <th style="width: 100%;" class="green center" colspan="3">Resultado Nivel 1. Criterios de Cumplimiento de Negocios Verdes</th>
            </tr>
            <tr>
            <th style="width: 8%;" class="grey darken-1">Item</th>
              <th style="width: 90%;" class="grey darken-1">Criterio</th>
              <th style="" class="grey darken-1">Promedio</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Item 1</td>
              <td>Viabilidad económica del Negocio</td>
              <td id="prom1m">'.$prom1.'% <input type="hidden" id="td1" value="'.$prom1.'" /> </td>
            </tr>
            <tr>
              <td>Item 2</td>
              <td>Impacto Ambiental Positivo del Bien o Servicio</td>
              <td id="prom2m">'.$prom2.'% <input type="hidden" id="td2" value="'.$prom2.'" /></td>
            </tr>
            <tr>
              <td>Item 3</td>
              <td>Enfoque ciclo de vida del bien o servicio</td>
              <td id="prom3m">'.$prom3.'% <input type="hidden" id="td3" value="'.$prom3.'" /></td>
            </tr>
            <tr>
            <td>Item 4</td>
              <td>Vida útil</td>
              <td id="prom4m">'.$prom4.'% <input type="hidden" id="td4" value="'.$prom4.'" /></td>
            </tr>
            <tr>
            <td>Item 5</td>
              <td>Sustitución de sustancias o materiales peligrosos</td>
              <td id="prom5m">'.$prom5.'% <input type="hidden" id="td5" value="'.$prom5.'" /></td>
            </tr>
            <tr>
            <td>Item 6</td>
              <td>Reciclabilidad de los Materiales y/o Uso de Materiales Reciclados</td>
              <td id="prom6m">'.$prom6.'% <input type="hidden" id="td6" value="'.$prom6.'" /></td>
            </tr>
            <tr>
            <td>Item 7</td>
              <td>Uso Eficiente y Sostenible de Recursos para la Producción del Bien o Servicio</td>
              <td id="prom7m">'.$prom7.'% <input type="hidden" id="td7" value="'.$prom7.'" /></td>
            </tr>
            <tr>
            <td>Item 8</td>
              <td>Responsabilidad social al interior de la empresa</td>
              <td id="prom8m">'.$prom8.'% <input type="hidden" id="td8" value="'.$prom8.'" /></td>
            </tr>
            <tr>
            <td>Item 9</td>
              <td>Responsabilidad Social y Ambiental en la Cadena de Valor de la Empresa</td>
              <td id="prom9m">'.$prom9.'% <input type="hidden" id="td9" value="'.$prom9.'" /></td>
            </tr>
            <tr>
            <td>Item 10</td>
              <td>Responsabilidad Social y Ambiental al Exterior de la Empresa</td>
              <td id="prom10m">'.$prom10.'% <input type="hidden" id="td10" value="'.$prom10.'" /></td>
            </tr>
            <tr>
            <td>Item 11</td>
              <td>Comunicación de Atributos Sociales o Ambientales Asociados al Bien o Servicio</td>
              <td id="prom11m">'.$prom11.'% <input type="hidden" id="td11" value="'.$prom11.'" /></td>
            </tr>
            <tr>
            <td class=" grey lighten-1"></td>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="totalm">'.$prom_total1.'% </th>
            </tr>

          </tbody>

        </table>
          <canvas id="grafica_m"></canvas>
        <table style="margin-top:20px" class="bordered">
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
              <td>Responsabilidad Social al Interior de la Empresa</td>
              <td id="prom12m">'.$prom12.'% <input type="hidden" id="td12" value="'.$prom12.'" /></td>
            </tr>
            <tr>
              <td>Esquemas, Programas o Reconocimientos Ambientales o Sociales Implementados o Recibidos</td>
              <td id="prom13m">'.$prom13.'%  <input type="hidden" id="td13" value="'.$prom13.'" /></td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total2m">'.$prom_total2.'% </th>
            </tr>
            
          </tbody>
        </table>
';
echo '<table style="margin-top:20px;width:100%" class="bordered">
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

              $resultado_letra = '';
              if ($prom_total1 >= 0 && $prom_total1 <= 10) {
               $resultado_letra = 'Inicial';
              }else if ($prom_total1 > 10 && $prom_total1 <= 30) {
                $resultado_letra = 'Básico';
              }else if ($prom_total1 > 30 && $prom_total1 <= 50) {
                $resultado_letra = 'Intermedio';
              }else if ($prom_total1 > 50 && $prom_total1 <= 80) {
                $resultado_letra = 'Satisfactorio';
              }else if ($prom_total1 > 80 && $prom_total1 <= 100 && $prom_total2 < 50) {
               $resultado_letra = 'Avanzado';
              }else if ($prom_total1 > 80 && $prom_total1 <= 100 && $prom_total2 >= 50 ) {
               $resultado_letra = 'Ideal';
              }
           echo '
              <th class=" grey lighten-1">Resultado</th>
              <th class="grey lighten-1" id="resultado_m">'.$resultado_letra.' </th>
               <input type="hidden" name="prom_form_m" value="'.$prom_total1.'" id="prom_form_m" />
            </tr>
            
          </tbody>
        </table>'
        ;

          echo"

<script type='text/javascript' src='js/valida_chart.js'></script>
<script type='text/javascript' src='js/chart.js'></script>
<script type='text/javascript'>

    $('select').material_select();
 $('.collapsible').collapsible();
 $('.activar').addClass('active')
 var ctx = document.getElementById('grafica_m');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6', 'Item 7', 'Item 8', 'Item 9', 'Item 10', 'Item 11'],
        datasets: [{
            label: 'Resultanos Nivel 1',
            data: [promedio1, promedio2, promedio3, promedio4, promedio5,promedio6,promedio7,promedio8,promedio9,promedio10,promedio11],
            backgroundColor: [
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});

$('select').change(function(event) {
  var ctx = document.getElementById('grafica_m');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Item 1', 'Item 2', 'Item 3', 'Item 4', 'Item 5', 'Item 6', 'Item 7', 'Item 8', 'Item 9', 'Item 10', 'Item 11'],
        datasets: [{
            label: 'Resultanos Nivel 1',
            data: [promedio1, promedio2, promedio3, promedio4, promedio5,promedio6,promedio7,promedio8,promedio9,promedio10,promedio11],
            backgroundColor: [
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                 'rgba(76, 175, 80, 0.5)',
                
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
});


  

</script>"; 

?>