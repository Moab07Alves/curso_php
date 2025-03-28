<?php

    //---------------------------------------- ARRAY -----------------------------------
    $array = ["Argo", "Fiat", 2024, 90000];

    echo $array[0];
    echo "<br>";
    echo $array[1];
    echo "<br>";
    echo $array[2];
    echo "<br>";
    echo $array[3];
    echo "<br>";
    print_r($array);
    echo "<br>";

    //---------------------------------- ARRAY ASSOCIATIVO --------------------------------
    $arrayAssociativo = ['nome' => "Argo", 'marca' => "Fiat", 'ano' => 2024, 'valor' => 90000];
    
    echo $arrayAssociativo['nome'];
    echo "<br>";
    echo $arrayAssociativo['marca'];
    echo "<br>";
    echo $arrayAssociativo['ano'];
    echo "<br>";
    echo $arrayAssociativo['valor'];
    echo "<br>";
    print_r($arrayAssociativo);
    echo "<br>";
    //-------------------------------------------------------------------------------------


    $carro = [
        'marca' => 'BMW',
        'rodas' => 3,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindado' => false
    ];

    print_r($carro);
    echo "<br>";

    $marca = $carro['marca'];
    $velocidade_max = $carro['velocidade_max'];

    echo "O carro é da marca $marca e atinge no máximo $velocidade_max km/h <br>";
    echo "O carro é da marca $carro[marca] e atinge no máximo $carro[velocidade_max] km/h <br>";


?>