<?php

$arrayMulti = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

for ($i = 0; $i < count($arrayMulti); $i++) {
    echo "ARRAY " . ($i + 1) . ": <br>";
    for ($j = 0; $j < count($arrayMulti[$i]); $j++) {
        echo $arrayMulti[$i][$j] . " ";
    }
    echo "<br>";
}

// -------------------------------------------------------------------- //

$arr =  [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

// LOOP NO ARRAY EXTERNO
for ($i = 0; $i < count($arr); $i++) {
    // IMPRIMINDO ARRAY
    echo "Imprimindo array externo: " . ($i + 1) . "<br>";
    //IMPRIMINDO O ARRAY INTERNO
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "<br>";
    }
}
