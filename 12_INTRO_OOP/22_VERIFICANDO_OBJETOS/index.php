<?php

class Humano
{
    public function falar()
    {
        echo "Olá";
    }
}

$moab = new Humano;

$teste = 10;

if (is_object($moab)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if (is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($moab) . "<br>";

if(method_exists($moab, "falar")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($moab, "asd")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

