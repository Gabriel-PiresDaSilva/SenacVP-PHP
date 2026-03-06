<?php

// $email = "teste@teste.com";
// $senha = "123456";
// $ativado = true;

// if($email == "teste@teste.com" && $senha == "123456" && $ativado)
// {
//     echo "Logado";
// }
// else
// {
//     echo "Dados incorretos!";
// }

//-----------------------------------------------------------------------------

$conta = 450;

switch($conta )
{
    case 100:
        echo 'Acertou, o valor é 100';
        break;

    case 150:
        echo 'acertou, o valor é de 150';
        break;

    default:
        echo 'Errou tudo, tem nada a ver';
        break;
}   

?>