<?php

$arr = [
    [1, 2, 3],
    [4, 5, 6]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>"; // ACESSANDO O PRIMEIRO ARRAY, E SEGUNDO ELEMENTO

echo $arr[1][2] . "<br>"; // ACESSANDO O SEGUNDO ARRAY, E TERCEIRO ELEMENTO

echo count($arr) . "<br>"; // COUNT NO ARRAY PRINCIPAL
echo count($arr[0]) . "<br>"; // COUNT DO PRIMEIRO ARRAY DO ARRAY PRINCIPAL
echo count($arr[1]) . "<br>";  // COUNT DO SEGUNDO ARRAY DO ARRAY PRINCIPAL