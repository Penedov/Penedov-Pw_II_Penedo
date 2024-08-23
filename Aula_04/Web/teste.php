<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--RECEBENDO A ENTRADA DO FORMULARIO-->
<form method="post" action="contato.php">
        <label for="entrada">
            Digite Algo: 
        </label>
        <input type="text"  id="entrada" name="entrada">
        <button type="submit">Enviar</button>
    </form>


    <br>
    <!--RECEBENDO O RETORNO DO FORMULARIO-->
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $entrada = $_POST["entrada"];
            echo "Você digitou: " . $entrada;
        }
    ?>

</body>
</html>