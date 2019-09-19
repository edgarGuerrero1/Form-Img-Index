<?php
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="CreateIndexServlet.php" method="post" enctype="multipart/form-data">
		<input type="date" name="fecha" id="fecha" placeholder="ingresa la fecha"></input></br>
		<input type="text" name="titulo" id="titulo" required placeholder="Ingresa el titulo de la foto"></input></br>
		<textarea name="contenido" id="contenido" required placeholder="ingresa el contenido"></textarea></br>
		<input type="file" name="foto" id="foto" required placeholder="ingresa la imagen"></input></br>
		<input type="radio" name="posicion" value="izquierda">izquierda</input>
		<input type="radio" name="posicion" value="centro">centro</input>
		<input type="radio" name="posicion" value="derecha">derecha</input></br>
		<input type="submit" name="envia prro"></input>


	</form>
	<a href="index.php"> regresar </a>
</body>
</html>