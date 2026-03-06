<?php

//ternário;

// $nome = 10 > 5 ? 'Allan' : 'Não sei quem é';
// echo $nome;

// $email = isset($_POST['email']) ? $_POST['email'] : 'nada';
// echo $email;
// echo "<br><a href='formulario.php'>Voltar ao form</a>";

//--------------------------------------------------------------------------------------

// $email = empty($_POST['email']) ? 'vazio' : $_POST['email'];
// echo $email;
// echo "<br><a href='formulario.php'>Voltar ao form</a>";


//---------------------------------------------------------------------------------------

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == 'teste@teste.com' && $senha == '123456')
{
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    header('location:adm.php');
}
else
{
    header('location:formulario.php');
}
?>