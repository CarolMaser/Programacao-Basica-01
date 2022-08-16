<?php

    $n1 = $_GET["nota1"];
    $n2 = $_GET["nota2"];
    $media = ($n1+$n2) / 2;

    echo "As notas do aluno foram de " . $n1 . " e " . $n2;
    echo "<br>A média final foi " . $media;

?>