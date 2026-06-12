<?php
    require_once("../clases/SolucionCaracteres.php");
    $objetoCaracteres = new SolucionCaracteres();
    $objetoCaracteres->DefinirTexto($_POST["txt_Texto"]);
    $objetoCaracteres->RevisarTexto();


?>