
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 6</h1>
<p>Dada una potencia y una cantidad mostrar los números, su 
potencia, mientras la potencia sea menor que la cantidad.</p>
<?php

$potencia = 4;
$num  = 20;

for($i=1; $i<=$num; $i++){
    $total=1;
    for($j=1; $j<=$potencia;$j++){
        $total = $total*$i;
    }
    echo $i . " = " . $total;
    echo "<br>";
   // $potencia++;

}





?> 

</body>
</html> 