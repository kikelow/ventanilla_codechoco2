<?php
include "../../conexion.php";
$s="SELECT id,nombre from departamento where region_id = '".$_POST["region_m"]."' order by id desc";
$cs= mysqli_query($conn,$s);
if(mysqli_num_rows($cs)>0){
while ($rw=mysqli_fetch_assoc($cs)) {
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
	} 
}