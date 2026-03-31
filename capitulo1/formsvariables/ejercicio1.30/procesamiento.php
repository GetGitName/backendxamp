<?php

if(isset($_POST["enviar"])){
    if(empty($_POST["nombre"])){
        echo "Favor de introducir su nombre";
    } else {
        $nombre = $_POST["nombre"];
        $idioma = $_POST["idioma"];
        if($idioma == "E"){
            echo "Buenoas días ".$nombre;
        } elseif($idioma == "I") {
            echo "Good morning ".$nombre;
        } elseif($idioma == "H") {
            echo "Goede morgen ".$nombre;
        } else {
            echo "Por favor seleccione un idioma";
        }
    }
}

?>