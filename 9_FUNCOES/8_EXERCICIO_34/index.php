<?php

    function verificarNumero($num) {
        if($num % 2 == 0) {
            echo "O número $num é par <br>";
        } else {
            echo "O número $num é impar <br>";
        }
    }


    verificarNumero(40);
    verificarNumero(67);
    verificarNumero(3);
    verificarNumero(123);
    verificarNumero(888);

// ------------------------------------------------------------- //

    function parOuImpar($num) {
        if($num % 2 == 0) {
            echo "O número $num é par <br>";
        } else {
            echo "O número $num é impar <br>";
        }
    }

    parOuImpar(30);
    parOuImpar(31);
    parOuImpar(22);
    parOuImpar(11);

?>