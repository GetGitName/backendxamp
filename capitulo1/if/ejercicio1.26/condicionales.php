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

?>