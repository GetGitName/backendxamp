<?php
require_once 'funciones.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$destinatario = 'sqrtvector3@gmail.com';
$nombreDestinatario = 'Cliente de Prueba';
$asunto = 'Prueba de envío con PHPMailer';
$mensaje = 'Este es un mensaje de prueba desde la función enviarCorreo.';

$resultado = enviarCorreo($destinatario, $nombreDestinatario, $asunto, $mensaje);

echo $resultado; 