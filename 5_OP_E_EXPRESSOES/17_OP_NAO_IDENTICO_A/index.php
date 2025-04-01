<?php

    $a = 1;
    $b = "1";

    //OP DIFRENTE
    if($a != $b) {
        echo "A diferente de B 1 <br>";
    }

    //OP NÃO IDÊNTICO
    if($a !== $b) {
        echo "A diferente de B 2 <br>";
    }   
    
    if(1 !== 2) {
        echo "Não é idêntico 1 <br>";
    }

    if(1 !== "1") {
        echo "Não é idêntico 2 <br>";
    }

    if([] !== "abc") {
        echo "Não é idêntico 3 <br>";
    }

?>