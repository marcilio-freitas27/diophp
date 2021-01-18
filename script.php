<?php

session_start();

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Juvenil';
$categoria[] = 'Adulto';

// trabalhando com o metodos http
// não são visiveis no header

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

// se for vazio
if(empty($nome))
{
    echo "O nome não pode ser vazio";
    // não executa o restante
    return;
}

// se conter menos q 3 caracteres
if(strlen($nome) < 3)
{
    echo "O nome deve conter mais de 3 caracteres";
    return;
}

if(strlen($nome) > 40)
{
    echo "O nome e muito extenso";
    return;
}

// exclamação: negação a direita
// se é numerico ou não
if(!is_numeric($idade))
{
    echo "Informe um numero para idade";
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i=0; $i < count($categoria) ; $i++) 
    { 
        if($categoria[$i] == 'Infantil')
            echo "O nadador " . $nome . " compete na categoria Infantil";
            //header('location: index.php');
    }
} 
else if($idade >= 13 && $idade <= 18)
{
    for($i=0; $i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Juvenil')
            echo "O nadador " . $nome . " compete na categoria Juvenil";
            //header('location: index.php');
    }
} 
else
{
    for($i=0;$i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Adulto')
            echo "O nadador " . $nome . " compete na categoria Adulto";
            //header('location: index.php');
    }
}
