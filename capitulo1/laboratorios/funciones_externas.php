<?php 

    function descuento(){
        $descuento = 0;
        if( isset($_POST['estudiante']) ) $descuento = $descuento + 15;
        if( isset($_POST['cliente']) ) $descuento = $descuento + 10;
        return($descuento);
    }

    function costoDeServicios($medioDePago) {
        $costoDeServicio = 0;
        switch ($medioDePago) {
            case 'Visa':$costoDeServicio = 10; break;
            case 'Mastercard': $costoDeServicio = 12; break;
            case 'Paypal': $costoDeServicio = 14; break;
            case 'Ideal': $costoDeServicio = 16; break;
            default: $costoDeServicio = "Por favor seleccione un medio de pago."; break;
        }
        return($costoDeServicio);
    }

    function facturacion($medioDePago){

        $facturacionHTML = "";
        $genero = $_POST['genero'];
        $artista = $_POST['artista'];
        $album = $_POST['album'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $importe = 0;
        $total = 0;
        $descuento = 0;
        $costoServicio = 0;
        $tAPagar = 0;

        $facturacionHTML = 
        "<table border='1'>
            <thead>
                <tr>
                    <th>Género</th>
                    <th>Artista</th>
                    <th>Álbum</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Importe</th>
                </tr>
            </thead>
            <tbody>";
                
            

        for ($contador=0; $contador < sizeof($_POST['codigo']); $contador++) {  
            
            $importe = $precio[$contador]*$cantidad[$contador];
            $total = $total + $precio[$contador];
            $facturacionHTML = $facturacionHTML.
            "
                <tr>
                    <td>$genero[$contador]</td>
                    <td>$artista[$contador]</td>
                    <td>$album[$contador]</td>
                    <td>$cantidad[$contador]</td>
                    <td>$precio[$contador]</td>
                    <td>".number_format($importe,2)."</td>
                </tr>
            ";            
        }

        $descuento = (descuento()/100)*$total;
        $costoServicio = costoDeServicios($medioDePago);

        $tAPagar = ($total-$descuento) + $costoServicio;

        $facturacionHTML = $facturacionHTML.
        "
        </tbody>
            <tfoot>
                <tr>
                    <td colspan='5'>Total</td>
                    <td>".number_format($total,2)."</td>
                </tr>
                <tr>
                    <td colspan='5'>Descuento</td>
                    <td>".number_format($descuento,2)."</td>
                </tr>
                <tr>
                    <td colspan='5'>Costo de servicio</td>
                    <td>".number_format($costoServicio,2)."</td>
                </tr>
                <tr>
                    <td colspan='5'>Total a pagar</td>
                    <td>".number_format($tAPagar,2)."</td>
                </tr>
            </tfoot>
        </table>
        ";
        return($facturacionHTML);
    }

?>