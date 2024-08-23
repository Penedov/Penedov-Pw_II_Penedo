<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conatct</title>
</head>
<body>

<!-- formulario com os campos: nomes, email, assunto e mensagem-->
    
    <form action="dadoscontato.php" method="post">
        <div>
            <label>Nome</label>
            <input type="text" name="txnome">
        </div>
        <br>
        <div>
            <label>email</label>
            <input type="text" name="txemail">
        </div>
        <br>
        <div>
            <label>assunto</label>
            <input type="text" name="txassunto">
        </div>
        <br>
        <div>
            <label>mensagem</label>
            <textarea name="txtmensagem"></textarea>
        </div>
        <br>
        <div>
            <input type="submit" value="enviar"/>
        </div>
    </form>
    <br>
</body>
</html>