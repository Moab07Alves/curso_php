<?php

$str = "Está é a minha string";

$minha = substr($str, 10, 6); // STRING PAI, ÍNDICE INICIAL, COMPRIMENTO DA PALAVRA

echo $str . "<br>";
echo $minha . "<br>";

$str2 = "Testando esta string abc";

$novaString = substr($str2, 8); // OMITIR COMPRIMENTO = PEGAR ATÉ O FIM
echo $novaString . "<br>";

$novaString2 = substr($str2, 8, -3); // COMPRIMENTO NEGATIVO = REMOVER DO ÚLTIMO ÍNDICE
echo $novaString2 . "<br>";
