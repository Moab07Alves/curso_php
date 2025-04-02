<?php

    $array = ["Moab", 1, 2, true, "Alves", 3, 5, "Souza", false, 98.4];
    $contador = 0;

    while($contador < count($array)) {
        if(is_string($array[$contador])) {
            echo $array[$contador] . "<br>";
        }
        $contador++;
    }

// ------------------------------------------------------------------------------- //]

    $arr = [5, "Moab", true, false, "Opa", 12.8, "Teste", true, [], "Palavra", 5, 10, "Alô"];
    $x = count($arr);
    $y = 0;

    while($y < $x) {
        if(is_string($arr[$y])) {
            echo $arr[$y] . "<br>";
        }
        $y++;
    }

?>