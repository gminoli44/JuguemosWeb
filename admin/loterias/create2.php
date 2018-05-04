<?php 
	
	
	require("../../conexion.php");
	$resultado=$_POST['resultado'];
	$loteria=$_POST['loteria'];
	$fecha = $_POST['fecha'];


	if(isset($_POST['fecha'])>0)
	{
		$fecha=$_POST['fecha'];
		$sql = "INSERT INTO resultados_loterias (id_loteria,resultado,fecha) VALUES ('$loteria','$resultado','$fecha')";

	}else{
		
		$sql = "INSERT INTO resultados_loterias (id_loteria,resultado,fecha) VALUES ('$loteria','$resultado',now())";
	}
	
	if(mysqli_query($link, $sql)){
		?>

		<div class="alert alert-success">
	    	Resultado agregado con éxito
		</div>
		<?php
	    
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

	?>