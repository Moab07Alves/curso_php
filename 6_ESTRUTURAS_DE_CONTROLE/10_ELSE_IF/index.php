<?php

    if(10 > 5) {
        echo "Entrou no if 1 <br>";
    } else if(10 > 6) {
        echo "Entro no else if 1 <br>";
    }

    if(10 < 5) {
        echo "Entrou no if 2 <br>";
    } else if(10 > 6) {
        echo "Entrou no else if 2 <br>";
    }

    if(10 < 5) {
        echo "Entrou no if 3 <br>";
    } else if(10 < 6) {
        echo "Entrou no else if 3 <br>";
    } else {
        echo "Entrou no else 3 <br>";
    }

    if(10 < 5) {
        echo "Entrou no if 4 <br>";
    } else if(10 < 6) {
        echo "Entrou no else if 4 <br>";
    } else if(11 > 1) {
        echo "Entro no else if 2 4 <br>";
    }else {
        echo "Entrou no else 4 <br>";
    }

    $a = 10;
    $b = 5;
    $msg = "Entrou no else if 5 <br>";

    if(10 < 5) {
        echo "Entrou no if 5 <br>";
    } else if($a > $b) {
        echo $msg;
    } else if(11 > 1) {
        echo "Entro no else if 2 5 <br>";
    }else {
        echo "Entrou no else 5 <br>";
    }

?>