<?php

$numeros = [[10,100,1000],[20,200,2000],[30,300,3000]];

// echo $numeros[0][0];

for($linha = 0; $linha <=2; $linha++)
{
    for($i=0; $i <=2; $i++)
    {
        echo $numeros[$linha][$i]."<hr>";
    }
}

?>