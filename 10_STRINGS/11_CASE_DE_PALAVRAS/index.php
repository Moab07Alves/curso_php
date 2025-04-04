<?php

$frase = "testando o case de uma palavra";
$frase2 = "Testando o case de uma palavra";
$frase3 = "testando o case de uma palavra";

// PRIMEIRA LETRA EM MAIÚSCULO
echo ucfirst($frase) . "<br>";
echo ucfirst($frase2) . "<br>";

// TODAS AS PALAVRAS COM INICIAIS MAIÚSCULAS
echo ucwords($frase3) . "<br>";
echo ucwords($frase2) . "<br>";
