<?php

$data = new DateTime();

echo $data->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";

echo $data->format('l . F . Y') . "<br>";

//DATA + 5 DIAS
$data->modify('+5 days');

echo $data->format('d/m/y') . "<br>";

//DATA + 5 DIAS + 2 MESES
$data->modify('+2 months');

echo $data->format('d/m/y') . "<br>";

//DATA + 5 DIAS + 2 MESES - 3 YEARS
$data->modify('-3 years');

echo $data->format('d/m/y') . "<br>";

