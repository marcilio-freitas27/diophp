<?php 


function defineCategoriaCompetidor(string $nome, string $idade) : ?string
{
    $categoria = [];
    $categoria[] = 'Infantil';
    $categoria[] = 'Juvenil';
    $categoria[] = 'Adulto';
    if(validaNome($nome) && validaIdade($idade))
    {
        if($idade >= 6 && $idade <= 12)
        {
            for($i=0; $i < count($categoria) ; $i++) 
            { 
                if($categoria[$i] == 'Infantil')
                {
                    setarMensagemSucesso("<p style='color:green'>O nadador " . $nome . " compete na categoria Infantil</p>");
                    return null;
                }
            }
        } 
        else if($idade >= 13 && $idade <= 18)
        {
            for($i=0; $i < count($categoria) ; $i++)
            {
                if($categoria[$i] == 'Juvenil')
                {
                    setarMensagemSucesso("<p style='color:green'>O nadador " . $nome . " compete na categoria Juvenil</p>");
                    return null;
                }
            }
        } 
        else
        {
            for($i=0;$i < count($categoria) ; $i++)
            {
                if($categoria[$i] == 'Adulto')
                {
                    setarMensagemSucesso("<p style='color:green'>O nadador " . $nome . " compete na categoria Adulto</p>");
                    return null;
                }
            }
        }
    }
    else
    {
        return obterMensagemErro();
    }
}