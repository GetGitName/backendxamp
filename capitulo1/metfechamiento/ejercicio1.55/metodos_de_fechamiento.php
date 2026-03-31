<?php

    //Formato
    $formateo = '%A %d %B %Y %H:%M:%S';
    $fecha_formateada = strftime($formateo);
    echo "<br>Fecha formateada: " . $fecha_formateada;
?>