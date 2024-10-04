<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @foreach($produtos as $p)
        {{$p->idProduto}}
        {{$p->idCategoria}}
        {{$p->produto}}
        {{$p->quantidade}}
        {{$p->valor}}
        {{$p->dataCadastro}}
    @endforeach
    
</body>
</html>