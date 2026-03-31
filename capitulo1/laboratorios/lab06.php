<?php

    $carta = "
        Estimado <b> <<suscriptor>> </b>

        Usted ha recibido el último número de nuestra revista. <br>
        Como realmente queremos conservarlo con mucho gusto como suscriptor,
        ofrecemos un descuento atractivo y exclusivo: <b>usted paga
        <<descuento>> </b> en lugar de 65 pesos. <br><br>
        <i> ¡Aprovecha ahora la oferta! </i> <br><br>
        Un cordial saludo, <br>
        Sam Simon <br>
        Jefe de Redacción <br>
    ";

    $carta = str_replace("<<suscriptor>>", "Juan José Ramos", $carta);
    $carta = str_replace("<<descuento>>", "50", $carta);

    echo $carta;

?>