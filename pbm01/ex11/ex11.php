<?php

    $cid = $_GET["cid"];
    $ncid = str_ireplace(" ", "", $cid);

    echo "Você mora na cidade de " . strtoupper($cid) . ".";
    echo "<br>A primeira letra é " . strtoupper(substr($cid, 0, 1)) . ".";
    echo "<br>E contém " . strlen($ncid) . " letras.";

?>