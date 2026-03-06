<?php
 
include "connection.php";
 
$nome_curso = $_POST['nome_curso'];
$duracao = $_POST['duracao'];
 
$sql = mysqli_query($link, "insert into tb_curso(nome_curso,duracao) values('$nome_curso','$duracao')");
    echo "<a href=form_inserir.php>Inserir outro registro</a>";
 
   
?>