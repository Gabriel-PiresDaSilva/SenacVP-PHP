<?php

include "connection.php";

$sql = mysqli_query($link, "Select * from tb_users");

while ($res = mysqli_fetch_array($sql))
{
    $nome = $res['nome'];
    $email = $res['email'];

   
    echo"$nome <hr> $email";
   
}


?>