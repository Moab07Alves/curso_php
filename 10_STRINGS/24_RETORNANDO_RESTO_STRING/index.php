<?php

$str = "Testando o resto da string, para ver se da certo";

$rest = strstr($str, "resto");
echo $rest . "<br>";

$a = "string";
$rest2 = strstr($str, $a);
echo $rest2 . "<br>";

if (strstr($str, ".NET") === false) {
    echo "Não encontramos a string";
}
