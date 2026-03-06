<?php

$nome = 'Gabriel';
echo $nome;
echo '<h1> Linguagem PHP</h1>';
echo '<p> A linguagem php é usada para o backend</p>';
echo '<a href = "aula1.php">Clique para acessar a aula 1</a>';
echo '<img src="foto1.png" alt="foto de uma montanha" />';
echo '<br>';

echo '<div style="background-color: #09f; width:200px; height:120px">';
echo '</div>';

/*print($nome);
print('<h1> Linguagem PHP</h1>');
print('<p> A linguagem php é usada para o backend</p>');
print('<a href= "aula.php">Clique para acessar a aula </a>');
print('img src"foto1.png" alt="foto de uma montanha"/>');
print('<br>');

print('<div style="background-color: #09f; width: 200px; heigth: 120px;"');
print('/div>');
*/

$item1 = 'Mouse';
$item2 = 'Teclado';
$item3 = 'HeadSet';


echo '<ul>';
echo "<li>$item1</li>";
echo "<li>$item2</li>";
echo '<li>'.$item3.'</li>';
echo '</ul>';

echo "<a href=\"aula1.php\">Link</a>"; //usando aspas duplas.


?>