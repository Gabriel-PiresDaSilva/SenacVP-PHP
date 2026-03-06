<?php

//Estrutura de decisão.
//if e else
//if simples, composto/aninhado if dentro de outro

$nota = 5;

if($nota >= 5)
{
    echo "Aprovado";
}
else
{
    echo "Reprovado";
}

echo "<hr>";

if($nota >= 7)
{
    echo "Aparovado";
}
else if($nota > 4)
{
    echo "Recuperação";
}
    
else
{
    echo "Reprovado";
}

?>