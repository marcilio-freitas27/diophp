<?php

//funções no php
//tipagem de retorno : bool
//checagem de tipo mais rigida
//declare('strict type=1');

function validaNOme(string $nome) : bool
{
    // se for vazio
    if(empty($nome))
    {
        $_SESSION['msg-erro'] = "<p style='color:red'>O nome não pode ser vazio.</p>";
        header("location: index.php");
        // não executa o restante
        return false;
    }

    // se conter menos q 3 caracteres
    else if(strlen($nome) < 3)
    {
        $_SESSION['msg-erro'] = "<p style='color:red'>O nome deve conter mais de 3 caracteres.</p>";
        header("location: index.php");
        return false;
    }

    // maior que 40
    else if(strlen($nome) > 40)
    {
        $_SESSION['msg-erro'] = "<p style='color:red'>O nome é muito extenso.</p>";
        header("location: index.php");
        return false;
    }
    return true;

}

function validaIdade(string $idade)
{
    // exclamação: negação a direita
    // se é numerico ou não
    if(!is_numeric($idade))
    {
        $_SESSION['msg-erro'] = "<p style='color:red'>Informe um numero para idade.<p/P";
        header("location: index.php");
        return;
    }

}

