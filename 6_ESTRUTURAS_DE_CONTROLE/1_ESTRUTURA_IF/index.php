<?php

    //condição verdadeira
    if(5 > 2) {
        echo "Deu certo! Entrou no if <br>";
    }

    //condição falsa
    if(2 >= 5) {
        echo "Não vai entar no if, porque deu false! <br>";
    }

    //utilizar op. lógico
    if(10 === 10 && 9 > 3) {
        echo "Deu certo! Entrou no if 2 <br>";
    }


    //variáveis
    $a = 10;
    $b = 5;

    $c = "Deu certo! Entrou no if 3 <br>";

    if($a >= $b) {
        echo $c;
    }

?>