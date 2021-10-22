<?php
include 'conexion.php';
$Usucorreo=$_POST['email'];
$usu_clave=$_POST['password'];

//$Usucorreo="awilliam@crece.uss.edu.pe";
//$usu_clave="123456";

$sentencia=$conexion->prepare("SELECT * FROM usuario WHERE Usucorreo=? AND usu_clave=?");
$sentencia->bind_param('ss',$Usucorreo,$usu_clave);
$sentencia->execute();

$resultado = $sentencia->get_result();
if ($fila = $resultado->fetch_assoc()) {
         //echo json_encode($fila,JSON_UNESCAPED_UNICODE);     
         
         header('location:../index.php');
}
$sentencia->close();
$conexion->close();
?>