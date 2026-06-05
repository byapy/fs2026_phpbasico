<?php
    echo("Operaciones Básicas");
    $num1 = $_GET["numNumero1"];
    $num2 = $_GET["numNumero2"];
    if(isset($_GET["btn_suma"])){
        $resultado = $num1 + $num2;
        echo("<br>");
        echo("La suma es: ". $resultado);
    }
    if(isset($_GET["btn_resta"])){
        $resultado = $num1 - $num2;
        echo("<br>");
        echo("La resta es: ". $resultado);
    }
    if(isset($_GET["btn_divi"])){
        $resultado = $num1 / $num2;
        echo("<br>");
        echo("La divion es: ". $resultado);
    }
    if(isset($_GET["btn_multi"])){
        $resultado = $num1 * $num2;
        echo("<br>");
        echo("La multiplicación es: ". $resultado);
    }
    
?>