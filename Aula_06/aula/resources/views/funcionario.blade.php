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
        <h1> Dados dos funcionarios </h1>
    </section>

    <section>
        <form action="/funcionario" method="post">
            @csrf

            <div>
                <label> Nome </label>
                <input type="text" name="txtnome" />
            </div>

            <div>
                <label> Data de Contratação </label>
                <input type="date" name="datecontratacao" />
            </div>

            <div>
                <label> telefone </label>
                <input type="text" name="txttelefone" />
            </div>

            <div>
                <label> email </label>
                <input type="text" name="txtemail" />
            </div>

            <div>
                <label> CPF </label>
                <input type="text" name="txtcpf" />
            </div>

            <div>
                <label> Endereço </label>
                <input type="text" name="txtendereco" />
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
            <p> {{$f->cpf}} </p>
            <p> {{$f->endereço}} </p>      
        @endforeach
    </section>

    <footer>

    </footer>
    
</body>
</html>