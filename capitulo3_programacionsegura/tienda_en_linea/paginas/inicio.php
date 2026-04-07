<div class="contenido">
    <form action="" name="entrar" method="post" enctype="multipart/form-data">
        <p id="titulo_de_pagina">Iniciar</p>
        <input type="email" required name="correo_electronico" placeholder="por@ejemplo.com">
        <input type="password" required name="contrasenia" placeholder="contraseña">
        <div class="contenedorIcon">
            <input type="submit" class="icon" id="enviar" name="enviar" value="&rarr;">
        </div>
        <a href="registrar.php">Registrate</a>
        <a href="solicitar_contrasenia.php"> Olvidaste tu contraseña</a>
    </form>
</div>
<?php
if(isset($_POST['enviar'])){
    $aviso = "";
    $correo_electronico = htmlspecialchars($_POST['correo_electronico']);
    $contrasenia = htmlspecialchars($_POST['contrasenia']);

    try {
        
        $sql = "SELECT * FROM cliente WHERE correo_electronico = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute(array($correo_electronico));
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if($resultado){
            
            $contraseniaEnBaseDeDatos = $resultado['contrasenia'];            
            $rol = $resultado['rol'];            
            
            if(password_verify($contrasenia, $contraseniaEnBaseDeDatos)){
                
                $_SESSION['ID'] = session_id();
                $_SESSION['NUMERO_DE_CLIENTE'] = $resultado['numero_de_cliente'];
                $_SESSION['USUARIO'] = $resultado['nombre'];
                $_SESSION['ROL'] = $rol;
                $_SESSION['CORREO'] = $resultado['correo_electronico'];
                $_SESSION['STATUS'] = "ACTIVA";

                if($rol == 0){
                    echo "<script>location.href='index.php?pagina=tienda';</script>";
                } else if($rol == 1){
                    echo "<script>location.href='index.php?pagina=mostrar_albumes';</script>";
                }
            
            } else {
                $aviso .= "Autenticación incorrecta<br>";
            }
        } else {            
            $aviso .= "Autenticación incorrecta<br>";
        }
    } catch (Exception $e) {    
        echo $e->getMessage();
    }
    
    echo "<div id='aviso'>".$aviso."</div>";
    
}

?>