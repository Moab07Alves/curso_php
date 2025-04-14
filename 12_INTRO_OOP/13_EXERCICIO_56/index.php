<?php

class Human
{
    public $nome;
    public $idade;

    public function falar()
    {
        echo "Olá Mundo! <br>";
    }
}

class Profes extends Human
{
    public $disciplina;

    public function saudacaoTurma()
    {
        echo "Olá tumra, vamos aprender $this->disciplina <br>";
    }
}

$maria = new Human;

$maria->nome = "Maria";
$maria->idade = 36;

$maria->falar();

$joao = new Profes;

$joao->nome = "João";
$joao->idade = 46;
$joao->disciplina = "Geografia";

$joao->falar();
$joao->saudacaoTurma();

// ------------------------------------------------------------------------ //

class Humano
{
    public $maos = 2;
    public $pernas = 2;

    public function falar()
    {
        echo "Olá eu sou um humano <br>";
    }
}


class Professor extends Humano
{
    public $disciplina = "Matemática";

    public function estaLecionando()
    {
        echo "O professor esta dando aula de $this->disciplina <br>";
    }
}

$marcos = new Humano;

echo $marcos->maos . "<br>";
echo $marcos->pernas . "<br>";
$marcos->falar();


$joao = new Professor;

echo $joao->pernas . "<br>";
echo $joao->disciplina . "<br>";

$joao->falar();
$joao->estaLecionando();
