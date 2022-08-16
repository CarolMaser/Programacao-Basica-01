<?php

    $name = $_GET["name"];
    $birth = $_GET["birth"];
    $pay = $_GET["pay"];

    echo "------ FICHA FUNCIONAL ------";
    echo "<br>NOME: " . $name;
    echo "<br>NASCIMENTO em " . $birth;
    echo "<br>SALÁRIO de R$" . $pay;
    echo "<br>----------------------------------------"
?>