

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/style.css">

<head>
	<title>Perfil Foto</title>
</head>

<body>
  <div class="contenedor">
  	<p> Practicas perfiles</p>
  	<a href="Create.php"> Agregar perfil</a></br>
    <a href="CreateIndex.php">modificar imagenes index</a><br>
  	<div class="cont1">
  		<?php // llamar el documento con la funcion
  		require 'ReadGeneral.php';
  		?>
  	</div>
  	<div class="cont2">
  		<?php
  			require 'ReadMarvel.php';
        echo "</br>";
        require 'ReadDC.php';
        echo "</br>";
        require 'ReadOtro.php';
  		?>
  	</div>
  	<div class="cont3">
      <form method="post" action="ReadIndividual.php">
        <input type="text" name="id_perfil" placeholder="Ingresa el id del personaje a buscar"></br>
        <input type="submit" name="enviar">
      </form>
    </div>


    <div class=""> contenedor con img posicion IZQ
      <?php
        require 'ReadImgIzq.php';
      ?>
    </div>
    <div class=""> contenedor con img posicion Centro
      <?php
        require 'ReadImgIndex.php';
      ?>
    </div>
    <div class=""> contenedor con img posicion Derecha
      <?php
        require 'ReadImgDer.php';
      ?>
    </div>


  </div>
</body>
</html>