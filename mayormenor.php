<?php
    $numero1 = $_GET["num_Numero1"];
    $numero2 = $_GET["num_Numero2"];
    $numero3 = $_GET["num_Numero3"];


    $mayor = $numero1;
    $medio = 0;
    $menor = $numero1;
    if($numero2 > $mayor){
        $mayor = $numero2;
    }
    if($numero3 > $mayor){
        $mayor = $numero3;
    }
    if($numero2 < $menor){
        $menor = $numero2;
    }
    if($numero3 < $menor){
        $menor = $numero3;
    }

    $medio = ($numero1 + $numero2 + $numero3) - $mayor - $menor;
    echo "Mayor: ". $mayor;
    echo "Medio: ". $medio;
    echo "Menor: ". $menor;

?>