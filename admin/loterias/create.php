<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

<?php

require_once('../../conexion.php');



$nombre=$_POST['nombre'];



	$sql = "INSERT INTO loterias (nombre) VALUES ('$nombre')";
if(mysqli_query($link, $sql)){
	?>
	<div class="alert alert-success">
    	Lotería agredada con éxito
	</div>
	<?php
    
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}





?>


