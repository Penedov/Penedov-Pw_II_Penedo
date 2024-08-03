<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP test</title>
        <link rel="website icon" type="png" href="image/icon_php.png">
    </head>
    <body>
        <?php
        //Declaração de Variaveis
        //PHP e uma liguagem de programação de tipagem fraca ex:
        $nome = "Vinicius Santos Penedo";

        // Não é necessario o uso de uma declaraçãO de variavel como int,boolean,caracter,etc. 
        echo '<h1>Hello World</h1>'; 
        echo "<h1>$nome</h1>";
        
        //Usando o "." fazemos a concatenação de duas tag
        echo "Olá ". $nome . " seja bem-vindo(a)";

        //Operadores aritimeticos + - * / %
        echo "<br />";

        $numero1 = 10;
        $numero2 = 10;

        $soma = $numero1 + $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        $subtracao = $numero1 - $numero2;

        //exibindo resultado de soma
        echo "Calculo: ". $numero1. " + ". $numero2 . " = " . $soma;
        echo "<br />";
        echo "<ol type='I'>
        <li style='color:#f333'> $numero1 + $numero2 = $soma</li>
        <li style='color:#f333'>$numero1 - $numero2 = $subtracao</li>
        <li style='color:#f333'>$numero1 * $numero2 = $multiplicacao</li>
        <li style='color:#f333'>$numero1 / $numero2 = $divisao</li>
        </ol>";
        ?>
    </body>
</html>