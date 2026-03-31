<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario ejercicio 29</title>
</head>
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: 12px;">
    <h3>Ejemplo de un formulario</h3>
    <form action="../ejercicio1.30/procesamiento.php" method="post">
        <input type="text" name="nombre" size=30 placeholder="Su nombre">
        <input type="hidden" name="idioma" value="false"> <br>
        Seleccione un idioma: 
        Español:<input type="radio" name="idioma" value="E">
        Holandes:<input type="radio" name="idioma" value="H">
        Ingles:<input type="radio" name="idioma" value="I">
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>