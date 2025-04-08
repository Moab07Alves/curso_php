<?php

$arr = ["jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

print_r($arr);
echo "<br>";

list($marca, $motor, $cor, $aro, $item, $tipoCambio) = $arr;

echo $marca . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $aro . "<br>";
echo $item . "<br>";
echo $tipoCambio . "<br>";

// --------------------------------------------------------------------- //

$carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

list($marca, $motor, $cor, $aro, $opcional, $cambio) = $carro;

echo $marca . "<br>";
echo $motor . "<br>";
echo $cor . "<br>";
echo $aro . "<br>";
echo $opcional . "<br>";
echo $cambio . "<br>";

print_r($carro);
echo "<br>";
