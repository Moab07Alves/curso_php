<?php

    $nome = "Moab";
    $idade = 20;
    $altura = 1.70;
    $estuda = true;
    $info = ["curso" => "Sistemas da informação", "universidade" => "Universidade Federal da paraíba", "periodo" => 7]; 
   
    if(is_int($nome)) {
        echo "1 - ";
        echo "É um inteiro <br>";
    } else {
        echo "1 - ";
        echo "Não é um inteiro <br>";
    }

    if(is_int($idade)) {
        echo "2 - ";
        echo "É um inteiro <br>";
    } else {
        echo "2 - ";
        echo "Não é um inteiro <br>";
    }

    if(is_int($altura)) {
        echo "3 - ";
        echo "É um inteiro <br>";
    } else {
        echo "3 - ";
        echo "Não é um inteiro <br>";
    }

    if(is_int($estuda)) {
        echo "4 - ";
        echo "É um inteiro <br>";
    } else {
        echo "4 - ";
        echo "Não é um inteiro <br>";
    }

    if(is_int($info)) {
        echo "5 - ";
        echo "É um inteiro <br>";
    } else {
        echo "5 - ";
        echo "Não é um inteiro <br>";
    }

// -------------------------------------------------- //

    $a = 12;
    $b = "Roda";
    $c = [];

    if(is_int($a)) {
        echo "É um inteiro 1 <br>";
    } else {
        echo "Não um inteiro 1 <br>";
    }

    if(is_int($b)) {
        echo "É um inteiro 2 <br>";
    } else {
        echo "Não um inteiro 2 <br>";
    }

    if(is_int($c)) {
        echo "É um inteiro 3 <br>";
    } else {
        echo "Não um inteiro 3 <br>";
    }

?>