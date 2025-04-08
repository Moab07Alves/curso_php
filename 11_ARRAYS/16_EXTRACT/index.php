<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Moab";

echo "$nome <br>";

$pessoa = [
    'nome' => 'João',
    'idade' => 29
];

extract($pessoa);

echo "$nome <br>";
echo "$idade <br>";
