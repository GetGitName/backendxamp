<?php

    echo "Ejercicio 23: <br><br>";

    /**
     * Podemos recorrer los elementos de un arreglo de dos dimensiones
     */

    $libros = array(
        array(
            "titulo" => "El Quijote",
            "autor" => "Miguel de Cervantes",
            "año" => 1605
        ),
        array(
            "titulo" => "Cien Años de Soledad",
            "autor" => "Gabriel García Márquez",
            "año" => 1967
        ),
        array(
            "titulo" => "La Sombra del Viento",
            "autor" => "Carlos Ruiz Zafón",
            "año" => 2001
        )
    );

    array_walk_recursive($libros, function($valor, $clave) {
        echo "$clave: $valor<br>";
    });

?>