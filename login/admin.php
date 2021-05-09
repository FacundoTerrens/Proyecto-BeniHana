<?php
session_start();
include 'conexion.php';
include 'seguridad.php';
?>
<html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table>
  <tr>
    <th  >Tipo</th>
    <th  >Nombre</th>
    <th  >Categoria</th>
    <th  >Talle</th>
    <th  >Color</th>
    <th  >Genero</th>
    <th  >Precio</th>

  </tr>
  <?php

    $sql= "SELECT * FROM `articulo` WHERE `tf_activo` >= '1'";
    $result= mysqli_query($conexion, $sql);

    while($mostrar=mysqli_fetch_array($result)){
  ?>
  <tr>
    <td  ><?php echo $mostrar['Tipo'] ?></td>
    <td  ><?php echo $mostrar['Nombre'] ?></td>
    <td  ><?php echo $mostrar['Categoria'] ?></td>
    <td  ><?php echo $mostrar['Talle'] ?></td>
    <td  ><?php echo $mostrar['Color'] ?></td>
    <td  ><?php echo $mostrar['Genero'] ?></td>
    <td  >$<?php echo $mostrar['Precio'] ?></td>

  </tr>
  <?php
  }
  ?>
</table>
<a href="salir.php">Cerrar</a>
<a href="subir_articulo_front.php">Subir Articulo</a>
</html>