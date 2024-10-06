<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <section>
            <h1>
                Dados dos Produtos
            </h1>
        </section>

        <section>
            <form action="/produto" method="post">
                @csrf

                <div>
                    <label>
                        nome do produto
                    </label>
                    <input type="text" name="txtnome"/>
                </div>

                <div>
                    <label>
                        quantidade
                    </label>
                    <input type="number" name="numquantidade"/>
                </div>

                <div>
                    <label>
                        categoria
                    </label>
                    <input type="text" name="txtcategoria"/>
                </div>

                <div>
                    <label>
                        valor
                    </label>
                    <input type="number" name="numvalor"/>
                </div>

                <div>
                    <label>
                        marca
                    </label>
                    <input type="text" name="txtmarca"/>
                </div>

                <div>
                    <label>
                        Data de Fabricação
                    </label>
                    <input type="date" name="datefabricacao"/>
                </div>

                <div>
                    <input type="submit" value="Enviar"/>
                </div>
            </form>
        </section>

        <section>
            @foreach($produto as $p)
            <p>{{$p->idproduto}}</p>
            <p>{{$p->nome}}</p>
            <p>{{$p->quantidade}}</p>
            <p>{{$p->categoria}}</p>
            <p>{{$p->valor}}</p>
            <p>{{$p->marca}}</p>
            <p>{{$p->datafabricacao}}</p>
            @endforeach
        </section>
    </body>
</html>