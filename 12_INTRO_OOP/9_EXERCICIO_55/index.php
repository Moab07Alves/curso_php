<?php

class Car
{

    public $nome;
    public $marca;
    public $quantRodas;
    public $tamanhoAro;
    public $cambio;
    public $velocidadeMaxima;

    function setVelociddaeMaxima($velocidadeMaxima)
    {
        $this->velocidadeMaxima = $velocidadeMaxima;
    }

    function getVelocidadeMaxima()
    {
        echo "Velocidade Máxima: $this->velocidadeMaxima KM/H <br>";
    }
}

$argo = new car;

$argo->nome = "Argo";
$argo->marca = "Fiat";
$argo->quantRodas = 4;
$argo->tamanhoAro = 20;
$argo->cambio = "Manual";
$argo->velocidadeMaxima = 150;

echo "INFROMAÇÕES DO CARRO <br>";
echo "Nome: $argo->nome <br>";
echo "Marca: $argo->marca <br>";
echo "Quantidade de Rodas: $argo->quantRodas <br>";
echo "Tamanho do Aro: $argo->tamanhoAro <br>";
echo "Tipo de Câmbio: $argo->cambio <br>";
$argo->getVelocidadeMaxima();

$argo->setVelociddaeMaxima(200);

$argo->getVelocidadeMaxima();


// ------------------------------------------------------------------------------------ //

class Carro
{
    public $cor;
    public $tetoSolar;
    public $velocidadeMaxima;

    function setVelocidadeMaxima($vel)
    {
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima()
    {
        echo "A velocidade máxima deste carro é: $this->velocidadeMaxima km/h <br>";
    }
}

$bmw = new Carro;

$bmw->cor = "Branca";
$bmw->tetoSolar = true;

$bmw->setVelocidadeMaxima(200);

$bmw->getVelocidadeMaxima();


$ferrari = new Carro;

$ferrari->setVelocidadeMaxima(300);

$ferrari->getVelocidadeMaxima();
