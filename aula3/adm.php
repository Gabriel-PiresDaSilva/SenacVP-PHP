<?php

session_start();

if(isset($_SESSION['email']) && isset($_SESSION['senha']))
{
    echo "Bem-vindo, você está conectado";
    echo "<br><a href='logout.php'>Sair da conta</a>";
}
else
{
    header('location:formulario.php');
}   

?>