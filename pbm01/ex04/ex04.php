<?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];

    echo "SOMA = " . ($n1+$n2);
    echo "<br>DIFERENÇA = " . ($n1-$n2);
    echo "<br>PRODUTO = " . ($n1*$n2);
    echo "<br>QUOCIENTE INTEIRO = " . intdiv($n1, $n2);
    echo "<br>QUOCIENTE REAL = " . ($n1/$n2);
    echo "<br>RESTO DA DIVISÃO = " . ($n1%$n2);
?>