<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form action="dados1.php" method="post">

        <input type="text" name="dado"><br>
        <input type="radio" name="opcao" value="php" checked> php <br>
        <input type="radio" name="opcao" value="C#"> C# <br>
        
        <select name="hobbies">

            <option value="games">Games</option>
            <option value="estudar" selected>Estudar</option>
            <option value="desenhar">Desenhar</option>
            <option value="dormir">Dormir</option>

        </select>
        <input type="submit" value="Enviar">
        


        
    </form>
    
</body>
</html>