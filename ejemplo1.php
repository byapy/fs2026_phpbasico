<?php
    echo("Hola mundo");
    $nombre = "Bryan Yaquián";
    // . es para concatenar
    echo("<br> Bienvenido, ". $nombre);
    $num1 = 50;
    $num2 = 20;
    $suma = $num1 + $num2;
    echo("<br>");
    if ($suma>100){
        echo("La suma es mayor que 100.");
    }else{
        echo("La suma es menor a 100.");
    }
    for ($index=1; $index <=10 ; $index++) { 
        echo("<br>" .$index);
    }
?>