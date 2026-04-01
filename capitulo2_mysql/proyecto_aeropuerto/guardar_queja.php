<?php
include("config/db.php");

$cp = $_POST['cp'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];

$fecha = date("Y-m-d");
$hora = date("H:i:s");

$sql = "INSERT INTO quejas (codigo_postal, tipo, descripcion, fecha, hora)
        VALUES (:cp, :tipo, :descripcion, :fecha, :hora)";

try {
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':cp' => $cp,
        ':tipo' => $tipo,
        ':descripcion' => $descripcion,
        ':fecha' => $fecha,
        ':hora' => $hora
    ]);
    echo "Queja registrada correctamente <br><a href='resumen.php'>Ver resumen</a>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>