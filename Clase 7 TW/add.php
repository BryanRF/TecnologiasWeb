<?php

include('conexion/conexion.php');

 if(!empty($_POST['usuario'])){

  $nombre = $_POST['usuario'];
  //$apellidos = $_POST[''];
  //$correo = $_POST[''];
  //$nombre = $_POST[''];
  
  $query = mysqli_query($conexion,"INSERT INTO usuario(nomUsu) VALUES ('$nombre')");
  
  if($query){
      header('location:index.php');
  }
}
?>