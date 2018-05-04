<?php

$destino = "camilo.ibarray@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];
$asunto = $_POST['asunto'];
$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo."\nAsunto: ".$asunto."\nMensaje: ".$mensaje;

mail($destino,"Trabaja con nosotros",$contenido);
?>
<div class="alert alert-success">
    	Gracias por escribirnos, pronto estaremos en contacto con tigo...
	</div>
