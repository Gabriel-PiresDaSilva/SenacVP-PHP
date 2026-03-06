<link rel="stylesheet" href="style.css">

<?php

include "connection.php";

//resultado da consulta
$sql = mysqli_query($link,"select * from tb_curso");

//verificar quantidade de linhas encontradas  
$linhasEncontradas = mysqli_num_rows($sql);

if($linhasEncontradas)
{
    while($resultados = mysqli_fetch_array($sql))
    {
        $id = $resultados['id'];
        $nome_curso = $resultados['nome_curso'];
        $duracao = $resultados['duracao'];

        echo "<div>";
        echo "$id<br>";
        echo "$nome_curso<br>";
        echo "$duracao<br>";
        echo "</div>";
    }
}

?>



