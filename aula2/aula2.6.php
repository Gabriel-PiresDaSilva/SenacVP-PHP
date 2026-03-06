<?php

// $teste = 10 > 5 ? "vivo" : "claro";
// echo $teste;

// $nomeUser = $_POST['nome'];
// echo $nomeUser;

$nomeUser = isset($_POST['nome']) ? $_POST['nome'] : "Nenhum dado foi fornecido";
echo $nomeUser;

?>