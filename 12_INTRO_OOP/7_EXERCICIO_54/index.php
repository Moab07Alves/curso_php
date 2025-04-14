<?php

class Pess
{

    public $nome;
    public $idade;

    function andar($metros)
    {
        echo "A pessoa andou $metros metros <br>";
    }
}

$moab = new Pess;

$moab->nome = "Moab Alves de Souza";
$moab->idade = 21;

echo $moab->nome . "<br>";
echo $moab->idade . "<br>";

$moab->andar(20000);

// ----------------------------------------------------------- //

class Pessoa
{
    public $nome;
    public $idade;

    function andar($m)
    {
        echo "A pessoa andou $m metros <br>";
    }
}

$matheus = new Pessoa;

$matheus->nome = "Matheus";
$matheus->idade = 29;

echo "O nome dele é $matheus->nome e tem $matheus->idade anos <br>";

$matheus->andar(20);

$joaquim = new Pessoa;

$joaquim->nome = "Joaquim";
$joaquim->idade = 32;

echo "O nome dele é $joaquim->nome e tem $joaquim->idade anos <br>";

$joaquim->andar(30);
