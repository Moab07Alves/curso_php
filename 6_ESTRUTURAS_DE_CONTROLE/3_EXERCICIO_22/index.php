<?php

    $idad = 13;
    $idad2 = 18;
    $idad3 = 37;

    if($idad >= 18) {
        echo "A pessoa é maior de idade 1 <br>";
    }

    if($idad2 >= 18) {
        echo "A pessoa é maior de idade 2 <br>";
    }

    if($idad3 >= 18) {
        echo "A pessoa é maior de idade 3 <br>";
    }

// ------------------------------------------------------ //

    $idade1 = 16;
    $idade2 = 18;
    $idade3 = 26;

    $maioridade = 18;
    $msg = "Você é maior de idade <br>";

    if($idade1 >= $maioridade) {
        echo "1 - ";
        echo $msg;
    }

    if($idade2 >= $maioridade) {
        echo "2 - ";
        echo $msg;
    }

    if($idade3 >= $maioridade) {
        echo "3 - ";
        echo $msg;
    }

?>