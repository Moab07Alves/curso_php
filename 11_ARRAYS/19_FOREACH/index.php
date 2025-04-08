<?php

$moab = [
    'nome' => 'Moab',
    'idade' => 21,
    'profissao' => 'Programador'
];

$alexia = [
    'nome' => 'Alexia',
    'idade' => 25,
    'profissao' => 'Eng. Civil'
];

foreach ($moab as $carac => $value) {
    echo "$carac => $value <br>";
}

foreach ($alexia as $carac => $value) {
    echo "$carac => $value <br>";
}

foreach ($alexia as $value) {
    echo "$value <br>";
}
