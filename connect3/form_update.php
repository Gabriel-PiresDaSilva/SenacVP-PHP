<?php

include "connection.php";
@$cod = $_GET['cod'];
$sql = mysqli_query($link, "select * from tb_postagens where cod = '$cod'");

while($res = mysqli_fetch_array($sql))
{
    $cod_postagem = $res['cod'];
    $titulo = $res['titulo'];
    $texto = $res['texto'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
    <form action="update.php" method="post">

    <input type="text" name="titulo" value="<?php echo $titulo?>"><br>
    <input type="text" name="texto" value="<?php echo $texto?>"><br>
    <input type="hidden" name="cod" value="<?php echo $cod?>"><br>
    <input type="submit" value="Atualizar">


    </form>

</body>
</html>