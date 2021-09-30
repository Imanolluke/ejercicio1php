
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 2</h1>
<p>A partir de tres números, mostrar el mayor de ellos.</p>
<?php

$num1 = 18;
$num2 = 8;
$num3 = 12;
$max=0;
$array = [$num1,$num2,$num3];

for ($i=0; $i< sizeof($array); $i++) { 
    if($array[$i]>$max){
        $max = $array[$i];
    }

}

echo "the biggest number is: " . "$max";


?> 

</body>
</html> 