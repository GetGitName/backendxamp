<?php

    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="" name="login" method="post" >
        <input type="text" name="usr" placeholder="Nombre de usaurio" >
        <input type="submit" value="Enviar" name="enviar" >
    </form>

    <?php
    echo "<p>" . $_POST['enviar'] ."</p>";
    echo "<p> isset - " . isset($_POST['enviar']) ."</p>";
    print_r($_POST);
        if(isset($_POST['enviar'])) {
            echo "<br> Cookies";
            $usuario = $_POST['usr'];
            bienvenido($usuario);
        }

        function bienvenido($usuario){
            if(isset($_COOKIE['usuario'])){
                echo "<br>Hola $usuario bienvenido de nuevo.";
                 
            } else {
                echo "<br>Hola $usuario eres el usuario mas reciente";
                setcookie("usuario", $usuario, mktime(0,0,0,1,1,250));
            }
        }

    ?>


</body>
</html>

<?php

    ob_end_flush();

?>