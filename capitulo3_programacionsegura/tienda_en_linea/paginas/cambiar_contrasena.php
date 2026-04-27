<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar contraseña</title>
    <link rel="stylesheet" href="../estilos/tienda.css">
</head>
<body>
    <div class="contenido">
        <form name="formulario" method="post" enctype="multipart/form-data" action="" onsubmit="
            if(document.formulario.contrasena1 !== document.formulairo.contrasena2){
                alert('Las contraseñas no coinciden');
                return false;
            }
        ">
            <p id="titulo_de_pagina">Cambiar contraseña</p>
            <input required type="email" name="correo_electronico" placeholder="por@ejemplo.com"><br>
            <input type="password" required name="contrasena1" placeholder="Nueva contraseña"><br>
            <input type="password" required name="contrasena2" placeholder="Repetir nueva contraseña">            
            <br>
            <div class="contenedorIcon">
                <input type="submit" class="icon" id="enviar" name="enviar" value="&rarr;">
            </div>
            <!--a href="../index.php">Regresar</a-->
        </form>
    </div>
</body>
</html>
<?php

    if(isset($_POST['enviar'])) {
        if(isset($_GET['fichaToken']) && isset($_GET['marcaTemporal'])) {
            $fichaToken = $_GET['fichaToken'];
            $marcaTemporal = $_GET['marcaTemporal'];

            $mensaje="";
            $correoElecrtonico = htmlspecialchars($_POST['correo_electronico']);
            $contrasena = htmlspecialchars($_POST['contrasena1']);
            $contrasenaCifrada=password_hash($contrasena, PASSWORD_DEFAULT);

            include("../conexion.php");
            $sql = "SELECT * FROM cliente WHERE correo_electronico = ? AND ficha_token = ?";
            $stmt = $conexion->prepare($sql);

            try {
                $stmt->execute(array($correoElecrtonico, $fichaToken));
                $stmt = $stmt->fetch(PDO::FETCH_ASSOC);
                if($stmt) {
                    $marcaTemporal2 = new DateTime("now");                    
                    $marcaTemporal2 = $marcaTemporal2->getTimestamp();
                    if(($marcaTemporal2 - $marcaTemporal) < 43200) {
                        $query = "UPDATE cliente SET contrasena = ? WHERE correo_electronico = ?";
                        $stmt = $conexion->prepare($query);
                        $stmt->execute(array($contrasenaCifrada, $correoElecrtonico));
                        if($stmt){
                            echo "<script>alert('Contraseña cambiada exitosamente'); location.href='../index.php';</script>";
                        } else {
                            echo "<script>alert('Error al cambiar la contraseña'); location.href='../index.php';</script>";
                        }
                    }
                } else {
                    echo "<div id='aviso'>Enlace inválido. Por favor, solicita un nuevo enlace para cambiar tu contraseña.</div>";
                }
            }catch(PDOException $e) {
                echo $e->getMessage();
                $mensaje = "Error al verificar el token de restablecimiento<br>" . $e->getMessage();
            }
        } else {
            echo "<div id='aviso'>Enlace inválido. Por favor, solicita un nuevo enlace para cambiar tu contraseña.</div>";
        }
    }
?>