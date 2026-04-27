<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="estilos/tienda.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <div class="contenido">
        <form name="entrar" method="post" enctype="multipart/form-data" action="">
            <p id="titulo_de_pagina">Reestablece contraseña</p>
            <input type="email" required name="correo_electronico" placeholder="Correo electronico">
            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            <br>
            <div class="contenedorIcon">
                <input type="submit" class="icon" id="enviar" name="enviar" value="&rarr;">
            </div>
            <a href="index.php">Regresar</a>
        </form>
    </div>
    <?php

    if(isset($_POST['enviar'])) {
        $aviso = "";
        $correo_electronico = htmlspecialchars($_POST['correo_electronico']);
        // 64 caracteres alfanuméricos para el token
        $fichaToken = bin2hex(random_bytes(32));
        $marcaTemporal = new DateTime("now");
        $marcaTemporal = $marcaTemporal->getTimestamp(); // Token válido por 1 hora
        include("conexion.php");
        try {
            $sql = "UPDATE cliente SET ficha_token = ? WHERE correo_electronico = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute(array($fichaToken, $correo_electronico));
        } catch (Exception $e) {
            echo $e->getMessage();
            $aviso .= "Error al generar el token de restablecimiento<br>" . $e->getMessage();
        }

        // aqui generamos el path o enlace al scrpt de restablecimiento de contraseña, incluyendo el token como parámetro GET
        $enlace = sprintf("%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http', $_SERVER['HTTP_HOST']) . "/paginas/cambiar_contrasena.php";
        $enlace .= "?fichaToken=" . $fichaToken. "&marcaTemporal=" . $marcaTemporal;
        // enviar enlace al correo electronico del cliente
        include("funciones.php");
        $asunto = "Restablecimiento de contraseña en Tu Tienda en Línea";
        //$mensaje = "Hola, para restablecer tu contraseña haz clic en el siguiente enlace: <a href='$enlace'>Restablecer contraseña</a>. Este enlace es válido por 1 hora.";
        //$resultado = enviarCorreo($correo_electronico, "Cliente", $asunto, $mensaje);
        $mensaje = "<p>Si deseas resteablecer tu contraseña haz clic <a href='$enlace'>aquí</a></p>";
        try{
            enviarCorreo($correo_electronico, "Cliente", $asunto, $mensaje);
            $aviso = "Te enviamos un correo electronico";
        }catch(Exception $e){
            $aviso = "No se pudo enviar el correo electronico: " . $e->getMessage();
        }
        // Aquí puedes agregar la lógica para generar un token de restablecimiento de contraseña
        // y enviar un correo electrónico al usuario con el enlace para restablecer su contraseña.
        echo "<div id='aviso'>".$aviso."</div>";
    }

    ?>
</body>
</html>