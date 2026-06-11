<?php
    require_once("../clases/SolucionPalabra.php");
    $objetoPalabra = new SolucionPalabra();
    $objetoPalabra->DefinirTexto($_POST["txt_Palabra"]);

    if(isset($_POST["btnPrimerDigito"])){
        $objetoPalabra->MostrarPrimerDigito();
    }
?>