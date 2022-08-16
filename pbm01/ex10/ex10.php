<?php  

    $tempo = $_GET["tempo"];
    $cig = $_GET["cig"];
    $totcig = ($cig*365)*$tempo;
    $res = ($totcig*10)/1440;

    echo "Ao todo, até o momento, você já fumou aproximadamente " . $totcig . " cigarros!";
    echo "<br>Estima-se que você já perdeu " . number_format($res, 2) . " dias de vida.";
?>