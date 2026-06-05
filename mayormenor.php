<?php
    $numero1 = $_GET["num_Numero1"];
    $numero2 = $_GET["num_Numero2"];
    $numero3 = $_GET["num_Numero3"];


    $mayor = $numero1;
    $medio = 0;
    $menor = 0;
    if($numero2 > $mayor){
        $mayor = $numero2;
    }
    if($numero3 > $mayor){
        $mayor = $numero3;
    }

?>