<?php 
	
	require("../../conexion.php");
	$sede=$_POST['nombre'];
	$sql = "INSERT INTO nuestras_sedes (sedes) VALUES ('$sede')";
	
	if(mysqli_query($link, $sql)){
		?>
	<div class="alert alert-success">
		Sede agregada con éxito
		<?php header("Location:" . "../nuestras_sedes.php"); ?>
	</div>
	<?php
	    
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}

?>