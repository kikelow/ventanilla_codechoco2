<div class="" style="margin: 0px;padding: 0px;width: 100%;height: auto;margin-top: 20px;">
<div class="row" style="margin-top: 150px;">	
<div class="row" style="margin-bottom: 0px;">

<?php include "conexion.php"; 

  $s = "SELECT e.id,e.razon_social,e.descripcion,e.puntaje,i.imagen from empresa e,img_empresa i where e.id = i.empresa_id AND puntaje >" . 50;
  $res = mysqli_query($conn,$s) or die(mysqli_error($conn));

     if(mysqli_num_rows($res)>0){
        while($rw=mysqli_fetch_array($res)){        	

        $desc1 = substr($rw['descripcion'], 0,50);
?>

		<div class="col s12 m4 l4" style="padding-right: 0px;">
			<div class="row" style="margin-bottom:10px;">
				<div class="col s12 col2 producto prod-first" style="height: 200px">
					<img class="c_img" src="evaluacion/formato_inscripcion/imagenes/<?php 	echo $rw['imagen'] ?> " alt="">
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
}else{
	echo " <div class='row' style='margin-top: 200px;'>
    <div class=' col s12  green lighten-5 ' id='' style='border: 1px solid green;margin-left:10%;margin-right: 10%;width: 80%;'>
      <h3>No hay información para mostrar</h3>
    </div>
 </div>
";
}

 ?>


</div>
</div>
</div>