


<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
	<title>Create Foto</title>
</head>
<body>
  
	<form method="post" action="CreateServlet.php" enctype="multipart/form-data">
		<input type="text" name="nombre" id="nombre" placeholder="ingresa el nombre" required></input></br>
		<input type="text" name="apellido" id="apellido" placeholder="ingresa el pellido" required></br>
		<input type="radio" name="company" value="Marvel">Marvel</input>
		<input type="radio" name="company" value="DC">DC</input>
		<input type="radio" name="company" value="Otro">Otro</input></br>
		<input type="text" name="expediente"  id="expediente" placeholder="ingresa el expediente" required></input></br>
		<input type="file" name="foto" id="foto" placeholder="ingresa la foto" required></input></br>
		<input type="submit" name="envia prro"></input>
	</form>
	<a href="index.php">index</a>
  
</body>
</html>

