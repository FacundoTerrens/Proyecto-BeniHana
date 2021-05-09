<?php
 require 'conexion.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT COUNT(*) as contar FROM usuarios WHERE Usuario = '$user' AND Contraseña = '$pass'";


$consulta = mysqli_query($conexion, $query); 

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['autenticado'] = 'si';
    header("location: admin.php");
}else{
  echo "datos incorrectos";
}
  ?>