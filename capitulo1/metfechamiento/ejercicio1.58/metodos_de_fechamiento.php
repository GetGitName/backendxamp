<?php

    //Formato
    $formateo = '%A %d %B %Y %H:%M:%S';
    $fecha_formateada = strftime($formateo);
    echo "<br>Fecha formateada: " . $fecha_formateada;

    //tiempor local
    setlocale(LC_TIME, "es_MX.utf8");
    $mex = strftime($formateo);
    echo "<br>Fecha formateada en español: " . $mex;

    $hoy = new DateTime("now");
    echo "<br>Segundos transcurridos dede 01/01/1970: " . $hoy->getTimestamp();

    $undia = 86400;
    $inicio2000 = DateTime::createFromFormat("d/m/Y", "1/1/2000");
    $fin2000 = DateTime::createFromFormat("d/m/Y", "31/12/2000");
    $inicio = $inicio2000->getTimestamp();
    $fin = $fin2000->getTimestamp();
    $diasEnEl2000 = ($fin - $inicio)/$undia;
    echo "<br>El año 2000 contó $diasEnEl2000 días."
?>