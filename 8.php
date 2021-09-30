
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 8</h1>
<p>Implementa el código que dada una variable ‘base’ que tiene 
que ser impar, imprima la siguiente figura: 
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