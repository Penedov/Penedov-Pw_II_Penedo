<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php

          //Estrutura de Condição do 
    $mes = 1;

    switch($mes){
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        default:
            echo "Mês Invalido";
            break;
    }

  
    // Laço de repetição For - While - Do while

    //FOR = SE
    // forma de colocar style no PHP Par = vermelho Impar = Azul
    for($i = 1 ;$i<=100;$i++){
        if($i % 2 == 0){
            echo "<h2 style  = 'color:red'> $i </h2>";
        }
        else{

            echo "<h2 style  = 'color:blue'> $i </h2>";
        }
    }
    echo "</br>" . "</br>";

    //WHILE = ENQUANTO
    $i = 2;
    while($i<=100){
        echo "$i " ."</br>" . " </br>";
        $i = $i + 2;
    }

    echo "</br>";
    // DO WHILE = FAÇA ENQUANTO
    $i = 0;
    do{

        echo $i . "</br>";
        $i = $i + 2;
    }
    while($i <= 100);


    // Tabuada utilizando o For
    for($i=0;$i<=10;$i++){

        $x = 9;
        $res = $x * $i;
        echo $x . " x " . $i . " = " . $res . "<br>";
    }



    ?>


    
</body>
</html>