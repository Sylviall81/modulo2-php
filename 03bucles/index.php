<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>
Crear un array con nombres de personas.
Recorrer el array con un bucle foreach.
Mostrar un mensaje personalizado sólo a cada persona cuyo nombre empieza por “p”.</p>

<p>
Debemos utilizar forEach, if, y strtolower(string) </p>

<?php

$names = array("María", "José", "Pablo",'patricia',"Carolina", "Gregorio", "Cristina", "Cipriano","Penelope","Elena","PEPITA", "Daniel");

echo 'var dump: </br>';
var_dump($names).'</br>';

echo '</br>';
echo '</br>';

echo 'print r:</br>';
print_r($names).'<br>';

echo '</br>';
echo '</br>';


foreach ($names as $name){
   
   if (str_starts_with(strtolower($name),'p')){
    echo $name.'<br/>';
   };

}







?>

    
</body>
</html>