<?php

$nivel = [1,2,3,4,5,6];

// for($i=0; $i <=5; $i++)
// {
//     echo "<h$nivel[$i]>Titulo</h$nivel[$i]>";
// }

$i= 0;

while($i <= 5)
{
    echo "<h$nivel[$i]>Titulo</h$nivel[$i]>";
    $i++;
}

?>