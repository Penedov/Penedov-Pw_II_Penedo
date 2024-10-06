<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header> 
        
    </header>

    <section>
        <h1> Dados dos cliente </h1>
    </section>

    <section>
        <form action="/cliente" method="post">
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
                <label> Endereço </label>
                <input type="text" name="txEndereco" />
            </div>

            <div>
                <label> Telefone</label>
                <input type="text" name="txTelefone" />
            </div>

            <div>
                <label> Data Cadastro </label>
                <input type="date" name="datacadastro" />
            </div>

            <div>
                <label> Sexo </label>
                <input type="text" name="txSexo" />
            </div>

            <div>
                <label> Data Nascimento </label>
                <input type="date" name="txdatanascimento" />
            </div>

            <div>
                <input type="submit" value="Enviar" />
            </div>

        </form>
    </section>

    <section>
        @foreach($clientes as $c)
            <p> idCliente : {{$c->idclient}} </p>
            <p> Nome : {{$c->nome}} </p>
            <p> Endereço : {{$c->endereco}} </p>
            <p> Telefone : {{$c->telefone}} </p>
            <p> Email : {{$c->email}} </p> 
            <p> Sexo : {{$c->sexo}} </p> 
            <p> Data Nascimento : {{$c->datanascimento}} </p>
            <p> Data Cadastro : {{$c->datacadastro}} </p>   
              

        @endforeach
    </section>

    <footer>

    </footer>
    
</body>
</html>