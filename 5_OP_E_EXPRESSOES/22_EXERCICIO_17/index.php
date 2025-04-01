<?php

    // comparação 1
    if(15 > 5 && "João" === "João") { //true e true
        echo "Comparação 1 verdadeira <br>";
    }

    // No PHP 8 a comparação de qualquer número com qualquer string vai resultar em 1 que pode ser intepretado como verdadeiro.
    // comparação 2
    if("teste" > 5) { //true e true
        echo "Comparação 2 verdadeira <br>";
    }

    // comparação 3
    if(2 == 3 && 5 >= 3) { //false e true
        echo "Comparação 3 verdadeira <br>";
    }

    // comparação teste
    if(10 > 5 && 1) { //false e true
        echo "Comparação teste é verdadeira <br>";
    }

?>