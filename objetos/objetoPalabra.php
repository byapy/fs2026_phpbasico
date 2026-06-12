<?php
    require_once("../clases/SolucionPalabra.php");
    $objetoPalabra = new SolucionPalabra();
    $objetoPalabra->DefinirTexto($_POST["txt_Palabra"]);

    if(isset($_POST["btnPrimerDigito"])){
        $objetoPalabra-> MostrarPrimerDigito();
    }
    if(isset($_POST["btnUltimoDigito"])){
        $objetoPalabra-> MostrarUtimoDigito();
    }
    if(isset($_POST["btnCaracteres"])){
        $objetoPalabra-> MostrarCaracteres();
    }
?>