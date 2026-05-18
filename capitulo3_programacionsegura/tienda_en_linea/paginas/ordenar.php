<?php

    if(isset($_SESSION['ID']) && $_SESSION['STATUS'] != 'ACTIVA'){    
        echo "<script>alert('No estas autorizado para ver esta página');location.href = '../index.php';</script>";
    }
    echo "Se mando llamar el script de ordenar";
    if(isset($_POST['enviar'])){
        //Crear orden
        echo "se presiono enviar ";
        $fehca = new DateTime();
        $fecha = date_format($fehca, "c");
        $sql = "INSERT INTO orden (numero_de_orden,numero_de_cliente, fecha) VALUES (?, ?, ?)";
        
        $stmt = $conexion->prepare($sql);
        $data = array(null, $_SESSION['NUMERO_DE_CLIENTE'], $fecha);

        try {
            $stmt->execute($data);
            $idOrden = $conexion->lastInsertId();
            echo "<script>alert('Orden creada con éxito. ID de la orden: " . $idOrden . "');</script>";
        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            echo "<script>alert('Error al crear la orden. Por favor, inténtalo de nuevo.');location.href = 'index.php?pagina=tienda';</script>";            
        }

        //Crear artículos de la orden
        $numeroDeOrden = $conexion->lastInsertId();
        for($x=0;$x<$_POST['iteracion'];$x++){
            
            $cantidad = htmlspecialchars($_POST['cantidad'][$x]);
            if($cantidad == 0) continue;

            $numeroDeAlbum = htmlspecialchars($_POST['numero_de_album'][$x]);
            $precioVenta = $_POST['precio'][$x];
            $sql = "INSERT INTO articulo (numero_de_articulo, numero_de_orden, numero_de_album, precio_de_venta, cantidad) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);
            $data = array(null, $numeroDeOrden, $numeroDeAlbum, $precioVenta, $cantidad);

            try {
                $stmt->execute($data);
                echo "<script>alert('Artículo agregado a la orden: " . htmlspecialchars($numeroDeAlbum) . "');location.href = 'index.php?pagina=tienda';</script>";
            } catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
                echo "<script>alert('Error al agregar el artículo a la orden. Por favor, inténtalo de nuevo.');location.href = 'index.php?pagina=tienda';</script>";            
            }

        }
    }

?>