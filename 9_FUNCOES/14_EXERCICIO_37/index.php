<?php

/*
    function defineCorCarro($cor = "vermelho") {
        return $cor;
    }

    echo "A cor do carro é " . defineCorCarro() . "<br>";
    echo "A cor do carro é " . defineCorCarro("Preto") . "<br>";
    echo "A cor do carro é " . defineCorCarro("Branco") . "<br>";
    echo "A cor do carro é " . defineCorCarro("Prata") . "<br>";
*/

// --------------------------------------------------------------------- //

    function defineCorCarro($cor = "vermelho") {
        return "A cor do carro é: $cor <br>";
    }

    $carroVermelho = defineCorCarro();
    echo $carroVermelho;

    $carroAzul = defineCorCarro("Azul");
    echo $carroAzul;

    
?>