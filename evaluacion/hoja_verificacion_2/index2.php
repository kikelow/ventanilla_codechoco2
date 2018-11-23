<?php 
// session_start();
  if(!isset($_SESSION["vev_verificador"])){
    header("Location:index.php");
    exit();
  }
 ?> 
 <?php 
require_once('conexion.php');
        $i = 0;  
 ?>
 <div id="test1" class="col s12" style="padding-right: 0px; padding-left: 0px">
          <center><h4>Sección para Registrar</h4></center>
  <div id="test-swipe-1" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%; margin-left: 20px">
            <div class="card-content black-text">

 <span class="card-title"><center><h5> Hoja de verificación 2</h5></center></span>
 <div class="row">
 
    <div class="input-field col s12 m12 l12  " id="div_empresa">
        <select id="empresa" style="width: 100%; left: -20px;" name="empresa" required="required">
          <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 2"</option>
          <?php 
                    $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM verificadorxempresa
                        INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
                        WHERE verificadorxempresa.persona_id = '$_SESSION[vev_verificador]' AND verificacion1 = 'si' AND verificacion2 = 'no'";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                      }         
                    }
                  ?>
        </select>
      </div>        
</div>
 <div class="row">
  <div class='input-field col s12 m12 l12 green lighten-5 ' id='div_empresa' style='border: 1px solid green'>
      <h6>NOTA: Si desea caragar algún archivo, su tamaño debe ser inferior a 1Mb</h6>
    </div>
  <hr style="border: 1px solid green">
  <h5>Nivel 1.  Indicadores de los criterios de cumplimiento de Negocios Verdes</h5>
    <form id="form_verificacion2" method = "post" enctype="multipart/form-data" action="evaluacion/hoja_verificacion_2/insertar.php">
       <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Viabilidad económica del negocio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Viabilidad económica del negocio</div>
        <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <!-- <div class="divider" ></div> -->
        <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 8";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Impacto ambiental positivo del bien o servicio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Impacto ambiental positivo del bien o servicio</div>
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 9";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
               <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 10";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 11";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
         <!-- <div class="row" style="border: 1px solid;height: 170px;display:inline-block; width: 100% "> -->
          
          
          <?php

          $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 12";
          $r= mysqli_query($conn,$s) or die("Error");
          if(mysqli_num_rows($r)>0){
            while($rw=mysqli_fetch_assoc($r)){

             $i++;
             echo"
             <div class='row'>
             <div class='input-field col s12 m5 l5' style='margin-top: 0px'>
             <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
             <p style='text-align:justify'>$rw[descripcion]</p>
             </div>
             <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
             <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
             ";
             $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
            <div class='input-field col s12 m5 l5'>
            <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
            <label for='verificacion2_obs".$i."'>Descripción</label>
            </div>

            
            <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

            <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
            <option disabled>Seleccione...</option>";

            $medio1 = array();
            $s1="SELECT id,nombre from medio order by id asc ";
            $r1= mysqli_query($conn,$s1) or die('Error');
            if(mysqli_num_rows($r1)>0){
              while($result1=mysqli_fetch_assoc($r1)){
                echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                array_push($medio1,$result1['id']);
              }
            }


            echo "
            </select>";

            for ($i  =0; $i   < sizeof($medio1); $i ++) { 
              echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
            }

            echo "

            </div>

            <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
            <div class='btn'>
            <span>Evidencia</span>
            <input type='file' name='verificacion2_evidencia[]' id='verificacion2_evidencia".$i."'>
            </div>
            <div class='file-path-wrapper'>
            <input class='file-path validate' type='text'>
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
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Reciclabilidad de los materiales y/o uso de materiales reciclados</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Reciclabilidad de los materiales y/o uso de materiales reciclados</div>
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                 <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 13";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 14";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 15";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social y ambiental en la cadena de valor de la empresa</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;"> Responsabilidad social y ambiental en la cadena de valor de la empresa</div>
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 16";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Responsabilidad social y ambiental al exterior de la empresa</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Responsabilidad social y ambiental al exterior de la empresa</div>
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 17";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Comunicación de atributos sociales o ambientales asociados al bien o servicio</div>
      <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Comunicación de atributos sociales o ambientales asociados al bien o servicio</div>
      <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
       
                        <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 18";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
    <h5> Nivel 2. Indicadores adicionales de los criterios de los Negocios Verdes</h5> 
  
    <ul class="collapsible" data-collapsible="accordion">
      <li>
      <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Responsabilidad social al interior de la empresa</div>
      <div class="collapsible-body">
       <div class="row" style="text-align: center;background-color: #bdbdbd;">Responsabilidad social al interior de la empresa</div>
       <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
        <div class="divider" ></div>
        
                                <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 19";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
        <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i> Esquemas, programas o reconocimientos ambientales o
        sociales implementados o recibidos.</div>
        <div class="collapsible-body">
         <div class="row" style="text-align: center;background-color: #bdbdbd;">Esquemas, programas o reconocimientos ambientales o
         sociales implementados o recibidos.</div>
         <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
          <div class="divider" ></div>
          
                                  <?php

            $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 20";
            $r= mysqli_query($conn,$s) or die("Error");
            if(mysqli_num_rows($r)>0){
              while($rw=mysqli_fetch_assoc($r)){

                 $i++;
       echo"
       <div class='row'>
                <div class='input-field col s12 m5 l5'>
                <input type='hidden' name='verificacion2_opcion[]' value='$rw[id]' />
                <p style='text-align:justify'>$rw[descripcion]</p>
        </div>
        <div class='input-field col s12 m2 l2' style='margin-top: 52px'>
          <select name='verifica2_calificador[]' id='verifica2_calificador".$i."'>
          ";
            $s1="select id,nombre from calificador ORDER by nombre=1 desc";
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
         <div class='input-field col s12 m5 l5'>
          <textarea id='descripcion".$i."' name='descripcion[]' class='materialize-textarea'></textarea>
          <label for='verificacion2_obs".$i."'>Descripción</label>
        </div>

        
        <div class='input-field col s12 m6 l6'  style='margin-top:52px;'>

        <select multiple name='medio_verificacion2[]' id='medio_verificacion'>
        <option disabled>Seleccione...</option>";

        $medio1 = array();
        $s1="SELECT id,nombre from medio order by id asc ";
        $r1= mysqli_query($conn,$s1) or die('Error');
        if(mysqli_num_rows($r1)>0){
          while($result1=mysqli_fetch_assoc($r1)){
            echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
            array_push($medio1,$result1['id']);
          }
        }


        echo "
        </select>";

        for ($i  =0; $i   < sizeof($medio1); $i ++) { 
          echo "<input type='hidden' name='medio_confirmacion2[]' value='$medio1[$i]'>";
        }

        echo "

        </div>

         <div class='file-field input-field col s12 m6 l6' style='margin-top: 52px'>
         <div class='btn'>
        <span>Evidencia</span>
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
  <div class="col s12 m12 l12">
    <table class="bordered">
      <thead>
        <tr>
          <th style="width: 100%;" class="green center" colspan="3">Resultado Nivel 1. Criterios de Cumplimiento de Negocios Verdes</th>
        </tr>
        <tr>
          <th style="width: 8%" class="grey darken-1">Item</th>
          <th style="width: 90%;" class="grey darken-1">Criterio</th>
          <th style="" class="grey darken-1">Promedio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item 1</td>
          <td>Viabilidad económica del Negocio</td>
          <td id="prom1">0.00%</td>
        </tr>
        <tr>
          <td>Item 2</td>
          <td>Impacto Ambiental Positivo  y contribución a la conservación y preservación de los recursos ecosistemicos</td>
          <td id="prom2">0.00%</td>
        </tr>
        <tr>
         <td>Item 3</td>
         <td>Enfoque ciclo de vida del bien o servicio</td>
         <td id="prom3">0.00%</td>
       </tr>
       <tr>
        <td>Item 4</td>
        <td>Vida útil</td>
        <td id="prom4">0.00%</td>
      </tr>
      <tr>
        <td>Item 5</td>
        <td>Sustitución de sustancias o materiales peligrosos</td>
        <td id="prom5">0.00%</td>
      </tr>
      <tr>
        <td>Item 6</td>
        <td>Reciclabilidad y/o uso de materiales reciclados</td>
        <td id="prom6">0.00%</td>
      </tr>
      <tr>
        <td>Item 7</td>
        <td>Uso eficiente y sostenible de recursos para la producción de bienes o servicios</td>
        <td id="prom7">0.00%</td>
      </tr>
      <tr>
        <td>Item 8</td>
        <td>Responsabilidad social al interior de la empresa</td>
        <td id="prom8">0.00%</td>
      </tr>
      <tr>
        <td>Item 9</td>
        <td>Responsabilidad social en la cadena de valor de la empresa</td>
        <td id="prom9">0.00%</td>
      </tr>
      <tr>
        <td>Item 10</td>
        <td>Responsabilidad social al exterior de la empresa</td>
        <td id="prom10">0.00%</td>
      </tr>
      <tr>
        <td>Item 11</td>
        <td>Comunicación de atributos del bien y servicio</td>
        <td id="prom11">0.00%</td>
      </tr>
      <tr>
        <th class=" grey lighten-1"></th>
        <th class=" grey lighten-1">Puntaje total </th>
        <th class="grey lighten-1" id="total">0.00% </th>
      </tr>

    </tbody>

  </table>
  <div id="div_grafica">
    <canvas id="grafica"></canvas> 
  </div>

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

  <table style="margin-top:20px" class="bordered">
    <thead>
      <tr>
        <th style="width: 100%;" class="green center" colspan="2">Resultado Nivel 1 + Nivel 2</th>
      </tr>

    </thead>
    <tbody>
      <tr>
        <td>Puntaje Total. Criterios de Cumplimiento de Negocios Verdes</td>
        <td id="puntaje1">0.00%</td>
      </tr>
      <tr>
        <td>Puntaje Total.  Criterios Adicionales (ideales) Negocios Verdes</td>
        <td id="puntaje2">0.00%</td>
      </tr>
      <tr>
        <th class=" grey lighten-1">Resultado </th>
        <th class="grey lighten-1" id="resultado"></th>
        <input type='hidden' name='prom_form' value='' id="prom_form" />
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
<script type="text/javascript" src="js/chart.js"></script>
