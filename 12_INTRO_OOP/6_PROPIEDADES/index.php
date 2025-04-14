<?php

class Car
{

    public $rodas;
    public $aro = 20;
    public $cor = "Vermelha";

    function ligar() {
        echo "Vrummmmmmm <br>";
    }
}

$ferrari = new Car;

$ferrari->rodas = 4;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor . "<br>";

$ferrari->cor = "Azul";
echo $ferrari->cor . "<br>";

$ferrari->ligar();
