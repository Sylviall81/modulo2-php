<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Array Multidimensional</h1>


    <p>Crea una agenda con datos de 3 contactos. Cada contacto tendrá nombre, teléfono y correo electrónico.
        Muestra los resultados.

        Después de imprimir el resultado añade otro contacto y cambia el teléfono del primer contacto. Vuelve a imprimir el resultado.
    </p>



    <?php


    $agenda = [

    $contacto = [
        'nombre' => 'María',
        'apellido' => 'Olmo',
        'teléfono' => '616260746',
        'email' => 'fake@mail.com'
    ],
    $contacto = [
        'nombre' => 'Elena',
        'apellido' => 'Gutierrez',
        'teléfono' => '618240976',
        'email' => 'fake@mail.com'
    ],
    $contacto = [
        'nombre' => 'Pablo',
        'apellido' => 'Rodriguez',
        'teléfono' => '618240976',
        'email' => 'fake@mail.com',
    ],

    ]

    // print_r($movie);

    // echo '<br>';
    // echo '<hr>';

    // echo '<h3>Acceder</h3>';
    // echo 'imprimir solo valor:<br>';
    // echo $movie['title'];


    // echo '<br>';
    // echo '<hr>';

    // echo '<h3>Modificar</h3>';
    // echo 'modificar valor de una llave(key) genero Drama cambia a crime<br>';
    // echo $movie['genre'] = 'crime';
    // echo '<br>';

    // print_r($movie);

    // echo '<br>';
    // echo '<hr>';

    // echo '<h3>Añadir</h3>';
    // echo 'añadir nueva key, añado el rating de la peli<br>';
    // echo $movie['rating'] = '9.2';
    // echo '<br>';
    // print_r($movie);

    // echo '<br>';
    // echo '<hr>';

    // echo '<h3>Eliminar</h3>';

    // echo 'ejemplo unset: eliminar el key "rating" ';

    // unset($movie["rating"]); //Unset elimina ese key del array
    // echo '<br>';
    // print_r($movie);

    // echo '<br>';
    // echo '<hr>';


    // echo ' ejemplo array_diff:(crea un nuevo array eliminando algun valor de las key q uno le indique)';
    // echo '<br>';
    // echo '<br>';


    // echo 'array $movie:';
    // print_r($movie);
    // echo '<br>';
    // echo '<br>';
    // echo 'creo un nuevo array a partir de movie pero eliminando el valor dentro del key "genre" <br>';
    // echo 'aplico array_diff y creo $nueva_peli: <br>';
    // //array_diff Crea un nuevo array sin el/los elemento/s
    // echo '<br>';
    // $nueva_peli = array_diff($movie, ["crime"]);
    // print_r($nueva_peli);

    ?>











    <!-- <h2>Lista de participantes:</h2>

<ol>
    <?php

    foreach ($arrayParticipantes as $participante) {
        echo '<li>' . $participante . '</li>';
    };
    ?>
</ol>



<div class ="container">
    
            <h2> Ganadores:</h2>
            <ol>
        <?php
        foreach ($indexGanadores as $numOrder) {
            echo '<li>' . $arrayParticipantes[$numOrder] . '</li>';
        };
        ?>
            </ol>

</div> -->




</body>

</html>