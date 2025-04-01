<?php

    $velocidade1 = 20;
    $velocidade2 = 40;
    $velocidade3 = 50;

    if($velocidade1 < 40) {
        echo "Dentro da velocidade correta 1 <br>";
    } else if($velocidade1 == 40) {
        echo "Cuidado com o limite de velocidade permetido 1 <br>";
    } else {
        echo "Você foi mutado por ultrapassar o limite de velocidade 1 <br>";
    }

    if($velocidade2 < 40) {
        echo "Dentro da velocidade correta 2 <br>";
    } else if($velocidade2 == 40) {
        echo "Cuidado com o limite de velocidade permetido 2 <br>";
    } else {
        echo "Você foi mutado por ultrapassar o limite de velocidade 2 <br>";
    }

    if($velocidade3 < 40) {
        echo "Dentro da velocidade correta 3 <br>";
    } else if($velocidade3 == 40) {
        echo "Cuidado com o limite de velocidade permetido 3 <br>";
    } else {
        echo "Você foi mutado por ultrapassar o limite de velocidade 3 <br>";
    }


// ---------------------------------------------------------------------------------------- //

    $vel = 60;
    $velMax = 40;

    if($vel < $velMax) {
        echo "Parabéns, você está nume velocidade segura <br>";
    } else if($vel === $velMax) {
        echo "Cuidado! você está no limite de velocidade <br>";
    } else {
        echo "Você foi multado, velocidade acima do permetido <br>";
    }


?>