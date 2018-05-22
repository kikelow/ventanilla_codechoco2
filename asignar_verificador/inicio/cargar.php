<?php 
include "../../conexion.php";
	
	$id = $_POST['id'];
	
	$s="SELECT * FROM `verificadorxempresa` WHERE id = '$id'";
	$r = mysqli_query($conn,$s) or die (mysqli_error($conn));
	if (mysqli_num_rows($r)>0) {
		$empresa_id = '';
		$verificador = '';
		while ($rw=mysqli_fetch_assoc($r)) {
			$empresa_id = $rw['empresa_id'];
			$verificador = $rw['persona_id'];

		}

		echo "<div class='row'>
      	<div class='input-field col s12 m6 l6' >
      	<input id='id_tabla' name='id_tabla' type='hidden' value='$id'>
    
                <select name='verificador2' id='verificador2' class='validate'>
                  ";
                  
                    $s="SELECT id,nombre1,nombre2,apellido1,paellido2, identificacion from persona WHERE rol_id = '2' ";
                    $r= mysqli_query($conn,$s) or die("Error");
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      	if ($rw['id'] == $verificador) {
                      		 echo"<option selected='selected' value='$rw[id]'>$rw[nombre1] $rw[nombre2] $rw[apellido1] $rw[paellido2] - $rw[identificacion]</option>";
                      	}else{
                      		echo"<option value='$rw[id]'>$rw[nombre1] $rw[nombre2] $rw[apellido1] $rw[paellido2] - $rw[identificacion]</option>";   
                      	}
                             
                      }         
                    }
               
             echo " </select>
                <!-- <label >Tipo de persona</label>   -->
                        
            </div>

      
      <div class='input-field col s12 m6 l6' >
    
                <select name='emprendimiento2' id='emprendimiento2' class='validate' disabled>";
      
                    $s="SELECT empresa.id,empresa.razon_social,empresa.identificacion FROM empresa
						WHERE  empresa.id = '$empresa_id'";
                    $r= mysqli_query($conn,$s) or die(mysqli_error($conn));
                    if(mysqli_num_rows($r)>0){
                      while($rw=mysqli_fetch_assoc($r)){
                      echo"<option value='$rw[id]'>$rw[razon_social] - $rw[identificacion]</option>";          
                      }         
                    }
                
              echo "</select>
                <!-- <label >Tipo de persona</label>   -->
                        
            </div>
      </div>

      
     <script type='text/javascript'>  
	$(document).ready(function(){
	  $('#verificador2').select2();
   $('#emprendimiento2').select2();
	})
	</script>


      ";

	}

?>