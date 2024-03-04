<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Dibuja esta piramide decreciente en pantalla con un bucle</h1>


    <p>****</p>
    <p>***</p>
    <p>**</p>
    <p>*</p>




    <?php

    


$i=4;

    for ($i; $i >= 1; $i--){

        echo 'i: '.$i;

            for ($k = $i; $k >= 1 ; $k--){
              
                echo ' * ';
             
            }
            
            echo '<br>';

              

    }


    


    ?>





</body>

</html>