<?php

$cincodias = strtotime('5 days');

echo $cincodias . "<br>";

$dezdias = strtotime('10 days');

echo $cincodias . "<br>";

$dataAtualMais5 = date('d/m/y', $cincodias);

echo $dataAtualMais5 . "<br>";

$dataAtualMais5 = date('d/m/y', $dezdias);

echo $dataAtualMais5 . "<br>";

$doismeses = strtotime('2 months');

echo $doismeses . "<br>";

$dataAtualMais5 = date('d/m/y', $doismeses);

echo $dataAtualMais5 . "<br>";

$dozeanos = strtotime('12 years');

echo date('d/m/y', $dozeanos) . "<br>";