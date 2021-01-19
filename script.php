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
    $_SESSION['msg'] = "<p style='color:red'>O nome não pode ser vazio.</p>";
    header("location: index.php");
    // não executa o restante
    return;
}

// se conter menos q 3 caracteres
if(strlen($nome) < 3)
{
    $_SESSION['msg'] = "<p style='color:red'>O nome deve conter mais de 3 caracteres.</p>";
    header("location: index.php");
    return;
}

if(strlen($nome) > 40)
{
    $_SESSION['msg'] = "<p style='color:red'>O nome é muito extenso.</p>";
    header("location: index.php");
    return;
}

// exclamação: negação a direita
// se é numerico ou não
if(!is_numeric($idade))
{
    $_SESSION['msg'] = "<p style='color:red'>Informe um numero para idade.<p/P";
    header("location: index.php");
    return;
}

if($idade >= 6 && $idade <= 12)
{
    for($i=0; $i < count($categoria) ; $i++) 
    { 
        if($categoria[$i] == 'Infantil')
            $_SESSION['msg'] =  "<p style='color:green'>O nadador " . $nome . " compete na categoria Infantil</p>";
            header("location: index.php");
            return;
    }
} 
else if($idade >= 13 && $idade <= 18)
{
    for($i=0; $i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Juvenil')
            $_SESSION['msg'] = "<p style='color:green'>O nadador " . $nome . " compete na categoria Juvenil</p>";
            header('location: index.php');
    }
} 
else
{
    for($i=0;$i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Adulto')
            $_SESSION['msg'] = "<p style='color:green'>O nadador " . $nome . " compete na categoria Adulto</p>";
            header('location: index.php');
    }
}
