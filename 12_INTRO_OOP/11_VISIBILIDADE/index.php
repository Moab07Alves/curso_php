<?php

class Car
{
    public $rodas = 4;
    private $vidro = "Sem pulícula";
    protected $portas = 4;

    public function getVidro() {
        return $this->vidro;
    } 

    public function getPortas() {
        return $this->portas;
    } 
}

class Mecanico {

    public function alterarRodas($carro) {
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }

}

$carro = new Car;

echo $carro->rodas . "<br>";

$moab = new Mecanico;

$moab->alterarRodas($carro);

echo $carro->rodas . "<br>";

//NÃO PODE ALTERAR PORQUE É PRIVADO
//$moab->colocarPelicula($carro, "G20");

echo $carro->getVidro() . "<br>";

echo $carro->getPortas() . "<br>";