<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle foreach</title>
</head>
<body>
    <h3>Ejemplo de bucle-foreach</h3>
    <?php 

        $colores["naranja"] = "orange";
        $colores["rojo"] = "red";
        $colores["violeta"] = "violet";
        $colores["verde"] = "green";
        $colores["azul"] = "blue";
        $colores["negro"] = "yellow";

        foreach ($colores as &$color) {
            if($color == 'yellow') $color = "black";
            echo "<br><font color=$color> este texto se imprime en color ". array_search($color, $colores) ."</font>";
        }

    ?>
</body>
</html>