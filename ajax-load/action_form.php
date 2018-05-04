<?php

$destino = "camilo.ibarray@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$motivo = $_POST['motivo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;

mail($destino,"Contacto",$contenido);
header("Location:../adminlogin/gracias.html");  

?>