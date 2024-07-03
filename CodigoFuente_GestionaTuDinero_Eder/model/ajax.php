<?php
include "./inicio.php";

if(isset($_POST['nombreusuario'])){
   $nombreUsuario = $_POST['nombreusuario'];

   $result = $getFromU->checkNombreUsuario($nombreUsuario);
   $response = "Disponible.";
   
      if($result){
          $response = "No Disponible.";
      }
   echo $response;
   die;
}
?>