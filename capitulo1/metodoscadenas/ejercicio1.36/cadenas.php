<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 31</title>
</head>
<body>
    <form action="" name="form" method="POST">
        <input type="text" name="nombre" required placeholder="Nombre"><br>
        <input type="text" name="direccion" required placeholder="Dirección"><br>
        <input type="text" name="ciudad" required placeholder="Ciudad"><br>
        <input type="text" name="cp" required placeholder="Código Postal"><br>
        <input type="email" name="correo" required placeholder="Correo electronico"><br>
        <textarea name="comentario" placeholder="Escriba aquí su comentario" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar" name="enviar">
    </form>
    <?php

    if(isset($_POST["enviar"])){

        echo '<body style="font-family:Verdana;font-size:12px;">';
        $nombre = htmlspecialchars($_POST["nombre"]);
        $direccion = htmlspecialchars($_POST["direccion"]);
        $ciudad = htmlspecialchars($_POST["ciudad"]);
        $cp = htmlspecialchars($_POST["cp"]);
        $correo = htmlspecialchars($_POST["correo"]);
        $comentarios = htmlspecialchars($_POST["comentario"]);

        $nombre = trim($nombre);
        $direccion = trim($direccion);
        $ciudad = trim($ciudad);
        $cp = trim($cp);
        $correo = trim($correo);
        $comentarios = trim($comentarios);

        $ciudad = strtoupper($ciudad);
        if($ciudad == "DURANGO") {
            $costoDeEnvio = 10;
        } elseif($ciudad == "MONTERREY") {
            $costoDeEnvio = 20;
        } else {
            $costoDeEnvio = 30;
        }
        echo "<br> Costo de envio: $costoDeEnvio";

        $correo = strtolower($correo);
        echo "<br> Correo electrónico: $correo ";

        $nombre = ucfirst($nombre);
        echo "<br>Nombre: $nombre";
    }

    ?>
</body>
</html>