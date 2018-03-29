 
 <?php 
require_once('conexion.php');
        $i = 0;  
 ?>
 <div id="test1" class="col s12" style="padding-right: 0px; padding-left: 0px">
  <div id="test-swipe-1" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <center><h4>Sección para Registrar</h4></center>
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%; margin-left: 20px">
            <div class="card-content black-text">

 <span class="card-title"><center>Hoja de verificación 2</center></span>
 <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 2"</option>
          <?php 
                    $s="SELECT id,razon_social from empresa where verificacion1 = 'si' AND verificacion2 = 'no' ";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social]</option>";          
                      }         
                    }
                  ?>
        </select>
      </div>        
</div>
 <div class="row">
  <hr style="border: 1px solid green">
  <h5>Nivel 1. Criterios de Cumplimiento de Negocios Verdes</h5>
    <form id="form_verificacion2" method = "post" enctype="multipart/form-data" action="evaluacion/hoja_verificacion_2/insertar.php">
       <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Viabilidad económica del Negocio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Viabilidad económica del Negocio</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%VIABILIDAD_ECONOMICA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id']." valor=".$result1['nombre']." >".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%CONTRIBUCION_CONSERVACION%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

       <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Enfoque ciclo de vida del bien o servicio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Enfoque ciclo de vida del bien o servicio</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%CICLO_VIDA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id']." >".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      
<li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Vida útil</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Vida útil</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%VIDA_UTIL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Sustitución de sustancias o materiales peligrosos</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Sustitución de sustancias o materiales peligrosos</div>
      <div class="row" style="border: 1px solid;height: 170px;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%SUSTITUCION_MATERIALES%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      ";

              }         
            }
        ?>
        
      </div>
      </li>
      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Reciclabilidad y/o uso de materiales reciclados</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Reciclabilidad y/o uso de materiales reciclados</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%MATERIALES_RECICLADOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
        <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

       <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Uso eficiente y sostenible de recursos para la producción de bienes o servicios</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%SOSTENIBLE_RECURSO%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social al interior de la empresa</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;"> Responsabilidad social al interior de la empresa</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_EMPRESA%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
    

     <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social en la cadena de valor de la empresa</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;"> Responsabilidad social en la cadena de valor de la empresa</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_VALOR%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social al exterior de la empresa</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Responsabilidad social al exterior de la empresa</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%RESPO_SOCIAL_EXTERIOR%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Comunicación de atributos del bien y servicio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Comunicación de atributos del bien y servicio</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%COMUNICACION_ATRIBUTOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
    
    </ul>
   <h5> Nivel 2. Criterios Adicionales (ideales) Negocios Verdes</h5> 

   <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Esquemas, programas o reconocimientos ambientales o
sociales implementados o recibidos.</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Esquemas, programas o reconocimientos ambientales o
sociales implementados o recibidos.</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%ESQUEMAS_RECONOCIMIENTOS%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>

      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social al interior de la empresa adicional</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Responsabilidad social al interior de la empresa adicional</div>
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
        <div class="divider" ></div>
        <?php

            $s="SELECT id,nombre from opciones where codigo LIKE '%RESPON_SOCIAL_ADICCIONAL%'  order by id ";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m4 l4'>
           <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
          <label for=''>$rw[nombre]</label>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ";
                  $r1= mysqli_query($conn,$s1) or die('Error');
                  if(mysqli_num_rows($r1)>0){
                    while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                    }
                  }
        echo"
          </select>
         <label for=''>(0, 0.5, 1, N/A)</label>
        </div>
         <div class='input-field col s12 m2 l2'>
          <textarea id='verificacion2_obs".$i."' name='verificacion2_obs[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Observaciones</label>
        </div>
         <div class='file-field input-field col s12 m4 l4' style='margin-top: 52px'>
         <div class='btn'>
        <span>Archivo</span>
        <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
      </div>
      <div class='file-path-wrapper'>
        <input class='file-path validate' type='text' >
      </div>
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
   </ul>
        
      <div class="row">
      <div class="col s12 m6 l12">
        <table class="bordered">
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
              <td id="prom1">0.00%</td>
            </tr>
            <tr>
              <td>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</td>
              <td id="prom2">0.00%</td>
            </tr>
            <tr>
              <td>Enfoque ciclo de vida del bien o servicio</td>
              <td id="prom3">0.00%</td>
            </tr>
            <tr>
              <td>Vida útil</td>
              <td id="prom4">0.00%</td>
            </tr>
            <tr>
              <td>Sustitución de sustancias o materiales peligrosos</td>
              <td id="prom5">0.00%</td>
            </tr>
            <tr>
              <td>Reciclabilidad y/o uso de materiales reciclados</td>
              <td id="prom6">0.00%</td>
            </tr>
            <tr>
              <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
              <td id="prom7">0.00%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa</td>
              <td id="prom8">0.00%</td>
            </tr>
            <tr>
              <td>Responsabilidad social en la cadena de valor de la empresa</td>
              <td id="prom9">0.00%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al exterior de la empresa</td>
              <td id="prom10">0.00%</td>
            </tr>
            <tr>
              <td>Comunicación de atributos del bien y servicio</td>
              <td id="prom11">0.00%</td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total">0.00% </th>
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
              <td id="prom12">0.00%</td>
            </tr>
            <tr>
              <td>Responsabilidad social al interior de la empresa adicional</td>
              <td id="prom13">0.00%</td>
            </tr>
            <tr>
              <th class=" grey lighten-1">Puntaje total </th>
              <th class="grey lighten-1" id="total2">0.00% </th>
            </tr>
            
          </tbody>
        </table>
      </div>
    </div>
     <hr> 
      <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion2"><i class="material-icons right">add</i>Registrar</button>
    </form>
  <!-- <div class="divider"></div>   -->
  </div>
  

   </div>
          </div>
        </div>
      </div>
    </section>  
  </div>
</div>


  <script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_verificacion2.js"></script>