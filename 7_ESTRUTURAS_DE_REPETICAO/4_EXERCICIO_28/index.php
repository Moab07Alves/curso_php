<?php

    $contador = 4;

    while($contador <= 30) {
        echo $contador . "<br>";
        if($contador === 24) {
            echo "Terminando o loop, o contador chegou a 24 <br>";
            break;
        }
        $contador += 2;
    }

// --------------------------------------------------------------------------- //

    $x = 4;
    $limite = 30;

    while($x <= $limite) {
        echo "Executando o loop $x <br>";
        if($x === 24) {
            echo "Parando o loop <br>";
            break;
        }
        $x += 2;
    }

?>