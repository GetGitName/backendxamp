<?php

    function imprimir($elemento, $indice){
        if($indice == "precio"){
            echo "<br>$indice: $elemento";
        }
    }

    $libros = 
    array(
        array("titulo" => "Stoner", "autor" => "Jhon Williams", "genero" => "ficcion", "precio" => 19.99),
        array("titulo" => "El circulo", "autor" => "Dave Eggers", "genero" => "ficcion", "precio" => 22.50),
        array("titulo" => "Rayuela", "autor" => "Julio Cortazar", "genero" => "ficcion", "precio" => 25.50)
    );
    array_walk_recursive($libros, 'imprimir');


?>