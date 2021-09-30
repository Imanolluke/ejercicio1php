
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 4</h1>
<p>Dado una palabra indica si es palindromo. Un palíndromo es una 
palabra o frase que se lee igual de izquierda a derecha que de 
derecha a izquierda. </p>
<?php

$palabra = "amor a roma";
$boolean = true;

for ($i=0; $i < strlen($palabra) ; $i++) { 
    if (substr($palabra, $i, 1) != substr($palabra, strlen($palabra) - 1 - $i, 1) ) {
        $boolean = false;
    }
}
if ($boolean == true) {
    echo "Es palindromo";
}else{
    echo "No es palindromo";
}


?> 

</body>
</html> 