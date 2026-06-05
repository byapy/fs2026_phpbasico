<?php
    $numero1 = $_GET["num_Numero1"];
    $numero2 = $_GET["num_Numero2"];
    $numero3 = $_GET["num_Numero3"];

    if($numero1 > $numero2){
        $mayor = $numero1;
        echo($mayor);
    }

?>