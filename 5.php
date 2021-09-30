
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 5</h1>
<p>Queremos controlar la entrada a una atracción del parque. Se 
pueden subir los mayores de 10 años o los que midan más de 120 
cm. Si el menor está ‘acompañado’ se le permite subir a la 
atracción si la edad es mayor de 6 años, no importa la altura. </p>

<?php

$edad = 10;
$altura = 120;
$acompañado = false;
$entrada="";

if($edad >= 10 || $altura >= 120){
    $entrada = "si";
}else if($acompañado!= false && $edad>=6){
    $entrada = "si";
}else{
    $entrada = "no";
}

echo "¿Puede entrar? $entrada";



?> 

</body>
</html> 