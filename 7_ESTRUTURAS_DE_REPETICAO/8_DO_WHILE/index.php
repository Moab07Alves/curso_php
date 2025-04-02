<?php

    $j = 0;
    $teste = "Moab";

    do {
        echo "Testando o do while $j <br>";
        if($j == 2) {
            echo "$teste <br>";
        }
        $j++;
    } while($j < 10); 


    $i = 10;

    do {
        echo "Testando o do while 2 $i <br>";
        if($i == 2) {
            echo "$teste <br>";
        }
        $i--;
    } while($i > 0);

?>