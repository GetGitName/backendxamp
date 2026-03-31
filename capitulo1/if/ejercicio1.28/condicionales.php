<?php 

    echo "<br><br>----> Ejercicio 26 Condicionales if<br><br>";

    $horasLaboradas = 40;
    $tarifa = 15.00;
    $bono = 100;
    $bruto = $horasLaboradas * $tarifa;

    if($horasLaboradas <= 40){
        echo "Su salario bas es: $".$bruto;
        echo "<br>Su impuesto es: $".(0.40*$bruto);
    }

    echo "<br><br>----> Ejercicio 27 Condicionales if-elseif-else<br><br>";

    $horasLaboradas = 50;
    $tarifa = 15.00;
    $bono = 100;
    $bruto = $horasLaboradas * $tarifa;

    if($horasLaboradas <= 40){
        echo "Su salario bas es: $".$bruto;
        echo "<br>Su impuesto es: $".(0.40*$bruto);
    } elseif ($horasLaboradas > 40) {
        $bruto = $bruto + $bono;
        echo "Su salario bas es: $".$bruto;
        echo "<br>Su impuesto es: $".(0.45*$bruto);
    }

    echo "<br><br>----> Ejercicio 28 Condicionales operador ternario<br><br>";
    $horasLaboradas = 40;
    $impuesto = ($horasLaboradas<=40 ? "El impuesto es del 40%" : "El impuesto es del 45%");
    echo "Immpuesto: ".$impuesto;

?>