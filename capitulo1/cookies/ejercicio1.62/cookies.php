<?php 



    //echo "<br> Crear la cookie usuario";
    //setcookie("usuario", "sancrito", mktime(0,0,0,1,1,2050));

    ob_start();
    echo "<br> Crear la cookie usuario";
    setcookie("usuario", "sancrito", mktime(0,0,0,1,1,2050));
    $usuario = $_COOKIE['usuario'];
    echo "<br>Nombre del usuario es: " . $usuario;
    print_r($_COOKIE);
    ob_end_flush();
?>