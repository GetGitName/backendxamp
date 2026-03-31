<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="" name="destinos" method="post">
        <input type="text" name="ciudad" placeholder="Ciudad de destino" size=30 list="ciudad">
        <datalist id="ciudad">
            <option value="Aguascalientes"></option>
            <option value="Durango"></option>
            <option value="Guadalajara"></option>
            <option value="Leon"></option>
            <option value="Monterrey"></option>
        </datalist>
        <input type="submit" name="enviar" value=" Enviar " id="">
    </form>
</body>
</html>
<br><p>---------------------------------------------------------------------------------</p>
<?php 
    if (isset($_POST["enviar"])) {
        switch ($_POST['ciudad']) {
            case 'Aguascalientes':
                echo "<p>Viaje redondo desde $1500</p>";
                break;
            case 'Durango':
                echo "<p>Viaje redondo desde $1500</p>";
                break;
            case 'Guadalajara':
                echo "<p>Viaje redondo desde $1600</p>";
                break;
            case 'Leon':
                echo "<p>Viaje redondo desde $900</p>";
                break;
            case 'Monterrey':
                echo "<p>Viaje redondo desde $1900</p>";
                break;
            
            default:
                echo "<p>Seleccione un destino válid</p>";
                break;
        }
    }
?>