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
        setarMensagemErro("<p style='color:red'>O nome não pode ser vazio.</p>");
        // não executa o restante
        return false;
    }

    // se conter menos q 3 caracteres
    else if(strlen($nome) < 3)
    {
        setarMensagemErro("<p style='color:red'>O nome deve conter mais de 3 caracteres.</p>");
        return false;
    }

    // maior que 40
    else if(strlen($nome) > 40)
    {
        setarMensagemErro("<p style='color:red'>O nome é muito extenso.</p>");
        return false;
    }
    return true;

}

function validaIdade(string $idade) : bool
# tipo de retorno
{
    // exclamação: negação a direita
    // se é numerico ou não
    if(!is_numeric($idade))
    {
        setarMensagemErro("<p style='color:red'>Informe um numero para idade.<p/P");
        return false;
    }
    return true;

}

