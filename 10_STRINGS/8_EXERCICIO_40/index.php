<?php

$str = "O rato roeu a roupa do rei de Roma";
$contA = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if ($str[$i] == "a") {
        $contA++;
    }
}

echo "A farse tem $contA lestras 'A' <br>";

// --------------------------------------------------------- //

$frase = "O rato roeu a roupa do rei de Roma"; // 4 letras a

$contadorDeAs = 0;

for ($i = 0; $i < strlen($frase); $i++) {
    if ($frase[$i] === "a") {
        $contadorDeAs++;
    }
}

echo "O número de a's na frase é de : $contadorDeAs <br>";
