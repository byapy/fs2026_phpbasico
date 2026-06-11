<?php
    require_once("../clases/SolucionPares.php");
    $objetoPares = New SolucionPares();
    $objetoPares->setNumero1($_POST["num_Inicio"]);
    $objetoPares->setNumero2($_POST["num_Final"]);
    
    if(isset($_POST["btnSubir"])){
        $objetoPares->GenerarNumeros();
    }
    if(isset($_POST["btnMayormenor"])){
        $objetoPares->VerificarMayorMenor();
    }

?>