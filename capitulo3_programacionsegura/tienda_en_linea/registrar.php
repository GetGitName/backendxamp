<?php
    
    // Activar debugging en este archivo
    //ini_set('display_errors', 1);
    //error_reporting(E_ALL);
    
    include("registrar.html");
    include("funciones.php");
    include("conexion.php");
//echo "Registrar debugging activo    ";
    if(isset($_POST['enviar'])){

        $aviso = "";
        $nombre = htmlspecialchars($_POST['nombre']);
        $apellido = htmlspecialchars($_POST['apellido']);
        $nombreCompleto = $nombre . " " . $apellido;
        $direccion = htmlspecialchars($_POST['direccion']);
        $codigoPostal = htmlspecialchars($_POST['codigo_postal']);
        $ciudad = htmlspecialchars($_POST['ciudad']);
        $correo_electronico = htmlspecialchars($_POST['correo_electronico']);
        $contrasenia = htmlspecialchars($_POST['contrasenia']);
        $contraseniaCifrada = password_hash($contrasenia, PASSWORD_DEFAULT);

        // Confirmar si el correo electronico ya existe en la base de datos
        try {
            
            $sql = "SELECT * FROM cliente WHERE correo_electronico = ?";
            $stmt = $conexion->prepare($sql);
            $stmt->execute(array($correo_electronico));
            $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($resultado){
                $aviso .= "El correo electrónico ya está registrado<br>";
            } else {
                
                $sql = "INSERT INTO cliente (numero, nombre, apellido, direccion, codigo_postal, ciudad, correo_electronico, contrasena) VALUES (null, ?, ?, ?, ?, ?, ?, ?)";
                $stmt = $conexion->prepare($sql);

                try {
                    $stmt->execute(array($nombre, $apellido, $direccion, $codigoPostal, $ciudad, $correo_electronico, $contraseniaCifrada));                    
                    echo "<script>location.href='index.php?pagina=inicio';</script>";
                } catch (PDOException $e) {
                    echo $e->getMessage();
                    $aviso .= "Error al registrar el usuario<br>" . $e->getMessage();
                }
                $asunto = "Registro exitoso en Tu Tienda en Línea";
                $mensaje = "Hola $nombreCompleto, gracias por registrarte en nuestra tienda.";
                $resultado = enviarCorreo($correo_electronico, $nombreCompleto, $asunto, $mensaje);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $aviso .= "Error al verificar el correo electrónico<br>" . $e->getMessage();
        }

        echo "<div id='aviso'>".$aviso."</div>";
    }

?>