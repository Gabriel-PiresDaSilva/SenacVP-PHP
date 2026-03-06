<?php

include "connection.php";

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$cod = $_POST['cod'];

$sql = mysqli_query($link, "update tb_postagens set titulo = '$titulo' , texto = '$texto' where cod = '$cod'");


header("location:exibir_dados.php")

?>