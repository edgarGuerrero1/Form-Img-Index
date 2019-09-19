<?php
	require_once 'conexionDB.php';
	$nombre =$_REQUEST ["nombre"];
	$apellido = $_REQUEST ["apellido"];
	$company = $_REQUEST ["company"];
	$expediente = $_REQUEST ["expediente"];
	$foto = $_FILES["foto"]["name"];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino ="img/".$foto;
	move_uploaded_file($ruta, $destino);
	


	mysqli_query($conexion,"INSERT INTO perfil (nombre, apellido, Categoria, expediente, foto) values ('$nombre', '$apellido', '$company', '$expediente'  ,'$destino')") or die( "user: ".mysqli_error($conexion));
	header("location: Create.php")
?>
<a href="Create.php"> regresar </a>