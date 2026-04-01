<?php
include("includes/header.php");
include("config/db.php");

echo "<h2>Resumen de quejas</h2>";

echo "<p>
Todos los días hacemos lo que esta a nuestro alcance para hacer que un residente quede satisfecho.
¿Tiene alguna queja sobre ruido, contaminación del medio ambiente o seguridad?
Por favor, use nuestra línea directa para reportar dicha queja.
</p>";

$result = $conn->query("SELECT * FROM quejas");

echo "<table>
<tr>
<th>Número</th>
<th>Código Postal</th>
<th>Fecha</th>
<th>Hora</th>
<th>Tipo</th>
</tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['codigo_postal']}</td>
        <td>{$row['fecha']}</td>
        <td>{$row['hora']}</td>
        <td>{$row['tipo']}</td>
    </tr>";
}

echo "</table>";

include("includes/footer.php");
?>