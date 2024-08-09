<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="Css/style.css">
    </head>
    <body>
    <?php echo "<h1>I am Vinicius, I am good!</h1>";
    
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
        <li style='color:#3c0852'> $numero1 + $numero2 = $soma</li>
        <li style='color:#3c0852'>$numero1 - $numero2 = $subtracao</li>
        <li style='color:#3c0852'>$numero1 * $numero2 = $multiplicacao</li>
        <li style='color:#3c0852'>$numero1 / $numero2 = $divisao</li>
        </ol>";
        echo "<hr>";

        // Operadores logicos || - ou && - e ! - não
        // Operadores relacionais - > (maior que) , >= (maior ou igual a) , == (igual) , != (diferente) , < (menor que) e <= (menor ou igual a)
        //Tomada de decisão

        echo "<h2>Teste logico <strong>Idade</strong></h2>";
        $idadeDoAluno = 16;
        echo "<p> Qual sua idade? </p>";
        echo "R: Minha idade é " . $idadeDoAluno;
        echo "<br>";
        if($idadeDoAluno < 18){
            echo "Maior de idade :)";
        }
        else{
            echo "Menor de idade :(";
        }
        echo "<hr>";

        $mes = 1;
        echo "<h2>Teste IF & ELSE</h2>";
        if($mes>=1 && $mes<=3){
            echo "1° Trimestre";
        }
        else if($mes>=4 && $mes<=6){
            echo "2° Trimestre";
        }
        else if($mes>=7 && $mes<=9){
            echo "3° Trimestre";
        }
        else if($mes>=10 && $mes<=12){
            echo "4° Trimestre";
        }
        else{
            echo "Trimestre invalido";
        }
        echo "<hr>";

        echo "<h1>Exercicio 1</h1>";

        $num = 4 ;
        $antecessor = $num - 1; 
        $sucessor = $num + 1;

        echo "1 - seu numero é: ". $num . " o seu antecessor " . $antecessor . " Sucessor " . $sucessor . "<br>";
        
        $nota1 = 8;
        $nota2 = 7;
        $nota3 = 6;
        $nota4 = 6;

        
        $soma =  $nota1 + $nota2 + $nota3 + $nota4;
        $result = $soma / 4;

        echo "Sua nota final é " . $result . " e você foi " . "<br>" 
        if ($result <= 6){
            echo "Aprovado";
        }
        else{
            echo "Recusado";
        }

        ?>

    </body>
</html>
