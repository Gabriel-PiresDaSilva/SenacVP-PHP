<link rel="stylesheet" href="style.css">

<?php

include "connection.php";

$sql = mysqli_query($link, "select * from tb_postagens");

while($res = mysqli_fetch_array($sql))
{
    $cod = $res['cod'];
    $titulo = $res['titulo'];
    $texto = $res['texto'];

    echo "<div class=box>";
    echo "<h1>$titulo</h1>";
    echo "<p>$texto</p><br>";
    echo "<p>";
    echo "<a href=form_update.php?cod=$cod>Atualizar</a>";
    echo "<a href=deletar.php?cod=$cod>Deletar</a>";
    echo "</p>";
    echo "/<div>";
}

?>