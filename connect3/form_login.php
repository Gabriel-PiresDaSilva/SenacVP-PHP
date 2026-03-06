<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

        <form action="login.php" method="POST">

        
        <label for="Login">Realizar Login</label><br><br>
        <label for="email">E-mail: <input type="text" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required> <br></label>
        <label for="senha">Senha: <input type="password" name="senha" value="<?php echo isset($senha) ? $senha : ''; ?>" required> <br><br></label>
        <input type="hidden" name="cod" value="<?php echo isset($cod) ? $cod : ''; ?>">
        <input type="submit" value="Entrar">


        </form>

    
</body>
</html>