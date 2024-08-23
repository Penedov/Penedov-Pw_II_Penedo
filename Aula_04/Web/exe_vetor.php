<?php
//Declaração de vetor

    $v = Array();
    
    //passando valores para os indices

    $v[0] = 8;
    $v[1] = 5;
    $v[2] = 4;
    $v[3] = 3;
    $v[4] = 6;

    echo "Tamanho do meu vetor: " . count($v);

    //laço de repetição para correr o array
    for($i = 0; $i< count ($v) ; $i++ ){

        echo "<p> $v[$i] </p>";
    }
?>