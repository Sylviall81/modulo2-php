<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
</head>
<body>
   

<h3>Ejercicio 2</h3>

<p>Desarrollar un programa en PHP que calcule el área de un triángulo rectángulo, y la hipotenusa.</p>

<?php 

$base = 3; 
$altura = 4; 

function areaTriangle(){
    global $base, $altura;
    $area = ($base * $altura) / 2;

    return $area;
}

function calcularHipotenusa($base, $altura){

    $hipotenusa = sqrt(pow($base, 2) + pow($altura, 2));
    return $hipotenusa;

}


echo "El área del triángulo es: " . areaTriangle(). "<br>";
echo "La hipotenusa del triángulo es: " . calcularHipotenusa($base,$altura);


?>
    
</body>
</html>