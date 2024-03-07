<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Asociativo</title>
</head>
<body>

<h1>Arrays asociativos</h1>

<?php
//creamos array
$listaCoches = array(
    "modelo"=> "Solterra",
    "marca" => "Subaru",
    "color"=>"verde"
);
echo "Array Original";
echo "<br>";
print_r($listaCoches);
echo '<br>';
echo "<br>";
echo "ACCEDER al valor de una key: modelo<br>";
echo $listaCoches["modelo"]."<br>";
echo "<br>";
echo "MODIFICAR el valor de una key:<br>";
$listaCoches ["modelo"]= "Forrester";
echo $listaCoches["modelo"]."<br>";
print_r($listaCoches);
echo '<br>';
echo "<br>";
echo "AÑADIR key--> array_push no funciona con array asociativos solo 
si tiene key numerica, la key se mete con los corchetes y dandole un valor";
$listaCoches['año'] = '2005';
echo '<br>';
print_r($listaCoches);
echo '<br>';
echo "<br>";

echo "ELIMINAR: unset y splice, array_diff<br>";
echo "<br>";
echo "1.Eliminar key-> marca con unset :<br>";
unset($listaCoches['marca']);
echo "<br>";
foreach ($listaCoches as $coche => $caracteristica){
echo $coche.":".$caracteristica.'<br>';

}
echo "<br>";
print_r($listaCoches);
echo "<br>";
echo "ORDENAR: sort y asort()  ascendente y descendente por clave y valor (ver en w3school)<br>";
echo "<br>";

echo "1.Ordenar por valor (ordena por orden alfabetico y 1o pone los numeros y es case sensitive pone mayusculas antes):<br>";
echo "<br>";
asort($listaCoches);
foreach ($listaCoches as $coche => $caracteristica){
    echo $coche.":".$caracteristica.'<br>';
    
    }

    echo "<br>";
echo "1.Ordenar por clave :<br>";
ksort($listaCoches);
foreach ($listaCoches as $coche => $caracteristica){
    echo $coche.":".$caracteristica.'<br>';
    
    }

    echo "<br>";





?>



    
</body>
</html>