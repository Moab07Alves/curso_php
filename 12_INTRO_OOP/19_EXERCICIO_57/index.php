<?php

class Cachor
{
    public $nome;
    public $raca;
    public $idade;
    public $cor;

    function __construct($nome, $raca, $idade, $cor)
    {
        $this->nome = $nome;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->cor = $cor;
    }
}

$bebel = new Cachor("Bebel", "Vira Lata", 1, "Caramelo");

echo "O nome do cachorro é $bebel->nome, ele é da raça $bebel->raca, tem $bebel->idade ano e é da cor $bebel->cor <br>";

// ---------------------------------------------------------------------------------------------------------------------------- //

class Cachorro
{
    public $nome;
    public $cor;
    public $patas;

    function __construct($nome, $cor, $patas)
    {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->patas = $patas;
    }

    public function exibirAnimal()
    {
        echo "O nome do cachorro é $this->nome, ele tem a cor $this->cor, e tem $this->patas patas <br>";
    }
}

$turca = new Cachorro("Turca", "Preta", 4);

$turca->exibirAnimal();

$nome = "Tubarão";
$cor = "Branco";
$patas = 4;

$tubarao = new Cachorro($nome, $cor, $patas);

$tubarao->exibirAnimal();
