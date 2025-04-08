<?php

$arr = [];

// ADICIONANDO VALORES
print_r($arr);
echo "<br>";

$arr[0] = 10;

print_r($arr);
echo "<br>";

$arr[1] = 15;

print_r($arr);
echo "<br>";

$arr[5] = 25;

print_r($arr);
echo "<br>";

// MODIFICANDO VALORES
$arr[1] += 55;

print_r($arr);
echo "<br>";

// ADICIONANDO VALORES ARRAY ASSOCIATIVO
$arrayAssoc = [];

print_r($arrayAssoc);
echo "<br>";


$arrayAssoc["carro"] = "BMW";

print_r($arrayAssoc);
echo "<br>";

$arrayAssoc["aviao"] = "Boeing";

print_r($arrayAssoc);
echo "<br>";


// MODIFICANDO VALORES ARRAY ASSOCIATIVO
$arrayAssoc["carro"] = "Ferrari";

print_r($arrayAssoc);
echo "<br>";
