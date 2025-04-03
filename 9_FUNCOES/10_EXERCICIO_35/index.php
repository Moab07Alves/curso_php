<?php

    function testeQuadrado($num) {
        return $num ** 2;
    }

    echo testeQuadrado(2) . "<br>";
    echo testeQuadrado(3) . "<br>";
    echo testeQuadrado(4) . "<br>";

// ------------------------------------------- //

    function numAoQuadrado($x) {
        $resultado = $x ** 2;
        return $resultado;
    }

    echo numAoQuadrado(2) . "<br>";

    $num = numAoQuadrado(4);
    echo $num . "<br>";
   
    $x = numAoQuadrado(123);
    echo $x . "<br>";

?>