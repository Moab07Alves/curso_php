<?php

    $j = 0;
    $nome = "Moab";
    
    //CONTADOR; CONDIÇÃO; INCREMENTO/DECREMENTO
    for($i = 0; $i < 10; $i++) {
        if($i == 4) {
            echo "$nome <br>";
        }
        if($i == 8) {
            break;
        }
        echo "Testando o for $i <br>";
    }

?>