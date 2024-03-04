<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
</head>
<body>
    <?php
   // phpinfo();

   echo '<h1>HOLA MUNDO</h1>';

   print '<h2>texto con print</h2>';

    ?>

    <h3>Ejercicio 1</h3>

    <p>Declarar variables en php para almacenar tu nombre apellido, edad y ciudad natal. 
        Imprimir el valor de las variables en la pantalla</p>

        <?php 
        
        $nombre = 'Sylvia';
        $apellido = 'Llorente';
        $ciudad = 'Maracaibo (Vzla)';
        $edad = 42;

        echo '<ol> <li>Nombre completo: '.$nombre.' '.$apellido.
        '</li><li>Ciudad: '.$ciudad.'</li><li>Edad: '.$edad.'</li></ol>';


        function showUserData(){

            global $nombre, $apellido, $ciudad, $edad;

            return '<ol> <li>Nombre completo: '.$nombre.' '.$apellido.
            '</li><li>Ciudad: '.$ciudad.'</li><li>Edad: '.$edad.'</li></ol>';

        }

        

        echo 'mostrar data con una funcion <br>'.showUserData();
        // exit;

        $ciudad_actual= 'Barcelona';

        echo $ciudad_actual.'</br>';
       
       
        ?>

<h3>Extra variables Odin Project</h3>

<p>Try the following exercises:

<ol>

<li>
Add 2 numbers together!</li>
<li>
Add a sequence of 6 different numbers together.</li>

<li>Print the value of the following expression: (4 + 6 + 9) / 77</li>
<li>Let’s use variables!
Type and print variable a = 10</li>


<li>try 9 * a;</li>

<li> b = 7 * a </li>

<li>print b</li>

<li>declare variable $max with value 57</li>
<li>another variable $actual with value max-13</li>
<li>Set another variable percentage to actual / MAX</li>
<li>print percentage</li>

</ol>

</p>

<?php 

echo 'suma dos numeros';
echo '<br>';
$suma = 6+3;
echo $suma;
echo '<br>';

echo 'suma 6 numeros';
echo '<br>';
$sumaSix = 3+4+5+6+7+8;
echo $sumaSix;
echo '<br>';

echo 'print value of (4 + 6 + 9)/77 <br>';
$value = 4+6+9 / 77;
echo  'resultado: '.$value;
echo '<br>';

echo 'var a = 10 <br>';
$a = 10;
echo  'a: '.$a;
echo '<br>';







?>
    
</body>
</html>