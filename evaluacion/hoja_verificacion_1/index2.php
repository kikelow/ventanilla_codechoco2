<?php 
// session_start();
  if(!isset($_SESSION["vev_verificador"])){
    header("Location:index.php");
    exit();
  }
 ?>
 <?php 
 require_once('conexion.php');
 
 ?>
 <div id="test1" class="col s12" style="padding-right: 0px; padding-left: 0px">
          <center><h4>Sección para Registrar</h4></center>
  <div id="test-swipe-1" class="col s12 " style="margin-left: -15px; width: 100%">
    <section id="" style="">
      <div class="row">
        <div class="col s12 m12 l12" style="padding-left: 0px; padding-right: 0px">
          <div class="card grey lighten-4 " style="height: auto;display:inline-block;width: 98%; margin-left: 20px">
            <div class="card-content black-text">

             <span class="card-title"><center><h5> Hoja de verificación 1</h5></center></span>
             <div class="row">
               
              <div class="input-field col s12 m12 l12  " id="div_empresa">
                <select id="empresa_v1" style="width: 100%; left: -20px;" name="empresa" required="required">
                  <option disabled selected="">Seleccione un emprendimiento al cual quiere aplicarle la "Hoja de verificacion 1"</option>
                  <?php 
                  $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM verificadorxempresa
                        INNER JOIN empresa ON empresa.id = verificadorxempresa.empresa_id
                        WHERE verificadorxempresa.persona_id = '$_SESSION[vev_verificador]' AND verificacion1 ='no'";
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
              <form id="form_verificacion1">
               <ul class="collapsible" data-collapsible="accordion">
                <li>
              <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Certificaciones vigentes</div>
                  <div class="collapsible-body">

                   <div class="row" style="text-align: center;background-color: #bdbdbd;">Certificaciones vigentes</div>
                   <!-- <div class="row" style="border: 1px solid;height: auto;display:inline-block; width: 100% "> -->
                    
                    <?php
                     $i = 0; 
                    $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 1";
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
                          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
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
                          echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                        }
                      }
                      echo"
                      </select>
                      <label for=''>¿Cumple con el requerimiento?</label>
                      </div>
                      </div>";
                    }         
                  }
                  ?>
                  <!-- <div class="divider grey ligthen-2" style="height: 6px;margin-top:20px;"></div> -->

                  <div class="row">

                      <div class='input-field col s12 m4 l4'>
                        <input type='date' id='vigencia' name='vigencia[]'>
                        <label for='vigencia' class="active">Ultima fecha de expedición</label>
                      </div>

                      <div class='input-field col s12 m4 l4'>
                        <input type='text' id='nombre_certificacion' name='nombre_certificacion[]'>
                        <label for='nombre_certificacion'>Nombre de la certificación</label>
                      </div>

                      <div class='input-field col s12 m4 l4'>

                        <select multiple name="medio_verificacion[]" id="medio_verificacion1">
                          <option disabled>Seleccione...</option>
                          <?php
                           $medio = array();
                          $s1="SELECT id,nombre from medio order by id asc ";
                          $r1= mysqli_query($conn,$s1) or die('Error');
                          if(mysqli_num_rows($r1)>0){
                            while($result1=mysqli_fetch_assoc($r1)){
                              echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                              array_push($medio,$result1['id']);
                            }
                          }

                          ?>

                        </select>
                       <input type='hidden' name='medio1[]' id='medio1'>
                        
                      </div>

                  </div>
                  
                </div>
              </li>





              <li>
                <div class="collapsible-header" style="font-weight: bold;"> <i class="material-icons"></i>Requisitos excluyentes</div>
                <div class="collapsible-body">
                 <div class="row" style="text-align: center;background-color: #bdbdbd;">Requisitos exclutentes</div>
                    
                  <div class="divider"></div>
                  <?php
                  $i = 0;
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 2";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>


                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion".$i."' name='descripcion2[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion2[]' id='medio_verificacion2".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                        // array_push($medio1,$result1['id']);
                      }
                    }

                   
                    echo "
                    </select>";
                       
                   
                    echo "<input type='hidden' name='medio2[]' id='medio2".$i."' value=''>";
                 

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
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 3";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>


                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion3".$i."' name='descripcion3[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion3[]' id='medio_verificacion3".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                        // array_push($medio1,$result1['id']);
                      }
                    }

                   
                    echo "
                    </select>";
                       
                   
                    echo "<input type='hidden' name='medio3[]' id='medio3".$i."' value=''>";
                 

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
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 4 ";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Cumple con el requerimiento</label>
                    </div>

                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion4".$i."' name='descripcion4[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion4[]' id='medio_verificacion4".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
          
                      }
                    }

                   
                    echo "
                    </select>
                   <input type='hidden' name='medio4[]' id='medio4".$i."' value=''>
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>

                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion4".$i."' name='descripcion4[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion4[]' id='medio_verificacion4".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
          
                      }
                    }

                   
                    echo "
                    </select>
                   <input type='hidden' name='medio4[]' id='medio4".$i."' value=''>
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
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 5";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>


                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion5".$i."' name='descripcion5[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion5[]' id='medio_verificacion5".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                        // array_push($medio1,$result1['id']);
                      }
                    }

                   
                    echo "
                    </select>
                    <input type='hidden' name='medio5[]' id='medio5".$i."' value=''>
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
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 6";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>


                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion6".$i."' name='descripcion6[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion6[]' id='medio_verificacion6".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                        // array_push($medio1,$result1['id']);
                      }
                    }

                   
                    echo "
                    </select>
                    <input type='hidden' name='medio6[]' id='medio6".$i."' value=''>
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
                  $s="SELECT id,descripcion from pregunta_indicativa where aspecto_id = 7";
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
                        echo"<option value=".$result1['id'].">".$result1['nombre' ]."</option>";
                      }
                    }
                    echo"
                    </select>
                    <label for=''>Si/ No/ No Aplica</label>
                    </div>


                    <div class='input-field col s12 m6 l6'>
                    <textarea id='descripcion7".$i."' name='descripcion7[]' class='materialize-textarea'></textarea>
                    <label for=''>Descripción</label>
                    </div>
              
                    <div class='input-field col s12 m6 l6'  style='margin-top: 52px'>

                    <select multiple name='medio_verificacion7[]' id='medio_verificacion7".$i."'>
                    <option disabled>Seleccione...</option>";

                    $medio1 = array();
                    $s1="SELECT id,nombre from medio order by id asc ";
                    $r1= mysqli_query($conn,$s1) or die('Error');
                    if(mysqli_num_rows($r1)>0){
                      while($result1=mysqli_fetch_assoc($r1)){
                        echo"<option value=".$result1['nombre'].">".$result1['nombre' ]."</option>";
                        // array_push($medio1,$result1['id']);
                      }
                    }

                   
                    echo "
                    </select>
                    <input type='hidden' name='medio7[]' id='medio7".$i."' value=''>
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
    <button type="submit" class="waves-effect green darken-2 btn right" style="margin-bottom: 8px" id="btn_verificacion1"><i class="material-icons right">add</i>Registrar</button>
  </form>
</div>
</div>

</div>
</div>
</div>
</div>
</section>  
</div>
</div>


<script type="text/javascript" src="js/select2.js"></script>
<script type="text/javascript" src="js/accion_verificacion1.js">
  $('#vigenca').focus();
</script>