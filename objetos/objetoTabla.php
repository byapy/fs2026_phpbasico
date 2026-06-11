<?php
    require_once("../clases/SolucionTabla.php");
    $objetoTabla = new SolucionTabla();
    $objetoTabla->DefinirNumero($_POST["num_Numero"]);
    $objetoTabla->TablaNumero();


?>