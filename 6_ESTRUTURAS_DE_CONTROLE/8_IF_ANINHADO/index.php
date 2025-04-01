<?php

    if (10 > 2) {
        echo "entrou no primeiro if 1 <br>";
        if("teste" == "teste") {
            echo "entrou no segundo if 1 <br>";
        }
    }


    if (10 > 2) {
        echo "entrou no primeiro if 2 <br>";
        if("teste" != "teste") {
            echo "entrou no segundo if 2 <br>";
        } else {
            echo "entrou nou segundo else 2 <br>";
        }
    }


    if (10 < 2) {
        echo "entrou no primeiro if 3 <br>";
        if("teste" != "teste") {
            echo "entrou no segundo if 3 <br>";
        } else {
            echo "entrou nou segundo else 3 <br>";
        }
    } else {
        echo "entrou no primeiro else 3 <br>";
    }


    $escopo = 10;

    if (10 > 2) {
        echo "entrou no primeiro if 4 <br>";
        $escopo2 = 20;
        if("teste" == "teste") {
            echo "entrou no segundo if 4 <br>";
            echo $escopo . "<br>";
            echo $escopo2 . "<br>";
        } else {
            echo "entrou nou segundo else 4 <br>";
        }
    } else {
        echo "entrou no primeiro else 4 <br>";
    }


?>