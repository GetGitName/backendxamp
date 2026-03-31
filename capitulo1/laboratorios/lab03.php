<?php

    function imprimirArreglo($elemento, $indice){
        echo "<br> $indice: $elemento";
    }

    $playlist = array(
        array("genero" => "hiphop", "artista" => "Jhon Williams", "titulo" => "My Girl"),
        array("genero" => "Jazz", "artista" => "Jhon Coltrane", "titulo" => "New York"),
        array("genero" => "hiphop", "artista" => "Shakira", "titulo" => "Obsesión")
    );

    $hits = array(
        array("genero" => "hiphop", "artista" => "Ludacris", "titulo" => "What"),
        array("genero" => "Jazz", "artista" => "Betoben", "titulo" => "La mejor")
    );

    $miLista = array_merge($playlist,$hits);
    array_walk_recursive($miLista, 'imprimirArreglo')

?>