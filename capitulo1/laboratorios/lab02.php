<h3>php lab 02</h3>
<?php

    $alumno = "Karim";
    $geometria = 8.5;
    $ingles = 7.7;
    $matematica =6.7;
    $programacion = 8.5;
    $baseDeDatos = 9.4;

    $alumno2 = "Laura";
    $geometria2 = 8.9;
    $ingles2 = 8.9;
    $matematica2 = 9.7;
    $programacion2 = 9.5;
    $baseDeDatos2 = 9.2;

    $promedio1 = round(($geometria+$ingles+$matematica+$programacion+$baseDeDatos)/5,1);
    $promedio2 = round(($geometria2+$ingles2+$matematica2+$programacion2+$baseDeDatos2)/5,1);

    $promedioGrupo = ($promedio1+$promedio2)/2;

    echo("
    <table border='1'>
        <caption>
            <strong>Boleta de Calificaciones-------------</strong>
        </caption>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Geometría</th>
                <th>Inlés</th>
                <th>Matemáticas</th>
                <th>Programación</th>
                <th>Base de datos</th>
                <th>Promedio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>$alumno</td>
                <td>$geometria</td>
                <td>$ingles</td>
                <td>$matematica</td>
                <td>$programacion</td>
                <td>$baseDeDatos</td>
                <td>$promedio1</td>
            </tr>
            <tr>
                <td>$alumno2</td>
                <td>$geometria2</td>
                <td>$ingles2</td>
                <td>$matematica2</td>
                <td>$programacion2</td>
                <td>$baseDeDatos2</td>
                <td>$promedio2</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan='6'>Promedio del grupo</td>
                <td>$promedioGrupo</td>
            </tr>
        </tfoot>
    </table>
    ");

?>