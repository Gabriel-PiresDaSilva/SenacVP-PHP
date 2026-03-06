<?php

session_start();

include "connection.php";

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysqli_query($link, "select * from tb_users where email = '$email' and senha = '$senha'");

if($sql)
{
    $registroEncontrado = mysqli_num_rows($sql);

    if($registroEncontrado)
    {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        echo 'Conectado';
    }
    else
    {
        header('location:form_login.php');
    }
}
else
{
    echo'erro';
}


