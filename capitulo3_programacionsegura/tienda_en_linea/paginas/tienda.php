<?php

    if(!isset($_SESSION['ID']) && $_SESSION['STATUS'] != "ACTIVA") {
        echo "<script>alert('Tu cuenta no está autorizada para ver esta página. Por favor, contacta al administrador.');location.href='index.php';</script>";
    }

    /*try {
        $sql = "SELECT numero_de_album, titulo, artista, genero, precio, existencias, portada FROM album LIMIT 3";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error de conexión: " . $e->getMessage();
    }*/

?>

    <script src="javascript/tienda.js"></script> 
    <div class="contenido">
        <form name="busqueda" id="busqueda" action="" method="POST">
            <div style="background-color: #C2F98E; height: 25px; margin-top: 5px; padding: 0;">
                <input type="text" style="float:left; width:70%;" id="patron" name="patron" placeholder="Buscar álbumes..."/>
                <input type="submit" style="float:none; width:10%;font-size:1.2rem;" id="buscar" name="buscar" value="&#128270;"/>
                <br/>
            </div>
        </form>
    </div>
    <div class="contenido">
        <form name="oferta" id="oferta" action="index.php?pagina=ordenar" method="post">
            <?php
                if(isset($_POST['buscar']) && !empty($_POST['patron'])) {
                    $patron = htmlspecialchars($_POST['patron']);
                    $sql = "SELECT * FROM album WHERE titulo LIKE '%$patron%' OR artista LIKE '%$patron%' OR genero LIKE '%$patron%'";
                } else {
                    $sql = "SELECT * FROM album LIMIT 3";
                }
                $stmt = $conexion->prepare($sql);
                $stmt->execute();
                $albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $iteracion = 0;
                foreach ($albums as $album) {

                    echo "<img width='100px' src='imagenes/" . $album['portada'] . "' alt='Portada de " . htmlspecialchars($album['portada']) . "'/>";
                    echo "<input type='hidden' name='numero_de_album[$iteracion]' id='numero_de_album[$iteracion]' value='" . htmlspecialchars($album['numero_de_album']) . "'/>";
                    echo "<input type='hidden' name='titulo[$iteracion]' id='titulo[$iteracion]' value='" . htmlspecialchars($album['titulo']) . "'/>";
                    echo "<input type='hidden' name='artista[$iteracion]' id='artista[$iteracion]' value='" . htmlspecialchars($album['artista']) . "'/>";
                    echo "<input type='hidden' name='genero[$iteracion]' id='genero[$iteracion]' value='" . htmlspecialchars($album['genero']) . "'/>";
                    echo "<input type='hidden' name='precio[$iteracion]' id='precio[$iteracion]' value='" . htmlspecialchars($album['precio']) . "'/>";
                    echo "<br> Título: " . htmlspecialchars($album['titulo']) . " Precio: $" . number_format($album['precio'], 2, ',', '.');
                    echo "<br> Existencias: " . htmlspecialchars($album['existencias']);
                    echo "<br> Cantiadad a ordenar:";                    
                    echo "<input class='cantidad' style='width:10%;' value='0' type='text' name='cantidad[$iteracion]' id='cantidad[$iteracion]' min='1' max='" . htmlspecialchars($album['existencias']) . "' value='1'/>";
                    echo "<hr/>";
                    $iteracion++;
                }
                echo "<input type='hidden' name='iteracion' id='iteracion' value='" . $iteracion . "'/>";
            ?>
            <input type="checkbox" name='botonDeCanasta' id="botonDeCanasta" onclick="javascript:mostrarCanasta();" class="icon" value="&#128717;"/>
            <label for="botonDeCanasta" class="icon">&#128717;</label>
            <br><br>
            <div class="contenedorIcon">
                <input type="submit" name="enviar" id="enviar" class="icon" value="&rarr;"/>
            </div><br>
        </form>
    </div>
