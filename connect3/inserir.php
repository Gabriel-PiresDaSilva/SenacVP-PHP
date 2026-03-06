<?php

include "connection.php";

$titulo = $_POST['titulo'];
$texto = $_POST['texto'];
$cod = $_POST['cod'];

mysqli_query($link, "insert into tb_postagens(cod_user,titulo,texto) values ('$cod','$titulo','$texto')");
header('location:exibir_dados.php');

?>