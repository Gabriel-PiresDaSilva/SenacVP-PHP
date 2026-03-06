<?php

// $key = true;
// $item = false;

// if($key)
// {
//     if($item)
//     {
//         echo "Stage clear";
//     }
//     else
//     {
//         echo "Procure pelo item";
//     }
// }
// else
// {
//     echo "Procure uma chave";
// }

$conexao = true;
$localizarUser = false;
$userEncontrado = false;

if($conexao)
{
    $localizarUser = true;
}
else
{
    $localizarUser = false;
}

if($localizarUser)
{
    $userEncontrado = true;
}

if($userEncontrado)
{
    echo "Atualizar dados";
}



?>