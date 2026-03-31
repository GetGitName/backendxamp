<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Canasta</title>
    <style>
        .album {
            clear: left;
            width: 100%;
        }
        .portada {
            clear: left;
            float: left;
        }
        .datos {
            float:left;
            padding-left: 20px;
        }
        .descuento {
            clear: left;
        }
    </style>
</head>
<body style="font-family:Verdana; font-size:12px;">

<h3>Mi canasta</h3>
<form action="" name="albumes" method="post">
    <div class="album">
        <div class="portada">
            <img src="imagenes/evora.jpg" width="50px" alt="Mi canasta">
        </div>
        <div class="datos">
            Cesaria Evora "Em Um Concerto" Precio: $99
            <input type="hidden" name="codigo[0]" value="001">
            <input type="hidden" name="artista[0]" value="Cesaria">
            <input type="hidden" name="album[0]" value="Em Um Concerto">
            <input type="hidden" name="precio[0]" value="$99">
            <input type="hidden" name="genero[0]" value="World"><br>
            Cantidad a ordenar:
            <input type="text" name="cantidad[0]" size="2" maxlength="3" value="0" style="background-color: #f8ce6c;">
        </div>
    </div>
    <div class="descuento">
        <br>
        <hr>
        Descuento: <br>
        <input type="checkbox" name="estudiante" value="15" id="">
        Estudiante: 15% <br>
        <input type="checkbox" name="cliente" value="10" id="">
        Estudiante: 10% <br>
        <input type="submit" value=" Ordenar " width="300px" name="enviar">
        <hr>
    </div>
</form>

<?php

    if(isset($_POST["enviar"])){
        if($_POST["cantidad"][0] > 0){
            $descuento = 0;

            if(isset($_POST["estudiante"])) {
                $descuento = $descuento + 10;
            }

            if(isset($_POST["estudiante"])) {
                $descuento = $descuento + 15;
            }

            echo "<br>Discos ordenados: " . $_POST["cantidad"][0];
            echo "<br>Descuento: " . $descuento . "%";
        } else {
            echo  "<br>La cantidad a ordenar debe de ser mayor a 0.";
        }
    }

?>

</body>
</html>