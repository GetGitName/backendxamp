<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitulo 1 - Laboratorio 1.1</title>
</head>
<body>
    
    <?php

        echo "Paso 1: Declarar variable correspondientes alas dimenciones de una caja:";
        $ancho = 10;
        $longitud = 11;
        $altura = 5;

        echo "<br>Paso 2: Calcular area y columen:";
        $area = $ancho * $longitud;
        $volumen = $longitud * $ancho * $altura;

        echo "<br>Paso 3: Guardar codigo lab01.php";
        echo "<br>Paso 4: Resultado:";
        echo "<br>El área de la tapa de la caja es: $area";
        echo "<br>El volumen de la caja es: $volumen";


    ?>

</body>
</html>