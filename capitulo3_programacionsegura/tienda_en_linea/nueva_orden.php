<?php
$numeroDeOrden = 12345;
$cliente = "cliente-x";
$correoMensaje = "Estimado $cliente,\nGracias por su pedido. Esta orden sera enviada dentro de dos días.\n\nHaga clic aqui para ver su factura.\n\nAtentamente,\n\nLa tienda-x";
$facturaUrl = "factura.php?numeroDeOrden=$numeroDeOrden";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva orden</title>
</head>
<body>
    <h1>Correo al cliente</h1>
    <p>El correo enviado al cliente sería:</p>
    <pre><?php echo htmlspecialchars($correoMensaje); ?></pre>
    <p>Enlace de factura:</p>
    <p><a href="<?php echo htmlspecialchars($facturaUrl); ?>"><?php echo htmlspecialchars($facturaUrl); ?></a></p>
    <p>Haga clic en el enlace anterior para ver la factura.</p>
</body>
</html>