<?php
    include("../conexion.php");

    $id = $_GET['id'];

    mysqli_query($conexion, "DELETE FROM `articulo` WHERE `articulo`.`ID` = '$id'");

        header('location:../dashboard.php');
?>