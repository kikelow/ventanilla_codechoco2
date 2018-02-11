<?php 
include "../../conexion.php";
$empresa = $_POST['empresa_id'];

 $i = 0;
            $ver = "";
            $s1="SELECT id,nombre from bienes_servicios where empresa_id = '$empresa' order by id ";
            $r1= mysqli_query($conn,$s1) or die("Error");
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
              	if ($rw['nombre'] != "") {
              		
              	
                       $i++;
             $ver.="
             <div class='row'>
                
                <div class='input-field col s12 m3 l3'>
                 <input readonly  type='text' name='bien[]' id='bien".$i."' value='$rw[nombre]' />
                      <label for='bien".$i."'></label>
                </div>
                 <div class='input-field col s12 m3 l3'>
                 <input   type='text' name='unidad_v_anual[]' id='unidad_v_anual".$i."'/>
                      <label for='unidad_v_anual".$i."'>unidades vendidas anual</label>
                </div>

                <div class='input-field col s12 m3 l3'>
                <select  name='unidad_medida[]' id='unidad_medida".$i."'>";
                     $s="select id,nombre from unidad_medida ";
                  $r= mysqli_query($conn,$s) or die('Error');
                  if(mysqli_num_rows($r)>0){
                    while($result=mysqli_fetch_assoc($r)){
                        $ver.="<option value=".$result['id'].">".$result['nombre' ]."</option>";
                    }
                  }
                $ver.="</select>
                <label>Unidad de medida</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                 <input   type='text' name='espe_unidad[]' id='espe_unidad".$i."'/>
                      <label for='espe_unidad".$i."'>Especifique unidades</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input   type='text' name='costo_pro_unidad[]' id='costo_pro_unidad".$i."'/>
                      <label for='costo_pro_unidad".$i."'>Costo producción unidad</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input   type='text' name='precio_v_unitario[]' id='precio_v_unitario".$i."'/>
                      <label for='precio_v_unitario".$i."'>Precio venta unitario</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input   type='text' name='ganancia_unidad[]' id='ganancia_unidad".$i."'/>
                      <label for='ganancia_unidad".$i."'>Ganacias por unidad</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input   type='text' name='venta_anual[]' id='venta_anual".$i."'/>
                      <label for='venta_anual".$i."'>Ventas anuales</label>
                </div>

                <div class='input-field col s12 m4 l4'>
                <select  name='ingresos_sup_costo[]' id='ingresos_sup_costo".$i."'>";
                     $s2="select id,nombre from si_no ";
                  $r2= mysqli_query($conn,$s2) or die('Error');
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $ver.="<option value=".$result2['id'].">".$result2['nombre' ]."</option>";
                    }
                  }
                $ver.="</select>
                <label>Los ingresos son superiores a los costos</label>
                </div>
            </div>
             <div class='divider '></div>";
             }
              }  

            } 
            echo($ver)

?>