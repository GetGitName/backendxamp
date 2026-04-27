<?php

use PHPMailer\PHPMailer\PHPMailer;

    // Función para enviar correos electronicos via cuenta Gmail
    function enviarCorreo($destinatario, $nombreDestinatario, $asunto, $mensaje){

        require_once 'bibliotecas/PHPMailer-7.0.2/src/PHPMailer.php';
        require_once 'bibliotecas/PHPMailer-7.0.2/src/Exception.php';
        require_once 'bibliotecas/PHPMailer-7.0.2/src/SMTP.php';
        
        $correo = new PHPMailer();

        // Habilitar debug detallado
        $correo->SMTPDebug = 2; // Nivel 2: muestra comandos del cliente y respuestas del servidor
        $correo->Debugoutput = 'html'; // Salida en formato HTML

        // Configuración del servidor SMTP de Gmail
        $correo->isSMTP();
        $correo->SMTPAuth = true;
        $correo->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $correo->Host = 'smtp.gmail.com';
        $correo->Port = 587;

        // Deshabilitar verificación de certificado SSL (solo para desarrollo)
        $correo->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        // Credenciales de la cuenta de Gmail
        $correo->Username = 'sqrtvector3@gmail.com';
        $correo->Password = 'twhk ecix eypx jtmp';
        
        // Configuración del correo
        $correo->isHTML(true);
        $correo->setFrom('sqrtvector3@gmail.com', 'Tu Nombre');
        $correo->Subject = $asunto;
        $correo->CharSet = 'UTF-8';
        $correo->Body = "<p>Hola $nombreDestinatario,</p><p>$mensaje</p>";
        $correo->addAddress($destinatario);
        $correo->Body .= "<p>Saludos,<br>Tu Tienda en Línea</p>";

        // Enviar el correo
        if ($correo->send()) {
            return "Correo enviado exitosamente a $destinatario";
        } else {
            return "Error al enviar el correo: " . $correo->ErrorInfo;
        }

    }


?>