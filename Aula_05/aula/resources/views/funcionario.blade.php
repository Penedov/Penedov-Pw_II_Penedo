<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header> 
        
    </header>

    <section>
        <h1> Dados dos funcionario </h1>
    </section>

    <section>
        <form action="/funcionario" method="post">
            @csrf

            <div>
                <label> Nome </label>
                <input type="text" name="txNome" />
            </div>

            <div>
                <label> E-mail </label>
                <input type="text" name="txEmail" />
            </div>

            <div>
                <label> Assunto </label>
                <input type="text" name="txAssunto" />
            </div>

            <div>
                <label> Mensagem </label>
                <textarea name="txMensagem"></textarea>
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </section>

    <section>
        @foreach($funcionarios as $f)
            <p> ID: {{$f->idfuncionario}} </p>
            <p> Nome: {{$f->nome}} </p>
            <p> {{$f->datacontratacao}} </p>
            <p> {{$f->telefone}} </p>
            <p> {{$f->email}} </p>      
        @endforeach
    </section>

    <footer>

    </footer>
    
</body>
</html>