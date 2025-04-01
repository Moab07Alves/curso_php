<?php

    $num1 = 5;
    $num2 = 79;
    $num3 = 45;
    $nom1 = "Moab";

    if(is_int($num1) || is_float($num1)) {
        echo "É um número <br>";
        $resultado = $num1 * 2;
        if($resultado > 100) {
            echo "Resultado = $resultado <br>";
        }
    }
    else {
        echo "Não é um número <br>";
    }

    if(is_int($num2) || is_float($num2)) {
        echo "É um número <br>";
        $resultado = $num2 * 2;
        if($resultado > 100) {
            echo "Resultado = $resultado <br>";
        }
    }
    else {
        echo "Não é um número <br>";
    }

    if(is_int($num3) || is_float($num3)) {
        echo "É um número <br>";
        $resultado = $num3 * 2;
        if($resultado > 100) {
            echo "Resultado = $resultado <br>";
        }
    }
    else {
        echo "Não é um número <br>";
    }

    if(is_int($nom1) || is_float($nom1)) {
        echo "É um número <br>";
        $resultado = $nom1 * 2;
        if($resultado > 100) {
            echo "Resultado = $resultado <br>";
        }
    }
    else {
        echo "Não é um número <br>";
    }

// ---------------------------------------------------------------------- //

    $a = 12;
    $b = 89;
    $c = "teste";

    if(is_int($a) || is_float($a)) {
        $multi = $a * 2;
        if($multi > 100) {
            echo "O número é maior que 100 <br>";
        } else {
            echo "O número não é maior que 100 <br>";
        }
    } else {
        echo "Não é um número <br>";
    }


    if(is_int($b) || is_float($b)) {
        $multi = $b * 2;
        if($multi > 100) {
            echo "O número é maior que 100 <br>";
        } else {
            echo "O número não é maior que 100 <br>";
        }
    } else {
        echo "Não é um número <br>";
    }

    if(is_int($c) || is_float($c)) {
        $multi1 = $c * 2;
        if($multi1 > 100) {
            echo "O número é maior que 100 <br>";
        } else {
            echo "O número não é maior que 100 <br>";
        }
    } else {
        echo "Não é um número <br>";
    }

?>