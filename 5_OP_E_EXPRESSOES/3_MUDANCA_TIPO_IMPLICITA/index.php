<?php

    echo 5 / 2 ;
    echo "<br>";

    if (is_float(5 / 2)) {
        echo "é Float <br>";
    }

    echo 2 . 3;
    echo "<br>";
    
    if (is_string(2 . 3)) {
        echo "é String <br>";
    }

    $nome = "Moab";
    $sobrenome = "Alves";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";

?>