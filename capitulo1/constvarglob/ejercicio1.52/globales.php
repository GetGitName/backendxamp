<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables globales</title>
</head>
<body style="font-family: Verdana; font-size: 12px;">
    <?php
        
        //Ambito super global
        $GLOBALS['url'] = "www.donaciones.com";
        global $correoElectronico;
        $correoElectronico = "correoprueba@prueba.com";
        function donar($monto) {
            //ambito funcion
            $organizacion = "Cruz Roja";
            echo "<br> Donación para: " . $organizacion;
            echo "<br>URL: " . $GLOBALS['url'];
            echo "<br>Monto: " . $monto;
            global $correoElectronico;
            echo "<br>Correo electronico: " . $correoElectronico;
        }

        donar(200);

    ?>
</body>
</html>