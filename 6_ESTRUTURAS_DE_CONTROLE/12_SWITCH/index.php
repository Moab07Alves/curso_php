<?php

    $x = 5;

    switch($x) {
        case 0:
            echo "x é igual a 0 <br>";
            break;
        case 1:
            echo "x é igual a 1 <br>";
            break;
        default:
            echo "x não é igual a nenhum dos valores mencionados <br>";
    }


    $y = "Moab";

    switch($y) {
        case "Moab":
            echo "O nome é 'Moab' <br>";
            break;
        case "João":
            echo "O nome é 'João' <br>";
            break;
        default:
            echo "O nome não foi encontrado <br>";
    }

    if($x == 0) {
        //
    } else if($x == 1) {
        //
    } else if($x == 2) {
        //
    }

?>