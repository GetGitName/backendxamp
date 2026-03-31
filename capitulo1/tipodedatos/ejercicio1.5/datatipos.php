<?php

    echo "<br>======= Ejercicio 1.4 =======<br>";
    $nombre = "Carlos";
    $direccion = "Calle A No. 111";
    $ciudad = "Viejo Leon";

    $datos = $nombre." ".$direccion." ".$ciudad;
    echo "Datos: $datos";

    echo "<br>======= Ejercicio 1.5 =======<br>";

    echo <<<TextoLargo
    <br> Salario asignado para $nombre: 2000 euros
    <br> Mes: Noviembre
    <br> Año: 2020
    TextoLargo;
?>