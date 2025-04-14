<?php

class Cachor
{

    function latir()
    {
        echo "Au Au Au Au <br>";
    }

    function andar()
    {
        echo "Estou andando <br>";
    }
}

$bebel = new Cachor;

$bebel->latir();
$bebel->andar();

$pitu = new Cachor;

$pitu->latir();
$pitu->andar();

// ----------------------------------------------------- //

class Cachorro
{

    function latir()
    {
        echo "Au au <br>";
    }

    function andar($m)
    {
        echo "O cachorro andou $m metros <br>";
    }
}

$viralata = new Cachorro;
$pastorAlemao = new Cachorro;

$viralata->latir();
$pastorAlemao->latir();

$viralata->andar(1000);
$pastorAlemao->andar(50);