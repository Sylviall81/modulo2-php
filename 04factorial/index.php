<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p>
Haz dos programas en PHP que calculen el factorial de un número usando uno de ellos un  bucle while y el otro una función recursiva.</p>



<?php


//factorial con while

$num = 4;

$i= 1;

function calculoFactorial($num){

    global $i;
    $factorial = 1;

    while($i <= $num){
        $factorial *= $i;
        $i++;
        echo 'fin vuelta'.$i.' '. $factorial.'</br>';
    }

    return $factorial;

};

echo calculoFactorial($num).'</br>';
echo '</br>';


// factorial recursiva 

$factorial = 1;

function factorialRecursiva($num){

    global $factorial;

if ($num == 0 || $num == 1){

    return 1;

}else{

   echo 'empieza'.$factorial *= $num;
   echo '</br>';
   echo 'llama a la recursiva (num-1) *'.($num-1).' -resultado: '.factorialRecursiva($num-1).'</br>';

    return $factorial;

}

}

echo 'recursiva: '.factorialRecursiva($num).'</br>';


?>

    
</body>
</html>