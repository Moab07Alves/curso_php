<?php

    function teste($array) {
        $maisDeDez = [];
        foreach($array as $item => $preco) {
            if($preco > 10) {
                array_push($maisDeDez, $item);
            }
        }
        return $maisDeDez;
    }

    $lista = ["Sofá" => 2380.00, "Televisão" => 4500.00, "Jarro" => 10.00];
    var_dump(teste($lista));
    echo "<br>";
// ---------------------------------------------------------------------------- //

    $arr = [
        'Porta' => 100,
        'maçaneta' => 5,
        'motor' => 2000,
        'retrovisor' => 8
    ];

    function itensCaros($arr) {
        $arrItensCaros = [];
        foreach($arr as $item => $preco) {
            if($preco > 10) {   
                array_push($arrItensCaros, $item);
            }
        }
        return $arrItensCaros;
    }

    $novoArr = itensCaros($arr);
    print_r($novoArr); 

?>