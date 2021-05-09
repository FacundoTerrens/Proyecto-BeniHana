<?php

if ($_SESSION['autenticado'] != 'si') {
    header("location: login.php");
}

 ?>
