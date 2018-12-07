<?php 
include "../../conexion.php";
$empresa = $_POST['empresa_id'];

 $i = 0;
            $ver = "";
            $s1="SELECT id,nombre,lider from bienes_servicios where empresa_id = '$empresa' order by id ";
            $r1= mysqli_query($conn,$s1);
            if(mysqli_num_rows($r1)>0){
              while($rw=mysqli_fetch_assoc($r1)){
              	if ($rw['nombre'] != "" || $rw['lider'] != "" ) {
              		
              	
                       $i++;
             $ver.="
             <div class='row'>
                
                <div class='input-field col s12 m3 l3' id='l'>
                 <input readonly  type='text' name='bien[]' id='bien".$i."' value='$rw[nombre]$rw[lider]' />
                      <label for='bien".$i."' class='activar'>Bien o servicio</label>
                      <input type='hidden' name='bien_hidden[]' id='bien_hidden' value='$rw[id]'>
                </div>
                 <div class='input-field col s12 m3 l3'>
                 <input   type='number' name='unidad_v_anual[]' id='unidad_v_anual".$i."' class='aut'/>
                      <label for='unidad_v_anual".$i."'>unidades vendidas anual</label>
                </div>

                <div class='input-field col s12 m2 l2'>
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
                
                <div class='input-field col s12 m4 l4'>
                 <input   type='number' name='cantidad[]' id='cantidad".$i."' />
                      <label for='cantidad".$i."'>Cantidad (unidad medida)</label>
                </div>
                <div class='input-field col s12 m3 l3'>
                 <input   type='number' name='costo_pro_unidad[]' id='costo_pro_unidad".$i."' class='aut'/>
                      <label for='costo_pro_unidad".$i."'>Costo producción unidad</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input   type='number' name='precio_v_unitario[]' id='precio_v_unitario".$i."' class='aut' />
                      <label for='precio_v_unitario".$i."' class=''>Precio venta unitario</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input readonly  type='number' name='ganancia_unidad[]' id='ganancia_unidad".$i."'/>
                      <label for='ganancia_unidad".$i."' class='activar'>Ganacias por unidad</label>
                </div>
                <div class='input-field col s12 m2 l2'>
                 <input readonly  type='number' name='venta_anual[]' id='venta_anual".$i."' />
                      <label for='venta_anual".$i."' class='activar'>Ventas anuales</label>
                </div>

                <div class='input-field col s12 m3 l3'>
                <select  name='ingresos_sup_costo[]' id='ingresos_sup_costo".$i."'>";
                     $s2="SELECT id,nombre from si_no WHERE id != 4  ";
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
            $ver .="<div class='row'>
        <div class='input-field col s12 m4 l4'>
          <input type='text' id='otro_bien_nom'  name='otro_bien_nom'   />
          <label for=''>Otros bienes o servicios</label>
        </div>
        <div class='input-field col s12 m3 l3'>
          <input type='number' id='otro_t_produccion'  name='otro_t_produccion'  />
          <label for=''>Costo total producción</label>
        </div>
        <div class='input-field col s12 m2 l2'>
          <input type='number' id='otro_venta_total' class='aut'  name='otro_venta_total'  />
          <label for=''>Ventas totales anual</label>
        </div>

        <div class='input-field col s12 m3 l3'>
                <select  name='ingresos_sup_costo_otro' id='ingresos_sup_costo_otro'>";
                 
                  $s2="SELECT id,nombre from si_no WHERE id != 4 ";
                  $r2= mysqli_query($conn,$s2) or die('Error');
                  if(mysqli_num_rows($r2)>0){
                    while($result2=mysqli_fetch_assoc($r2)){
                        $ver.= "<option value=".$result2['id'].">".$result2['nombre' ]."</option>";
                    }
                  }
                  
              $ver.=" </select>
                <label>Los ingresos son superiores a los costos</label>
                </div>
            </div>

            <div class='row'>
        <div class='col s12 m4 l4' style=''>
          <div>2. Costo promedio de insumos totales</div>
          <div class='divider'></div>
          <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m12 l12'>
                <input id='costo_p_insumos' name='costo_p_insumos' type='number'>
                <label for='costo_p_insumos'>Valor anual</label>
              </div>
            </div>
          </div>

          <div class='col s12 m4 l4' style=''>
          <div>3. Costo promedio de mano de obra</div>
          <div class='divider'></div>
          <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m12 l12'>
                <input id='costo_p_mano_obra' name='costo_p_mano_obra' type='number' >
                <label for='costo_p_mano_obra'>Valor anual</label>
              </div>
            </div>
          </div>

          <div class='col s12 m4 l4' style=''>
          <div>4. Total de ventas realizadas</div>
          <div class='divider'></div>
          <div class='row' style='margin-bottom: 0px'>
              <div class='input-field col s12 m12 l12'>
                <input id='total_ventas_realizadas' name='total_ventas_realizadas' type='number' value='0'>
                <label for='total_ventas_realizadas' class='active'>Valor anual</label>
              </div>
            </div>
          </div>
      </div>";
            echo($ver);
             echo "<script type='text/javascript' src='js/bien_servicio.js'></script>
 <script type='text/javascript'>
$(document).ready(function(){
 $('.activar').addClass('active')
  })
</script>
";

?>