<?php

$array = ["batata", "maçã", "pera", "feijão", "arroz"];

$splice1 = array_splice($array, 2, 2);

print_r($array);
echo "<br>";

print_r($splice1);
echo "<br>";

$array2 = ["batata", "maçã", "pera", "feijão", "arroz"];

$splice2 = array_splice($array2, 2, -1);

print_r($array2);
echo "<br>";

print_r($splice2);
echo "<br>";

// ------------------------------------------------------------------- //

$arr = ["batata", "maçã", "pera", "feijão", "arroz"];

$removidos = array_splice($arr, 2, 2);

print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";