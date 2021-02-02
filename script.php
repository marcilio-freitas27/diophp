<?php

session_start();
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagemSessao.php';

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
validaNome($nome);
validaIdade($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i=0; $i < count($categoria) ; $i++) 
    { 
        if($categoria[$i] == 'Infantil')
        {
            $_SESSION['msg'] =  "<p style='color:green'>O nadador " . $nome . " compete na categoria Infantil</p>";
            header("location: index.php");

        }
    }
} 
else if($idade >= 13 && $idade <= 18)
{
    for($i=0; $i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Juvenil')
        {
            $_SESSION['msg'] = "<p style='color:green'>O nadador " . $nome . " compete na categoria Juvenil</p>";
            header('location: index.php');
        }
    }
} 
else
{
    for($i=0;$i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Adulto')
        {
            $_SESSION['msg'] = "<p style='color:green'>O nadador " . $nome . " compete na categoria Adulto</p>";
            header('location: index.php');
        }
    }
}
