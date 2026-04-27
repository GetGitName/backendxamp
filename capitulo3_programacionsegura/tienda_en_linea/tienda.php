<?php

    if(isset($_SESSION['ID']) && $_SESSION['STATUS'] != "ACTIVA") {
        echo "<script>alert('Tu cuenta no está autorizada para ver esta página. Por favor, contacta al administrador.'); location.href='index.php';</script>";
    }

?>