<?php

$pessoa = new class() {
    public $nome = "Moab";

    public function dizerNome()
    {
        echo "Olá meu nome é $this->nome";
    }
};

echo "$pessoa->nome <br>";

$pessoa->dizerNome();
