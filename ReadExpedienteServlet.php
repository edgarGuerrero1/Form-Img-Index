<?php 
	require 'conexionDB.php';
	$id_perfil =$_REQUEST ["id_perfil"];
	$sql ="SELECT expediente, Categoria FROM perfil where id_perfil= '$id_perfil'";
	if($result = mysqli_query($conexion, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        
	        while($row = mysqli_fetch_array($result)){
	                echo "<p>Categoria: ".$row['Categoria']."</p>";
	            	echo "<p>Expediente: ".$row['expediente']."</p>";
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
