<?php
    include("../conexion.php");
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $tipo=$_POST['tipo'];
    $categoria=$_POST['categoria'];
    $talle=$_POST['talle'];
    $color=$_POST['color'];
    $genero=$_POST['genero'];
    $precio=$_POST['precio'];

    mysqli_query($conexion, "INSERT INTO `articulo` (`Nombre`, `Tipo`, `Categoria`, `Talle`, `Color`, `Genero`, `Precio`) VALUES ('$nombre', '$tipo', '$categoria', '$talle', '$color', '$genero', '$precio');");
    
//aqui van las imagenes (Carpeta o ruta que usaras)
$path = "img/";

//Hacemos un poco de código verificando que se recibieron las imagenes
if(isset($_FILES['file_array'])){   
    //almacenamos las propiedades de las imagenes
    $nombre_array   = $id;
    $name_array     = $_FILES['file_array']['name'];
    $tmp_name_array = $_FILES['file_array']['tmp_name'];
    $type_array     = $_FILES['file_array']['type'];
    $size_array     = $_FILES['file_array']['size'];
    $error_array    = $_FILES['file_array']['error'];

    //recorremos el array de imagenes para subirlas al simultaneo
    for($i = 0; $i < count($tmp_name_array); $i++){
        $name=$id . $i . '.jpg';
        if(move_uploaded_file($tmp_name_array[$i], "../img/".$name)){

            //guardamos en la base de datos el nombre
            $act = "INSERT INTO media (ID_Articulo, foto, url) values ('$id', '$name','$path$name')";
            if(@mysqli_query($conexion, $act)){
                echo "<img src='../".$path.$name."'>".$id." Se ha subido exitosamente.<br>";

        }
        else
        {
            //si ocurre algún problema 
            echo "move_uploaded_file function failed for ".$name."<br>";
        }
    }
}}
    header('location:../dashboard.php');
?>