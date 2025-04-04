<?php

$frase = "Este item está em promoção";
$frase = ucfirst($frase);
$frase_arr = explode(" ", $frase);
print_r($frase_arr);
echo "<br>";

for ($i = 0; $i < count($frase_arr); $i++) {
    if (strtolower($frase_arr[$i]) === "promoção") {
        $frase_arr[$i] = strtoupper($frase_arr[$i]);
    }
}

echo implode(" ", $frase_arr) . "<br>";

// ------------------------------------------------------ //

$str = "este item está em ";
$promo = "promoção";
echo ucfirst($str) . strtoupper($promo) . "<br>";
