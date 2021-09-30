
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 9</h1>
<p>Queremos calcular la comisión de un vendedor. La comisión es 
el importe de las ventas más un porcentaje que va en función 
de la cantidad de ventas. Si ha vendido menos de 10.000 € es 
un 5%, entre 10.000 y 20.000 un 8%, entre 20.000 y 40.000 un 
10% y más de 40.000 un 13%.
 </p>
<?php

$comision=0;
$ventas = 12000;

if($ventas <10000){
    $comision = 5;
}else if($ventas>=10000 && $ventas <20000){
    $comision = 8;
}else if($ventas>=20000 && $ventas <40000){
    $comision = 10;
}else if($ventas>=40000){
    $comision = 13;
}

echo "las ventas has sido de: " . $ventas . " por lo que
la comision será de :" . $comision . "%";







?> 

</body>
</html> 