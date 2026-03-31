<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body style="font-family:Verdadna;font-size:12px;">
    <h4>Consulta deprecios</h4>
    <form action="" method="post">
        <p>Seleccione un viaje:</p>
        Partida:
        <select name="salida" value="true">
            <option value=""></option>
            <option value="Durango">Durango</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Guadalajara">Guadalajara</option>
        </select>
        Destino:
        <select name="destino" value="true">
        <option value=""></option>
            <option value="Durango">Durango</option>
            <option value="Monterrey">Monterrey</option>
            <option value="Guadalajara">Guadalajara</option>
        </select>
        <input type="submit" name="calcular" value=" Calucular ">
        <p>-----------------------------------------------------------------</p>
    </form>
</body>
</html>
<?php

    function consultaPrecio($salida, $destino){
        $precios = array();
        $precios['Durango'] = array();
        $precios['Guadalajara'] = array();
        $precios['Monterrey'] = array();

        $precios['Monterrey']['Monterrey'] = 0;
        $precios['Monterrey']['Durango'] = 500;
        $precios['Monterrey']['Guadalajara'] = 900;

        $precios['Durango']['Monterrey'] = 500;
        $precios['Durango']['Durango'] = 0;
        $precios['Durango']['Guadalajara'] = 600;

        $precios['Guadalajara']['Monterrey'] = 900;
        $precios['Guadalajara']['Durango'] = 600;
        $precios['Guadalajara']['Guadalajara'] = 0;

        return($precios[$salida][$destino]);
    }

    if (isset($_POST["calcular"])) {
        $salida = $_POST["salida"];
        $destino = $_POST["destino"];
        $precio = consultaPrecio($salida, $destino);
        echo "<br>Precio de $salida a $destino es: $ $precio";
    }

?>