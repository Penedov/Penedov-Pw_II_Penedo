<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
    <?php include ('metodo.php');
        //importando a pagina metodos a partie de 'include'

        //traz as funções dento do metodo
        exbirSaudacoes();
        VerificarIdade(19);
        echo VerificarCPF("59415748869");
        echo "<br>";

    ?>

</body>
</html>