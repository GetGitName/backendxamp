<?php

    echo "<br> ----------- Ejercicio 7<br><br>";
    $articulos = [];
    $articulos[0] = "Libros";
    $articulos[1] = "CDs";
    $articulos[2] = "Revistas";
    $articulos[3] = "DVDs";

    echo "<br><br> ----------- Ejercicio 8 print_r()<br><br>";
    print_r($articulos);

    echo "<br><br> ----------- Ejercicio 9 var_dump()<br><br>";
    var_dump($articulos);

    echo "<br><br> ----------- Ejercicio 10 unset()<br><br>";
    unset($articulos[2]);
    print_r($articulos);

    $articulos[2] = "Revistas";

    echo "<br><br> ----------- Ejercicio 11 array_key_exists()<br><br>";
    $existencia = array_key_exists(1,$articulos);
    echo "Indice 1 en existencia?: $existencia<br><br>";

    echo "<br><br> ----------- Ejercicio 12 in_array()<br><br>";
    $existencia = in_array('Libros',$articulos);
    echo "Libros en existencia?: $existencia<br><br>";

    echo "<br><br> ----------- Ejercicio 13 array_search()<br><br>";
    $indice = array_search("DVDs",$articulos);
    echo "El indice de DVDs es: $indice<br><br>";
    

?>