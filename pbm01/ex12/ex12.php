<?php

    $nome = $_GET["nome"];

    echo "Seu primeiro nome é " . strtoupper(strstr($nome, ' ', true));

?>