<?php

    function teste($nome, $idade) {
        if(is_string($nome) && is_int($idade)) {
            echo "Olá eu sou o $nome e tenho $idade anos <br>";
        } else {
            echo "Por favor, passe os dados corretos <br>";
        }
    }

    teste("Moab", 20);

// ----------------------------------------------------------------------- //

    function apresentarPessoa($nome, $idade, $genero) {
        echo "Olá eu sou $genero $nome e tenho $idade anos <br>";
    }

    apresentarPessoa("Moab", 20, "o");
    apresentarPessoa("Alexia", 20, "a");

?>