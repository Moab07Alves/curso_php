<?php

    function teste($x) {
        $y = [];
        for($i = 0; $i < count($x); $i++) {
            if($x[$i] > 7) { 
                array_push($y, $x[$i]);
            }
        }
        return $y;
    }

    $z = [-7, 1, 67, 2, 7, 4, 8, 12, -54, 23, -9, -10, 0, -89, 56];
    $w = teste($z);
    print_r($w);
    echo "<br>";
    echo implode(" - ", $w) . "<br>";

// --------------------------------------------------------------------------- //

    $arr = [];

    for($i = 0; $i <= 30; $i++) {
        array_push($arr, $i);
    }

    function arrayMaiorQueSete($array) {
        $arrayRetorno = [];
        for($j = 0; $j < count($array); $j++) {
            if($array[$j] > 7) {
                array_push($arrayRetorno, $array[$j]);
            }
        }
        return $arrayRetorno;
    }
    
    $novoArray = arrayMaiorQueSete($arr);
    print_r($novoArray);
    echo "<br>";
    echo implode(" - ", $novoArray) . "<br>";

?>