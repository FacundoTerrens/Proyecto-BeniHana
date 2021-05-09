<?php
include("conexion.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = mysqli_query($conexion, "SELECT ID FROM `usuarios` WHERE Usuario = '$user' and Contra = '$pass' ");

$result = mysqli_num_rows($query);
	if ($result == 0) {
		header("location: login.php");
	}else {
		$row = mysqli_fetch_array($query);
			session_start();
			$_SESSION['user'] = $row['ID'];
			$_SESSION['autenticado'] = 'si';
			header("location: dashboard.php");
	}