<?php
include("conexion.php");


$tipo = $_POST['tipo'];
$nombre= $_POST['nombre'];
$categoria = $_POST['categoria'];
$talle = $_POST['talle'];
$color = $_POST['color'];
$genero = $_POST['genero'];
$precio = $_POST['precio'];



$insertar = "INSERT INTO `articulo` (`id`, `tipo`, `nombre`, `categoria`, `talle`, `color`, `genero`, `precio`) VALUES (NULL, '$tipo ', '$nombre', '$categoria', '$talle' , '$color' , '$genero' , '$precio' )";
$resultado = mysqli_query($conexion, $insertar);


if(!$resultado){
  echo "error al registrarse";
}else {
header("location: subir_articulo_front.php");

}
?>

