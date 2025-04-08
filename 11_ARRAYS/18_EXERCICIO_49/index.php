<?php

$marca = "Fiat";
$modelo = "Argo";
$cambio = "Manual";
$portas = 4;
$rodas = 4;
$sensorDeRe = true;
$tetoSolar = false;
$motor = "2.5";
$valor = 80000;

$carro = compact("marca", "modelo", "cambio", "portas", "rodas", "sensorDeRe", "tetoSolar", "motor", "valor");

foreach ($carro as $informacao) {
    echo $informacao . "<br>";
}

// ----------------------------------------------------------------------------------------------------------------- //

$raca = "vira lata";
$nome = "Turca";
$idade = 3;
$cor = "Preta";

$turca = compact("raca", "nome", "idade", "cor");

print_r($turca);
echo "<br>";

foreach ($turca as $caracteristica => $value) {
    echo "$caracteristica => $value <br>";
}
