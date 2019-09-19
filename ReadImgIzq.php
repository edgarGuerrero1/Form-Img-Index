<?php
	 // llamar la conexion de base de datos
	require 'conexionDB.php';
	$sql ="SELECT id_foto, foto FROM fotosindex where posicion= 'izquierda'order by fecha DESC limit 3";

	if($result = mysqli_query($conexion, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        

	            
	        while($row = mysqli_fetch_array($result)){
	               
	                echo "<img  src=imgIndex/" . $row['foto']."></img>";
	                echo "<p>" . $row['id_foto'] . "</p>";
	                

	        } 
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