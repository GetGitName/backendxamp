<?php

if(isset($_POST["enviar"])){
    if(empty($_POST['apellido'])){
        echo "Por favor introduzca su Apellido";
    } elseif(empty($_POST['nombre'])) {
        echo "Por favor introduzca su Nombre";
    } elseif(empty($_POST['direccion'])) {
        echo "Por favor introduzca su Dirección";
    } elseif(empty($_POST['cp'])) {
        echo "Por favor introduzca su Código Postal";
    } elseif(empty($_POST['ciudad'])) {
        echo "Por favor seleccione su Ciudad";
    } elseif(empty($_POST['correo'])) {
        echo "Por favor introduzca su Correo électronico";
    } else {
        
        $apellido = $_POST["apellido"];
        $nombre = $_POST["nombre"];
        $direccion = $_POST["direccion"];
        $cp = $_POST["cp"];
        $ciudad = $_POST["ciudad"];
        $correo = $_POST["correo"];
        
        
        if(isset($_POST["curso"])){
            $curso = $_POST["curso"];
            echo "<h3><strong>Datos de inscripicón<strong></h3><br>";
            echo "<strong>Apellido: $apellido<strong><br>";
            echo "<strong>Nombre: $nombre<strong><br>";
            echo "<strong>Dirección: $direccion<strong><br>";
            echo "<strong>Código Postal: $cp<strong><br>";
            echo "<strong>Ciudad: $ciudad<strong><br>";
            echo "<strong>Correo: $correo<strong><br>";
            if($curso == "I"){
                $curso = "Informatica";
                echo "<br> El curso de informatica esta lleno. Selecciona otro curso";
            } elseif($curso == "H"){
                $curso = "Historia";
                echo "Usted se ha inscrito en el siguiente curso: $curso<br>";
            } elseif($curso == "E"){
                $curso = "Economía";
                echo "Usted se ha inscrito en el siguiente curso: $curso<br>";
            }
            
        } else {
            echo "Por favor seleccione un curso<br>";
        }

    }
}

?>