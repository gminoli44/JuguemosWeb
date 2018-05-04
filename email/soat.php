<?php

$destino = "correo@gmail.com";
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$modelo = $_POST['modelo'];
$placa = $_POST['placa'];
$correo = $_POST['email'];
$telefono = $_POST['telefono'];

$contenido = "Nombre: ".$nombre. "\nCorreo: ".$correo."\nTelefono: ".$telefono."\nTipo vehiculo: ".$tipo."\nMarca: ".$marca. "\nPlaca: ".$placa. "\nModelo: ".$modelo;

mail($destino,"SOAT COTIZACION",$contenido);
?>
<div class="alert alert-success">
    	Gracias por escribirnos, pronto estaremos en contacto con tigo...
	</div>
