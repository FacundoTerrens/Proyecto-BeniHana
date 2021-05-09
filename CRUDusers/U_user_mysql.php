<?php
include('../conexion.php');
$id=$_GET['id'];
$nombre=$_POST['nombre'];
$tipo=$_POST['tipo'];
$categoria=$_POST['categoria'];
$talle=$_POST['talle'];
$color=$_POST['color'];
$genero=$_POST['genero'];
$precio=$_POST['precio'];
if (isset($_POST['tf_activo'])) {
    $tf_activo=1;
}else{
    $tf_activo=0;
}
    $query = "UPDATE `articulo` SET `Nombre` = '$nombre', `Tipo` = '$tipo', `Categoria` = '$categoria', `Talle` = '$talle', `Color` = '$color', `Genero` = '$genero', `Precio` = '$precio', `tf_activo` = '$tf_activo' WHERE `articulo`.`ID` = '$id'";
    mysqli_query($conexion, $query);
    header('location:../dashboard.php');
    