 <?php 
require_once('conexion.php');
        $i = 0;  
 ?>
 <div id="test1" class="col s12" style="padding-right: 0px; padding-left: 0px">
  <div id="test-swipe-1" class="col s12 right" style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <center><h4>Sección para Registrar</h4></center>
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 100%;">
            <div class="card-content black-text">

 <span class="card-title"><center>Hoja de verificación 2</center></span>
 <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 2"</option>
          <?php 
                    $s="SELECT id,razon_social from empresa where verificacion1 = 'si' ";
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
    <form id="form_verificacion2" enctype="multipart/form-data" action="evaluacion/hoja_verificacion_2/insertar.php">
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_e' id='verificacion2_evidencia".$i."' />
           
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
      <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% ">
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
          </div>
        </div>
      <div class='divider'></div>";

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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
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
          <option disabled selected>Seleccione...</option>";
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
          <label for=''>Observaciones</label>
        </div>
         <div class='input-field col s12 m4 l4' style='margin-top: 52px'>
            <input  type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."' />
            
          </div>
        </div>
      <div class='divider'></div>";

              }         
            }
        ?>
        
      </div>
      </li>
    
    </ul>
          
      <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion2"><i class="material-icons right">add</i>Registrar Hoja de Verificación 2</button>
    </form>
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