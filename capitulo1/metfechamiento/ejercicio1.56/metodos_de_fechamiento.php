<?php

    //Formato
    $formateo = '%A %d %B %Y %H:%M:%S';
    $fecha_formateada = strftime($formateo);
    echo "<br>Fecha formateada: " . $fecha_formateada;

    //tiempor local
    setlocale(LC_TIME, "es_MX.utf8");
    $mex = strftime($formateo);
    echo "<br>Fecha formateada en español: " . $mex;
?>