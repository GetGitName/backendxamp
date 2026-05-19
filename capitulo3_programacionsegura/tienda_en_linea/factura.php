<?php
$numeroDeOrden = isset($_GET["numeroDeOrden"]) ? htmlspecialchars($_GET["numeroDeOrden"]) : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
</head>
<body>
    <h1>Factura</h1>
    <?php if ($numeroDeOrden !== null): ?>
        <p>Numero de orden: <strong><?php echo $numeroDeOrden; ?></strong></p>
    <?php else: ?>
        <p>No se recibio ningun numero de orden en la URL.</p>
    <?php endif; ?>
</body>
</html>
