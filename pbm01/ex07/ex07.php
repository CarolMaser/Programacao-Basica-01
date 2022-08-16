<?php

    $larg = $_GET["larg"];
    $alt = $_GET["alt"];
    $tot = $larg * $alt;
    $tinta = $tot / 2;

    echo "Uma parede de " . $larg . " x " . $alt . " tem uma área de " . $tot . "m²";
    echo "<br>Precisaremos de " . $tinta . " litros de tinta.";

?>