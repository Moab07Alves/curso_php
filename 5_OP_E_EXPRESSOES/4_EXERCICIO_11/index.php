<?php

    $operacao = "5" * 12;

    echo $operacao . "<br>";

    echo gettype($operacao) . "<br>";
    echo gettype([]) . "<br>";
    echo gettype(12.2) . "<br>";
    echo gettype("teste") . "<br>";

?>