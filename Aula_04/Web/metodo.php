
<?php
// Fazer uma função, exbindo uma saudação

function exbirSaudacoes(){
    echo "<h1> Olá seja bem-vindo (a)</h1>";
}

// função que exibe o if que detrmina maior ou menor de idade
function VerificarIdade($idade){
    if ($idade<=17){
        echo "<h1> Menor de Idade</h1>";
    }
    else{
        echo "<h1>Maior de Idade </h1>";
    }
}

//Função que tem como paramêtro o cpf e verifica se contém onze digitos
function VerificarCPF($cpf){
    if(strlen($cpf)!=11){
        return false;
    }
    else{
        return true;
    }
}


?>