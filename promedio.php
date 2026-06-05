<?php
    $nota1  = $_GET["num_Nota1"];
    $nota2  = $_GET["num_Nota2"];
    $nota3  = $_GET["num_Nota3"];
    $nota4  = $_GET["num_Nota4"];
    $nota5  = $_GET["num_Nota5"];
    $nombre = $_GET["txt_Nombre"];
    $curso  = $_GET["txt_curso"];
    $promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
    echo("Estudiante: ". $nombre);
    echo("<br>Curso: ". $curso);
    echo("<br>El promedio de notas es: " . $promedio);
?>