<?php

    //nós programadores fazemos e usamos funções

    //Declaração da Função
    function somar(){

        //Implementação da função (metodo)
        echo "faz a soma". "<br>";
        $numero1 = 3;
        $numero2 = 7;
        $soma = $numero1 +$numero2;
        echo "O resultado da soma é: $soma";
    }
    function ComParametro($numero1,$numero2){
        $soma = $numero1 +$numero2;
        echo "Total da soma com paramêtros: $soma";
    }
?>