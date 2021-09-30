
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 3</h1>
<p>Dada una edad muestra el rango de valores entre las que se 
encuentra de 0 a 100.</p>
<?php

$edad = 40;
$array = [0,9,19,29,39,49,59,69,79,89,99];
$min=0;
$max=0;

for($i = 0; $i < sizeof($array);$i++){
    if($edad >=$array[$i]){
        $min = $array[$i];
        $max = $array[$i+1];
    }

}

echo "la edad es: ". $edad . " y se encuentra entre el rango de" . $min . "-" . $max;

?> 

</body>
</html> 