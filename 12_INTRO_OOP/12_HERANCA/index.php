<?php

class Humano
{
    public $idade = 29;

    public function falar()
    {
        echo "Olá Mundo! <br>";
    }

    private function gritar()
    {
        echo "PHP É MUITO BOM <br>";
    }

    public function acessarGritar()
    {
        $this->gritar();
    }

    protected function falarBaixinho()
    {
        echo "lalala <br>";
    }

    public function acessarFalarBaixinho()
    {
        $this->falarBaixinho();
    }
}

class Programador extends Humano {
    public function acessarFalarBaixinhoProgramador() {
        $this->falarBaixinho(); // MÉTODO COM VISIBILIDADE PROTECTED QUE FOI CRIADO NA CLASSE PAI(HUMANO) PODE SER ACESSADA NORMALMENTE DENTRO DA CLASSE FILHA(PROGRAMADOR)
    }
}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixinho();


$moab = new Programador;

echo $moab->idade . "<br>";

$moab->falar();
$moab->acessarGritar();
$moab->acessarFalarBaixinho();
