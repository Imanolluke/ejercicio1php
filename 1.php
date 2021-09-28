
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 1</h1>

<?php

$pisos = 4;
$puertas = 2;
$counter = 1;
$array = ["A", "B", "C", "D", "E"];
echo "<table>";
for ($i=0; $i< $pisos; $i++) { 
echo "<tr>";
    for ($j=0; $j < $puertas ; $j++) { 
        echo"<td>";
        echo "$counter" . "-" . $array[$j]. " ";
        echo "</td>";
 
        
    }
    echo "</tr>";
    $counter++;
 
    echo "<br>";
}
//echo "</tr>";
echo "<br>";
echo "</table>";


?> 

</body>
</html> 