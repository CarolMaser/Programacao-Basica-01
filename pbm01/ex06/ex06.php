<?php

    $num = $_GET["num"];

    echo "CONVERTENDO " . $num . " m";
    echo "<br>" . ($num/1000) . " Km";
    echo "<br>" . ($num/100) . " Hm";
    echo "<br>" . ($num/10) . " Dam";
    echo "<br>" . ($num*10) . " dm";
    echo "<br>" . ($num*100) . " cm";
    echo "<br>" . ($num*1000) . " mm";
?>