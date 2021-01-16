<?php

$categoria = [];
$categoria[] = 'Infantil';
$categoria[] = 'Juvenil';
$categoria[] = 'Adulto';

$nome = 'Eduardo';
$idade = 15;
if($idade >= 6 && $idade <= 12)
{
    for($i=0; $i < count($categoria) ; $i++) 
    { 
        if($categoria[$i] == 'Infantil')
            echo "O nadador " . $nome . " compete na categoria Infantil";
    }
} 
else if($idade >= 13 && $idade <= 18)
{
    for($i=0; $i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Juvenil')
            echo "O nadador " . $nome . " compete na categoria Juvenil";
    }
} 
else
{
    for($i=0;$i < count($categoria) ; $i++)
    {
        if($categoria[$i] == 'Adulto')
            echo "O nadador " . $nome . " compete na categoria Adulto";
    }
}
