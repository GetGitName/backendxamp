<?php 



    //echo "<br> Crear la cookie usuario";
    //setcookie("usuario", "sancrito", mktime(0,0,0,1,1,2050));

    ob_start();
    echo "<br> Crear la cookie usuario";
    setcookie("usuario", "sancrito", mktime(0,0,0,1,1,2050));
    $usuario = $_COOKIE['usuario'];
    echo "<br>Nombre del usuario es: " . $usuario . "<br>";
    print_r($_COOKIE);
    ob_end_flush();

    if(isset($_COOKIE["ID"])){
        echo "<br>Borrar la cookie ID<br>";
        setcookie("ID", "", time()-36);
    } else {
        echo "<br>Crear la cookie ID<br>";
        setcookie("ID", "12345", mktime(0,0,0,1,1,2050));
    }
?>