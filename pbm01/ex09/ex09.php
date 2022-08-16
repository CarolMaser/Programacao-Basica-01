<?php  

    $nome = $_GET["nome"];
    $sal = $_GET["sal"];
    $reaj = $_GET["reaj"];
    $aum = ($sal/100) * $reaj;
    $nsal = $sal+$aum;

    echo "------------ RESULTADO ------------";
    echo "<br><br>O funcionário " . $nome . " ganhava R$" . $sal . ".";
    echo "<br>Depois de ganhar " . $reaj . "% de aumento,";
    echo "<br>vai passar a ganhar R$" . number_format($aum, 2) . " a mais por mês.";
    echo "<br>Seu novo salário será de R$" . number_format($nsal, 2) . ".";

?>