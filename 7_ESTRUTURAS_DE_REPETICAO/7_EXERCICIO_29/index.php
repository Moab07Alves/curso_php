<?php

    $valores = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
    $x = 0;
    

    while($x < count($valores)) {
        if($valores[$x] == 30 || $valores[$x] == 40) {
            echo "Pulando a execução $valores[$x] <br>";
            $x++;
            continue;
        }
        echo "Excutendo o loop $valores[$x] <br>";
        $x++;
    }

// --------------------------------------------------------------- //

    $arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while($i < count($arr)) {
        $numeroAtual = $arr[$i];
        if($numeroAtual == 30 || $numeroAtual == 40) {
            $i++;
            continue;
        }
        echo "Elemento: $numeroAtual <br>";
        $i++;
    }

?>