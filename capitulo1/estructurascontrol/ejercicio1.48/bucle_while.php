<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle While</title> 
</head>
<body style="font-family: Verdana;font-size:12px;">
    <h3>Ejemplo del bucle-while</h3>
    <?php

        echo "<br> Siempre qe nuestro saldo sea menor que 2000, queremos que el bucle-while calcule nuestro saldo mensual.";
        $saldo = 750;
        $renta = 0.1;
        $mes = 1;
        echo "<br>Saldo in icial es: " . $saldo;
        echo "<br>INICIO...";
        while ($saldo < 2000) {
            $saldo = $saldo + ($saldo * $renta);
            echo "<br>En el mes: $mes su saldo es: " . number_format($saldo,2);
            $mes++;
        }
        echo "<br> Nuestro saldo excede los  2000. TERMINACIÖN";

    ?>
</body>
</html>