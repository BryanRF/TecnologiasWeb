<?php
include ('conexion/conexion.php');

$id = $_GET['id'];
$query = "DELETE FROM usuario where (codUsu = '$id')";
$result = mysqli_query($conexion,$query);
if($query){
    header('location:index.php');
}

?>