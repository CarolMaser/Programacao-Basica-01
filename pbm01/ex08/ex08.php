<?php

    $preco = $_GET["preco"];
    $sub = ($preco / 100) * 5;
    $desc = $preco - $sub;

    echo "O produto custava R$" . $preco . " e agora custará R$" . number_format($desc, 2) . ", já com 5% de desconto.";
    echo "<br>Ao todo, teremos R$" . number_format($sub, 2) . " de economia.";
?>