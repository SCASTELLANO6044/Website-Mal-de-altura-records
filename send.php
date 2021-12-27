<?php

//Llamadas
$nombre = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Datos para el correo

$destino = "maldealturarecords@gmail.com";

$correo = "De: $nombre \n";
$correo .= "Correo: $email \n";
$correo .= "Mensaje: $message";

//Envío
mail($destino, $subject, $correo);
header('Location:confirmacion.html');

?>