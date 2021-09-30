
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


$num  = 4;
$star=1;
if($num%2==0){
    $num = $num+1;
}

for($i=1; $i<$num;$i++){
 
    for($x=$num-$i;$x>1;$x--){
        echo "&nbsp&nbsp";
    }
         for($j = 0;$j<$star; $j++){
           
            echo "*";
            
        }
  
    
    $star = $star+2;
    echo "<br>";
}





?> 

</body>
</html> 