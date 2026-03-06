<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrude</title>
</head>
<body>

    <a href="include.php?page=page2.php">Ir para a pagina 2</a><br>

    <?php
    
        $pagina = empty($_GET['page']) ? "default.php":$_GET['page'];
        include $pagina;

    ?>
    
</body>
</html>