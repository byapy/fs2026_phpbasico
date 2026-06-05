<?php
    $numero = $_GET["num_Numero"];
    if ($numero >0) {
        echo("El numero >". $numero. "< es positivo");
    }elseif ($numero <0) {
            echo("EL numero >". $numero. "< Es Negativo");
    }else {
            echo("El numero >". $numero. "< es Neutro");
    }
    

?>
