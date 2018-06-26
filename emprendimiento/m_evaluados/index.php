<div class="" style="margin: 0px;padding: 0px;width: 100%;height: auto;margin-top: 20px;">
<div class="row" style="margin-top: 150px;">	
<div class="row" style="margin-bottom: 0px;">

<?php include "conexion.php"; 

  $s = "SELECT id,razon_social,descripcion,puntaje from empresa" ;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

     if(mysqli_num_rows($res)>0){
        while($rw=mysqli_fetch_array($res)){

        	if ($rw['puntaje'] > 50) {
        	
        	

        $desc1 = substr($rw['descripcion'], 0,50);
?>

		<div class="col s12 m4 l4" style="padding-right: 0px;">
			<div class="row" style="margin-bottom:10px;">
				<div class="col s12 col2 producto prod-first" style="height: 200px">
					<img class="c_img" src="img/p0.jpg" alt="">
					<div class="mask">  
				        <h2><?php echo $rw['razon_social'] ?> </h2>  
				        <p><?php echo $desc1 ?> </p>
				        <a href="emprendimiento/m_evaluados/vermas/index.php?id=<?php echo $rw['id'] ?>" class="info">Lee más</a>  
			        </div>
				</div>
			</div>
		</div>

<?php 
}	
}
}
 ?>

</div>
</div>
</div>