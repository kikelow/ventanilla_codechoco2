 <?php 
if (is_file('conexion.php')){
  require_once('conexion.php');
}
else {
  require_once('../../../conexion.php');
  
  function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
  }

}

$i = 0;
$empresa = $_POST['empresa_m'];
$opciones_id = "";
$si_no_noaplica = "";
$observacon = "";
$verificacion = "";
?>
<ul class="collapsible" data-collapsible="accordion">
  <li>
    <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Certificaciones vigentes</div>
    <div class="collapsible-body">

     <div class="row" style="text-align: center;background-color: #bdbdbd;">Certificaciones vigentes</div>
     <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->

      <?php
      $i = 0; 
      $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.nombre_certificacion,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
      INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
      where pregunta_indicativa.aspecto_id = 1 AND hoja_verificacion_1.empresa_id = '$empresa'";
      $r= mysqli_query($conn,$s) or die("Error");
      if(mysqli_num_rows($r)>0){
        while($rw=mysqli_fetch_assoc($r)){
         $i++;
         echo"
         <div class='row'>
         <div class='col s12 m6 l6'>
         <input type='hidden' name='preguntas[]' value='$rw[id]' />
         <p style='text-align:justify'>$rw[descripcion]</p>
         </div>

         <div class='input-field col s12 m3 l3'>
         <select name='verifica1_si_no[]' id='verifica1_si_no".$i."'>";

         $s1="SELECT id,nombre from si_no order by id desc ";
         $r1= mysqli_query($conn,$s1) or die('Error');
         if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            if ($result1['id'] == $rw['respuesta_id'] ) {
              echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
            }else{
              echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
            }
            
          }
        }
        echo"
        </select>
        <label for=''>Si/ No/ No Aplica</label>
        </div>


        <div class='input-field col s12 m3 l3'>
        <select name='cumplimiento[]' id='cumplimiento".$i."'>";

        $s1="SELECT id,nombre from si_no order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            if ($result1['id'] == $rw['cumplimiento_id']) {
             echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
           }else{
             echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
           }
           
         }
       }
       echo"
       </select>
       <label for=''>¿Cumple con el requerimiento?</label>
       </div>
       </div>

       <div class='row'>

       <div class='input-field col s12 m4 l4'>
       <input type='date' id='vigencia' name='vigencia[]' value='$rw[vigencia]'>
       <label for='vigencia' class='active'>Ultima fecha de expedición</label>
       </div>

       <div class='input-field col s12 m4 l4'>
       <input type='text' id='nombre_certificacion' name='nombre_certificacion[]' value='$rw[nombre_certificacion]'>
       <label for='nombre_certificacion' class='active'>Nombre de la certificación</label>
       </div>

       <div class='input-field col s12 m4 l4'>

       <select multiple name='medio_verificacion[]' id='medio_verificacion1'>
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

      echo "</select>
      <input type='hidden' name='medio1[]' id='medio1' value='$rw[medio_verificacion]'>

      </div>

      </div>";
    }         
  }
  ?>
  <!-- <div class="divider grey ligthen-2" style="height: 6px;margin-top:20px;"></div> -->



</div>
</li>





<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Requisitos excluyentes</div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Requisitos exclutentes</div>

   <div class="divider"></div>
   <?php
   $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 2 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){

     $i++;
     echo"
     <div class='row'>
     <div class='input-field col s12 m6 l6' style='margin-top: 0px'>
     <input type='hidden' name='preguntas2[]' value='$rw[id]' />
     <p style='text-align:justify'>$rw[descripcion]</p>
     </div>
     <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
     <select name='verifica1_si_no2[]' id='verifica1_si_no".$i."'>";
     $s1="select id,nombre from si_no order by id desc";
     $r1= mysqli_query($conn,$s1) or die('Error');
     if(mysqli_num_rows($r1)>0){
      while($result1=mysqli_fetch_assoc($r1)){
        if ($result1['id'] == $rw['respuesta_id']) {
          echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
        }else{
          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
        }
        
      }
    }
    echo"
    </select>
    <label for=''>Si/ No/ No Aplica</label>
    </div>


    <div class='input-field col s12 m6 l6'>
    <textarea id='descripcion".$i."' name='descripcion2[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
    <label for='' class='active'>Descripción</label>
    </div>

    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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


    echo "<input type='hidden' name='medio2[]' id='medio2".$i."' value='$rw[medio_verificacion]'>";


    echo "

    </div>

    </div>
    <div class='divider'></div>";

  }         
}
?>

</div>
</li>

<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>  Administrativo </div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Administrativo </div> <div class="divider"></div>
   <?php
   $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 3 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){

     $i++;
     echo"
     <div class='row'>
     <div class='input-field col s12 m6 l6' style='margin-top: 50px'>
     <input type='hidden' name='preguntas3[]' value='$rw[id]' />
     <p style='text-align:justify'>$rw[descripcion]</p>
     </div>
     <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
     <select name='verifica1_si_no3[]' id='verifica1_si_no3".$i."'>";
     $s1="select id,nombre from si_no order by id desc";
     $r1= mysqli_query($conn,$s1) or die('Error');
     if(mysqli_num_rows($r1)>0){
      while($result1=mysqli_fetch_assoc($r1)){
        if ($result1['id'] == $rw['respuesta_id']) {
         echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
        }
        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
      }
    }
    echo"
    </select>
    <label for=''>Si/ No/ No Aplica</label>
    </div>


    <div class='input-field col s12 m6 l6'>
    <textarea id='descripcion3".$i."' name='descripcion3[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
    <label for='' class='active'>Descripción</label>
    </div>

    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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


    echo "<input type='hidden' name='medio3[]' id='medio3".$i."' value='$rw[medio_verificacion]'>";


    echo "

    </div>

    </div>
    <div class='divider'></div>";

  }         
}
?>

</li>

<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Ambiental</div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Ambiental</div>
   <div class="divider"></div>
   <?php                  $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 4 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){
     $i++;
     if($rw['id'] != 26){
       echo"
       <div class='row'>
       <div class='input-field col s12 m6 l6' >
       <input type='hidden' name='preguntas4[]' value='$rw[id]' />
       <p style='text-align:justify'>$rw[descripcion]</p>
       </div>
       <div class='input-field col s12 m3 l3' style='margin-top: 52px'>
       <select name='verifica1_si_no4[]' id='verifica1_si_no4".$i."'>";
       $s1="select id,nombre from si_no order by id desc";
       $r1= mysqli_query($conn,$s1) or die('Error');
       if(mysqli_num_rows($r1)>0){
        while($result1=mysqli_fetch_assoc($r1)){
          if ($result1['id'] == $rw['respuesta_id']) {
            echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
          }else{
            echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
          }
          
        }
      }
      echo"
      </select>
      <label for=''>Si/ No/ No Aplica</label>
      </div>

      <div class='input-field col s12 m3 l3' style='margin-top: 52px'>
      <select name='verifica1_cumple4[]' id='verifica1_cumple4".$i."'>";
      $s1="select id,nombre from si_no order by id desc";
      $r1= mysqli_query($conn,$s1) or die('Error');
      if(mysqli_num_rows($r1)>0){
        while($result1=mysqli_fetch_assoc($r1)){
          if ($result1['id'] == $rw['cumplimiento_id']) {
           echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
         }else{
           echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
         }
         
       }
     }
     echo"
     </select>
     <label for=''>Cumple con el requerimiento</label>
     </div>

     <div class='input-field col s12 m6 l6'>
     <textarea id='descripcion4".$i."' name='descripcion4[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
     <label for='' class='active'>Descripción</label>
     </div>

     <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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
    </select>
    <input type='hidden' name='medio4[]' id='medio4".$i."' value='$rw[medio_verificacion]'>
    </div>

    </div>
    <div class='divider'></div>";

  }else if ($rw['id'] == 26) {
   echo"
   <div class='row'>
   <div class='input-field col s12 m6 l6' >
   <input type='hidden' name='preguntas4[]' value='$rw[id]' />
   <p style='text-align:justify'>$rw[descripcion]</p>
   </div>
   <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
   <select name='verifica1_si_no4[]' id='verifica1_si_no4".$i."'>";
   $s1="select id,nombre from si_no order by id desc";
   $r1= mysqli_query($conn,$s1) or die('Error');
   if(mysqli_num_rows($r1)>0){
    while($result1=mysqli_fetch_assoc($r1)){
      if ($result1['id'] == $rw['respuesta_id']) {
        echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
      }else{
        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
      }

    }
  }
  echo"
  </select>
  <label for=''>Si/ No/ No Aplica</label>
  </div>

  <div class='input-field col s12 m6 l6'>
  <textarea id='descripcion4".$i."' name='descripcion4[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
  <label for='' class='active'>Descripción</label>
  </div>

  <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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
  </select>
  <input type='hidden' name='medio4[]' id='medio4".$i."' value='$rw[medio_verificacion]'>
  </div>

  </div>
  <div class='divider'></div>";
}       
}
}
?>

</div>
</li>

<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Social</div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Social</div>

   <div class="divider"></div>
   <?php
   $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 5 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){

     $i++;
     echo"
     <div class='row'>
     <div class='input-field col s12 m6 l6' style='margin-top: 0px'>
     <input type='hidden' name='preguntas5[]' value='$rw[id]' />
     <p style='text-align:justify'>$rw[descripcion]</p>
     </div>
     <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
     <select name='verifica1_si_no5[]' id='verifica1_si_no5".$i."'>";
     $s1="select id,nombre from si_no order by id desc";
     $r1= mysqli_query($conn,$s1) or die('Error');
     if(mysqli_num_rows($r1)>0){
      while($result1=mysqli_fetch_assoc($r1)){
        if ($result1['id'] == $rw['respuesta_id']) {
          echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
        }else{
          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
        }
        
      }
    }
    echo"
    </select>
    <label for=''>Si/ No/ No Aplica</label>
    </div>


    <div class='input-field col s12 m6 l6'>
    <textarea id='descripcion5".$i."' name='descripcion5[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
    <label for='' class='active'>Descripción</label>
    </div>

    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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
    </select>
    <input type='hidden' name='medio5[]' id='medio5".$i."' value='$rw[medio_verificacion]'>
    </div>

    </div>
    <div class='divider'></div>";

  }         
}
?>

</li>




<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Proveedores</div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Proveedores</div>

   <div class="divider"></div>
   <?php
   $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 6 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){

     $i++;
     echo"
     <div class='row'>
     <div class='input-field col s12 m6 l6' style=''>
     <input type='hidden' name='preguntas6[]' value='$rw[id]' />
     <p style='text-align:justify'>$rw[descripcion]</p>
     </div>
     <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
     <select name='verifica1_si_no6[]' id='verifica1_si_no6".$i."'>";
     $s1="select id,nombre from si_no order by id desc";
     $r1= mysqli_query($conn,$s1) or die('Error');
     if(mysqli_num_rows($r1)>0){
      while($result1=mysqli_fetch_assoc($r1)){
        if ($result1['id'] == $rw['respuesta_id']) {
          echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
        }else{
          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
        }
        
      }
    }
    echo"
    </select>
    <label for=''>Si/ No/ No Aplica</label>
    </div>


    <div class='input-field col s12 m6 l6'>
    <textarea id='descripcion6".$i."' name='descripcion6[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
    <label for='' class='active'>Descripción</label>
    </div>

    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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
    </select>
    <input type='hidden' name='medio6[]' id='medio6".$i."' value='$rw[medio_verificacion]'>
    </div>

    </div>
    <div class='divider'></div>";

  }         
}
?>

</li>




<li>
  <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Otros</div>
  <div class="collapsible-body">
   <div class="row" style="text-align: center;background-color: #bdbdbd;">Otros</div>

   <div class="divider"></div>
   <?php
   $i = 0;
   $s="SELECT pregunta_indicativa.id,pregunta_indicativa.descripcion,hoja_verificacion_1.respuesta_id,hoja_verificacion_1.cumplimiento_id,hoja_verificacion_1.vigencia,hoja_verificacion_1.descripcion as descripcion_v,hoja_verificacion_1.medio_verificacion from hoja_verificacion_1
   INNER JOIN pregunta_indicativa ON pregunta_indicativa.id = hoja_verificacion_1.pregunta_id
   where pregunta_indicativa.aspecto_id = 7 AND hoja_verificacion_1.empresa_id = '$empresa'";
   $r= mysqli_query($conn,$s) or die("Error");
   if(mysqli_num_rows($r)>0){
    while($rw=mysqli_fetch_assoc($r)){

     $i++;
     echo"
     <div class='row'>
     <div class='input-field col s12 m6 l6' style=''>
     <input type='hidden' name='preguntas7[]' value='$rw[id]' />
     <p style='text-align:justify'>$rw[descripcion]</p>
     </div>
     <div class='input-field col s12 m6 l6' style='margin-top: 52px'>
     <select name='verifica1_si_no7[]' id='verifica1_si_no7".$i."'>";
     $s1="select id,nombre from si_no order by id desc";
     $r1= mysqli_query($conn,$s1) or die('Error');
     if(mysqli_num_rows($r1)>0){
      while($result1=mysqli_fetch_assoc($r1)){
        if ($result1['id'] == $rw['respuesta_id']) {
          echo"<option value=".$result1['id']." selected='selected'>".$result1['nombre' ]."</option>";
        }else{
          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
        }

        
      }
    }
    echo"
    </select>
    <label for=''>Si/ No/ No Aplica</label>
    </div>


    <div class='input-field col s12 m6 l6'>
    <textarea id='descripcion7".$i."' name='descripcion7[]' class='materialize-textarea'>$rw[descripcion_v]</textarea>
    <label for='' class='active'>Descripción</label>
    </div>

    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

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
    </select>
    <input type='hidden' name='medio7[]' id='medio7".$i."' value='$rw[medio_verificacion]'>
    </div>

    </div>
    <div class='divider'></div>";

  }         
}
?>

</li>
</ul>

<div class="row">
  <div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
    <p>NOTA ACLARATORIA</p>
    <p> 1. Se presume la buena fe del empresario en la información consignada y que cumple con los requerimientos mínimos legales en el momento de la inscripción en la Ventanilla de Negocios Verdes. </p>
    <p> 2. En caso de incumplimiento de alguno de los requisitos acá consignados como el nivel "0" debe realizarse el acompañamiento de manera inmediata, y si después del acompañamiento no logra dar cumplimiento a estos requisitos, no podrá continuar en el proceso de ser Negocio Verde. </p>
    <p> 3. Una vez se tenga la evidencia y se corrobore el cumplimiento al 100% del nivel "0" puede realizarse la verificación del nivel 1 y 2 he inscribirse oficialmente como Negocio Verde.</p>
    <p> 4. En caso que el negocio sea de un grupo étnico aplica lo referente en la Constitución Política de Colombia artículos  9, 10, 323, 68, 63, 72, 330, 329 que define el enfoque diferencial étnico.</p>
  </div>
</div>

<button  class=' yellow darken-4 btn right' style='margin-bottom: 8px' id='modificar_verificacion1'><i class='material-icons right'>create</i>Modificar</button>


<script type='text/javascript' src='js/accion_verificacion1.js'></script>


<script type='text/javascript'>
  $(document).ready(function(){
    $('select').material_select();
    $('.collapsible').collapsible();
    $('.activar').addClass('active')

  })

