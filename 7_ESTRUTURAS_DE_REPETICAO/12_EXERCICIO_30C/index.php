<?php

    $valores = [];

    for($x = 10; $x <= 20; $x++) {
        array_push($valores, $x);
    }

    for($y = 0; $y < count($valores); $y++) {
        if($valores[$y] % 2 != 0) {
            echo "$valores[$y] <br>";
        }
    }
    
// ---------------------------------------------------------- //

    $arr = [];

    for($i = 10; $i <= 20; $i++) {
        array_push($arr, $i);
    }

    for($i = 0; $i < count($arr); $i++) {
        if($arr[$i] % 2 != 0) {
            echo "Número ímpar: $arr[$i] <br>";
        }
    }

?>