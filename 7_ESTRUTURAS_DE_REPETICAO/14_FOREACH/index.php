<?php

    $nomes = ["Moab", "Pedro", "João", "Maria"];

    $a = 10;
    
    foreach($nomes as $nome) {
        echo "O nome do índice atual é $nome <br>";
        if($nome === "Moab") {
            echo "Opa $a <br>";
        }
    }

?>