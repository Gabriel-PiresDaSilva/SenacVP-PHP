<?php

// mensagem();
// echo "<br>";
// exibirNome("Gabriel");

// somar(5,5);

// echo "<br>";

// notasAluno(10,10,5,10);


// function mensagem()
// {
//     echo "<hr><h1>Curso de PHP</h1>";
//     echo "Aula 5";
//     echo "<br><a href=../aula1.1.php target=_blank  >Aula 1</a>";
// }

// //função com parametro.
// function exibirNome($nome)
// {
//     echo "<h1>$nome</h1>";
// }

// function somar($a,$b)
// {
//     $soma = $a + $b;
//     echo "<hr> O resultado da soma entre 'a' e 'b' é: $soma";

// }

// function notasAluno($n1,$n2,$n3,$n4)
// {
//     $media = ($n1+$n2+$n3+$n4) / 4;
    
//     if($media >= 6)
//     {
//         echo "Aprovado com a media $media";
//     }
//     elseif($media < 3)
//     {
//         echo "Reprovado com a media $media";
//     }
//     else
//     {
//         echo "Recupeção com a media $media";
//     }

// }


// tabuada(2,10);

// tabuada(abs(-3),abs(10));

// function tabuada($tab,$limite)
// {
//     for($i = 1; $i <= $limite; $i++)
//     {   
//         $result = $tab * $i;
//         echo "$tab * $i = $result<br>"; 
//     }
//     echo "<hr>";
// }


//função com retorno.
$res = calcular();
echo "$res";

function calcular()
{
    $valor = 100;
    return $valor;
}


?>