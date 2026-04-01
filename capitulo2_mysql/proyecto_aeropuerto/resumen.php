<?php
include("includes/header.php");
include("config/db.php");

echo "<div class='container'><div class='form-card'><h2>Resumen de quejas</h2>";

echo "<p>
Todos los días hacemos lo que esta a nuestro alcance para hacer que un residente quede satisfecho.
¿Tiene alguna queja sobre ruido, contaminación del medio ambiente o seguridad?
Por favor, use nuestra línea directa para reportar dicha queja.
</p>";

$result = $conn->query("SELECT * FROM quejas");

echo "<div class='table-wrapper'><table>
<tr>
<th>Número</th>
<th>Código Postal</th>
<th>Fecha</th>
<th>Hora</th>
<th>Tipo</th>
</tr>";

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['codigo_postal']}</td>
        <td>{$row['fecha']}</td>
        <td>{$row['hora']}</td>
        <td>{$row['tipo']}</td>
    </tr>";
}

echo "</table></div></div></div>";

include("includes/footer.php");
?>