<?php

    $a = 7.9;
    $b = 3.4;
    $d = 58.45;

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $d;
    echo "<br>";

    if (is_float($a)) {
        echo "É um float <br>";
    }

    if (is_float($b)) {
        echo "É um float <br>";
    }

    if (is_float($d)) {
        echo "É um float <br>";
    }

    //-----------------------------------------------------------------------------------------------

    echo 4.15;
    echo "<br>";
    echo 12.12;
    echo "<br>";

    $c = -78.1;

    echo $c;
    echo "<br>";

    if (is_float($c)) {
        echo "Sim, podemos ter floats negativos! <br>";
    }

    if (is_int($c)) {
        echo "É um inteiro <br>";
    }

?>