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
        exit;
       
        ?>

<h3>Ejercicio 2</h3>

<p>Desarrollar un programa en PHP que calcule el área de un triángulo rectángulo, y la hipotenusa.</p>

<?php 







?>
    
</body>
</html>