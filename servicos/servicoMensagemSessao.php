<?php

session_start();
function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['msg'] = $mensagem;
}
function setarMensagemErro(string $mensagem) : void
# retorno vazio: void
{
    # encapsula aqui
    # guardar na sessão a msg que foi passada
    $_SESSION['msg-erro'] = $mensagem;

}

function obterMensagemErro() : ?string
#devolve uma string
{
    if(isset($_SESSION['msg-erro']))
    
        return $_SESSION['msg-erro'];
    
    # ? coringa= retorna string ou null
    return null;
}

function removerMensagemSucesso() : void
{
    if(isset($_SESSION['msg']))
    
        unset($_SESSION['msg']);
    
}

function removerMensagemErro() : void
{
    if(isset($_SESSION['msg-erro']))
    
        unset($_SESSION['msg-erro']);
    
}