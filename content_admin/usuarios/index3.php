<?php 
session_start();
  if(!isset($_SESSION["vev_admin_contenido"])){
    header("Location:index.php");
    exit();
  }
 ?>
usuarios