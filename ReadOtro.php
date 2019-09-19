<?php
	 // llamar la conexion de base de datos
	require 'conexionDB.php';
	$sql ="SELECT * FROM perfil where Categoria= 'Otro'";

	if($result = mysqli_query($conexion, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        echo "<table  border='1'>";
	            echo "<tr>";
	               	echo "<th>imagen</th>";
	               	echo "<th>id</th>";
	                echo "<th>Nombre</th>";
	                echo "<th>Apellido</th>";
	                echo "<th>Expediente</th>";
	                echo "<th>Categoria</th>";

	            echo "</tr>";
	        while($row = mysqli_fetch_array($result)){
	            echo "<tr>";
	               
	                echo "<td><img  src=" . $row['foto']."></img></td>";
	                echo "<td>" . $row['id_perfil'] . "</td>";
	                echo "<td>" . $row['nombre'] . "</td>";
	                echo "<td>" . $row['apellido'] . "</td>";
	                echo "<td>" . $row['Categoria'] . "</td>";
	                echo "<td>" . $row['expediente'] . "</td>";

	            echo "</tr>";
	        } 
	        echo "</table>";
	        // Close result set
	        mysqli_free_result($result);
	    } 
	    else{
	        echo "No records matching your query were found.";
	    }
	} 
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conexion);
	}
	
?>