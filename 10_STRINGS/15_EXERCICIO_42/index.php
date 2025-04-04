<?php

$x = "Cadê o meu queijo? Ele estava aqui em cima";

$y = substr($x, 12, 6); // DETERINANDO O COMPRIMENTO
echo $y . "<br>";

$z = substr($x, 12, -25); // REMOVENDO DO FINAL
echo $z . "<br>";

$w = substr($x, 24, 6); // DETERINANDO O COMPRIMENTO
echo $w . "<br>";

$a = substr($x, 24, -13); // REMOVENDO DO FINAL
echo $a . "<br>";

// ------------------------------------------------------- //

$str = "Cadê o meu queijo? Ele estava aqui em cima";

$queijo = substr($str, 12, 6);
echo $queijo . "<br>";

$estava = substr($str, 24, 6);
echo $estava . "<br>";
