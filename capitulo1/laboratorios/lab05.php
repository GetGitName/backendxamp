<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 5 Formulario</title>
</head>
<body>
    <h3><strong>Formulario de inscripción</strong></h3>
    <form action="lab05procesamiento.php" method="post">
        <input type="text" name="apellido" placeholder="Apellido" size=30> <br>
        <input type="text" name="nombre" placeholder="Nombre" size=30><br>
        <input type="text" name="direccion" placeholder="Dirección" size=30><br>
        <input type="text" name="cp" placeholder="Código Postal" size=30><br>
        <input type="text" name="ciudad" placeholder="Ciudad" size=30 list="ciudad"><br>
        <datalist id="ciudad">
            <option value="Aguascaliente"></option>
            <option value="Durango"></option>
            <option value="Guadalajara"></option>
            <option value="Leon"></option>
            <option value="Monterrey"></option>
        </datalist>
        <input type="email" name="correo" placeholder="Correo Électronico" size=30><br>
        <h4><strong>Seleccione curso</strong></h4>
        <input type="radio" name="curso" value="I">Informática<br>
        <input type="radio" name="curso" value="H">Historia<br>
        <input type="radio" name="curso" value="E">Economía<br>
        <input type="submit" value="Enviar" name="enviar">
        <input type="submit" value="Reiniciar" name="reiniciar">
    </form>
</body>
</html>