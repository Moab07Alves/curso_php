<?php

    class Pessoa {

        function falar() {
            echo "Olá pessoal! <br>";
        }

    }

    $moab = new Pessoa();
    $moab->nome = "Moab";

    echo $moab->nome;
    echo "<br>";
    echo $moab->falar();

?>