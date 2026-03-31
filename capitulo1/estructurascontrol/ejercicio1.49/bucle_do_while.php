<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle do while</title>
</head>
<body style="font-family: Verdana; font-size:12px;">
    <h3>Ejemplo de buelce-do-while</h3>
    <?php
    
        echo "<br>Calcule el saldo siempre que el mismo sea menor a 2000";
        $saldo = "2100";
        $renta = 0.1;
        $mes = 1;
        echo "<br>Saldo inicial es: " . $saldo;
        echo "<br>INICIO...";
        do {
            $saldo = $saldo + ($saldo * $renta);
            echo "<br>En el mes: $mes su saldo es: ". number_format($saldo, 2);
        } while ($saldo < 2000);
        echo "<br>TERMINACIÓN";

    ?>
</body>
</html>