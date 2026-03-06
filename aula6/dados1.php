<?php

    $dado = $_POST['dado']; // pegar dados do form
    $radio = $_POST['opcao'];
    $hobbies = $_POST['hobbies'];

    echo "$radio<br>";
    echo "$dado<br>";
    echo "$hobbies<br>";
    
    echo "<a href=form1.php>Voltar ao form</a>";
?>