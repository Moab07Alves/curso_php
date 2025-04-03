<?php

    function teste($listaProdutos) {
        return implode(", ", $listaProdutos);
    }

    $listaProdutos = ["Arroz", "Feijão", "Carne", "Ovo", "Café", "Biscoito", "Shampoo", "Macarrão", "Suco"];
    echo teste($listaProdutos) . "<br>";

// ------------------------------------------------------------------------------------------------------------------- //

    $lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

    function listaParaString($arr) {
        $str = "Você levou estes itens do mercado: <br>";

        for($i = 0; $i < count($arr); $i++) {
            if($i + 1 == count($arr)) {
                $str .= ($i + 1) . "- " . $arr[$i] . ". <br>";
            }
            else {
                $str .= ($i + 1) . "- " . $arr[$i] . "; <br>";
            }
        }
        return $str;
    }

    echo listaParaString($lista);

?>