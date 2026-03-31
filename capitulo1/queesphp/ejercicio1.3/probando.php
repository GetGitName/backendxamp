<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitulo 1 - Ejercicio 1.3</title>
</head>
<body>
    <?php
        echo "<h1>Paso 1: Indica los nombres de vaibales correctos</h1>";
        echo "<br>nombre_variable - incorrecto no inicia con $";
        echo "<br>\$auto2 - correcto";
        echo "<br>\$auto´s - incorrecto contiene caraceres especiales";
        echo "<br>\$auto/subdivision - incorrecto contiene caraceres especiales";
        echo "<br>\$casa&jardin - incorrecto contiene caracteres reservados";
        echo "<br>\$naw - correcto";
        echo "<br>\$n-a-w - correcto";
        echo "<br>\$n_a_w - correcto";
        echo "<br>\$22 - incorrecto no inicia con una letra";
        echo "<br>\$$ - incorrecto contiene caracter reservado";

        echo "<br><br><h1>Paso 2: Declara 3 variables</h1>";

        $nombre = "Carlos";
        $edad = 16;
        $en_edad_escolar = true;

        $edad = $edad + 2;

    ?>
</body>
</html>