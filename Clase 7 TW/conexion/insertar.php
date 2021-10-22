<?php
include 'conexion.php';

$usu_usuario=$_POST['usu_usuario'];
$usu_password=$_POST['usu_password'];
$usu_nombres=$_POST['usu_nombres'];
$usu_apellidos=$_POST['usu_apellidos'];

$consulta="INSERT INTO usuario VALUES('".$usu_usuario."','".$usu_password."','".$usu_nombres."','".$usu_apellidos."')";
mysqli_query($conexion,$consulta) or die(mysql_error());
mysql_close($conexion);
?>
