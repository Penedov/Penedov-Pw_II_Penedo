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

    echo "<\tr>";
    // Laço de repetição For - While - Do while

    //FOR = SE
    for($i = 2;$i<=100;$i = $i + 2){
        echo $i . "</br>";
        if($i % 2 == 0){
            echo "<h2 style  = 'color:#f333'> $i </h1>";
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


    ?>
</body>
</html>