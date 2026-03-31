<?php

    echo "<br><br><br>======= Ejercicio 1.4 =======<br><br><br>";
    $nombre = "Carlos";
    $direccion = "Calle A No. 111";
    $ciudad = "Viejo Leon";

    $datos = $nombre." ".$direccion." ".$ciudad;
    echo "Datos: $datos";

    echo "<br><br><br>======= Ejercicio 1.5 =======<br><br><br>";

    echo <<<TextoLargo
    <br> Salario asignado para $nombre: 2000 euros
    <br> Mes: Noviembre
    <br> Año: 2020
    TextoLargo;

    echo "<br><br><br>======= Ejercicio 1.6 =======<br><br><br>";

    $dolares = 999.99;
    $tipoCambio = 1.2;
    $euros = $dolares * $tipoCambio;

    echo "El importe en euros es ".round($euros,2);

?>