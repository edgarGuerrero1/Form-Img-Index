<?php
	require_once 'conexionDB.php';
	$fecha =$_REQUEST ["fecha"];
	$titulo = $_REQUEST ["titulo"];
	$contenido = $_REQUEST ["contenido"];
	$posicion = $_REQUEST ["posicion"];
	$foto = $_FILES["foto"]["name"];
	$ruta = $_FILES["foto"]["tmp_name"];
	$destino ="imgIndex/".$foto;
	move_uploaded_file($ruta, $destino);
	


	mysqli_query($conexion,"INSERT INTO fotosindex (fecha, titulo, contenido, foto, posicion) values ('$fecha', '$titulo', '$contenido', '$foto', 
		'$posicion')") or die( "user: ".mysqli_error($conexion));
	
?>
<a href="Createindex.php"> regresar </a>


