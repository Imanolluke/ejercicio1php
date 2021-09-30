
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilo.css">
</head>
<body>      

<h1>Exercise 10</h1>
<p>Disponemos de los siguientes datos: 
- El importe de la cesta de la compra $total_compra, número 
con dos decimales.  
- La variable $tipo_compra puede contener 'mascotas' o 'ropa'. 
 
Escribe el código necesario para implementar: 
Si la compra del cliente es inferior a 19 euros: 
❖ si los productos son de mascotas se mostrará un mensaje: 
"No se puede realizar el envío". 
❖ si los productos son de ropa se le mostrará el siguiente 
mensaje: "Los gastos de envío son 9 euros". 
Si la compra tiene un importe entre 19 y 40 euros se le 
indicará el mensaje: "Los gastos de envío son 9 euros". 
Si la compra supera los 80 euros deberemos indicar un mensaje 
de que los portes de envío son gratis. 
Mostrar el precio final de la compra teniendo en cuenta que 
hay que añadir un 10% de iva si se trata de mascotas y un 21% 
si se trata de ropa. 
 </p>
<?php

$total_compra=30;
$tipo_compra="mascotas";
$iva=0;
$gastos =0;

if($total_compra < 19 && $tipo_compra=="mascotas"){
    echo "No se puede realizar en envio <br>";

}else if($total_compra < 19 && $tipo_compra=="ropa"){
    echo "Los gastos de envio son de 9 euros <br>";
    $gastos = 9;
}else if($total_compra>=19 && $total_compra<=40){
    echo "Los gastos de envio son de 9 euros <br>";
    $gastos = 9;
}else if($total_compra>80){
    echo "Los gastos de envio son gratis <br>";
}

if($tipo_compra == "ropa"){
    $iva = 0.10;
}else{
    $iva = 0.21;
}

$iva = $total_compra*$iva;
$total = $total_compra + $iva +$gastos;
echo "la compra es de: $total_compra <br>"; 
echo "el importe del iva es de: " . $iva . "<br>";
echo "el total es de: ". $total;



?> 

</body>
</html> 