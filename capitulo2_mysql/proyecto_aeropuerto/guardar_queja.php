<?php
include("config/db.php");

$cp = $_POST['cp'];
$tipo = $_POST['tipo'];
$descripcion = $_POST['descripcion'];

$fecha = date("Y-m-d");
$hora = date("H:i:s");

$sql = "INSERT INTO quejas (codigo_postal, tipo, descripcion, fecha, hora)
        VALUES ('$cp','$tipo','$descripcion','$fecha','$hora')";

if ($conn->query($sql) === TRUE) {
    echo "Queja registrada correctamente <br><a href='resumen.php'>Ver resumen</a>";
} else {
    echo "Error: " . $conn->error;
}
?>