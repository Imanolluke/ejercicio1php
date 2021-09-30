
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 7</h1>
<p>Implementar la siguiente operación, aplicable a cualquier             
número entero positivo: 
●Si el número es par, se divide entre 2. 
●Si el número es impar, se multiplica por 3 y se suma 1. 
 
Al final siempre obtenemos uno. 
Ejemplo:  13, 40, 20, 10, 5, 16, 8, 4, 2, 1.</p>
<?php

$num  = 20;
$resultado = $num;
echo "$resultado" .",";
do{
    if ($num%2==0){
        
        $resultado = $num/2;
        echo "$resultado" .", ";
    }else if($num%2!=0){
        $resultado = $num*3+1;
        echo "$resultado" .", ";
    }
    $num = $resultado;
}while($resultado!=1);





?> 

</body>
</html> 