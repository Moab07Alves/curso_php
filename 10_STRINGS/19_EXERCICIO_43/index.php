<?php

$x = "carro - navio - helicóptero - barco - jangada";
$y = explode("-", $x);
print_r($y);
echo "<br>";

for ($i = 0; $i < count($y); $i++) {
    echo $y[$i] . "<br>";
}

// -------------------------------------------------- //

$str = "carro - navio - helicóptero - barco - jangada";

$arr = explode(" - ", $str);

for ($i = 0; $i < count($arr); $i++) {
    echo "Item: " . $arr[$i] . "<br>";
}
