<?php

    function velocidadeMaxima($vel) {
        if(is_int($vel)) {
            echo "O carro atinge a velocidade máxima de $vel km/h <br>";
        } else {
            echo "Por favor, passe um número inteiro <br>";
        }
        
    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400); 

    // NÃO PODE
    // velocidadeMaxima();

    echo "Teste continuando <br>";

    $velocidade = 125;

    velocidadeMaxima($velocidade);

    //PHP IGNORA PARÂMETRO DESNECESSÁRIO
    velocidadeMaxima(250, "teste");

    velocidadeMaxima("teste");

    // MAIS PARÂMETROS
    function descreverAnimal($nome, $raca) {
        echo "O $nome é da $raca <br>";
    }

    descreverAnimal("Bob", "Viralata");
    descreverAnimal("Shark", "Pastor Alemão");
    descreverAnimal("Poodle", "Tita");
    
    // NÃO PODE
    //descreverAnimal("Shark");

?>