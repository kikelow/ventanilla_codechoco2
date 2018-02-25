<?php
include "../../conexion.php";

$s="SELECT id,nombre from subsector where sector_id = '".$_POST["sector_m"]."'";
$cs= mysqli_query($conn,$s);
if(mysqli_num_rows($cs)>0){
while ($rw=mysqli_fetch_assoc($cs)) {
	 echo"<option value='$rw[id]'>$rw[nombre]</option>";
	} 
}