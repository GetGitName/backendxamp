<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blucle-for</title>
</head>
<body>
    <h3>Ejemplo del bucle-for</h3>
    <?php

        echo "Deseamos que el blucle-for ejecute diez iteraciones<br>";
        echo "Comenzando desde el INICIO...<br>";
        for ($contador=0; $contador < 10; $contador++) { 
            echo "Esta es la iteración $contador <br>";
        }
        echo "TERMINACIÓN...";


    ?>
</body>
</html>