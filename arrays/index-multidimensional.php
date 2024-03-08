<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>
    <h1>Array Multidimensional</h1>


    <?php

$listaCoches = array(
    "modelo"=> array("Solterra"),
    "marca" => array ("Subaru"),
    "colores"=> array("verde","azul", "rojo"),
    "año" => array ("2008", "2000")

);

echo "Array Original:<br>";
print_r($listaCoches);
echo "<br>";

foreach($listaCoches as $key){
    print_r($key);
    foreach($key as $categoria => $val){
        echo "<br>";
        echo $categoria." ".$val."<br>";
    }
}


    
    
    
    
    
    
    ?>
    
</body>
</html>