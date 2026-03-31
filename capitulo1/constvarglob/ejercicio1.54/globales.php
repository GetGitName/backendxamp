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
        //constantes globales
        define("CONTRIBUCION_ESTATAL",0.10);
        function donar($monto) {
            //ambito funcion
            $organizacion = "Cruz Roja";
            echo "<br> Donación para: " . $organizacion;
            echo "<br>URL: " . $GLOBALS['url'];
            echo "<br>Monto: " . $monto;
            global $correoElectronico;
            echo "<br>Correo electronico: " . $correoElectronico;
            $contribucion = $monto * CONTRIBUCION_ESTATAL;
            $donacion = $monto + $contribucion;
            echo "<br>Incluida la contribución: " . $donacion;
            static $saldo;
            $saldo = $saldo + $donacion;
            echo "<p style='background-color:yellow;'>Saldo acrual: $saldo</p>";
        }

        donar(1000);
        donar(100);
        donar(33333);

    ?>
</body>
</html>