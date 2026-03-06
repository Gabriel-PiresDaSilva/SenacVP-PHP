<?php

include "connection.php";
@$cod = $_GET['cod'];
mysqli_query($link, "delete from tb_postagens where cod = '$cod'");
header("location:exibir_dados.php");
?>