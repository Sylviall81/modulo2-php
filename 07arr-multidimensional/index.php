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


    $agenda = array(

    array (
        'nombre' => 'María',
        'apellido' => 'Olmo',
        'teléfono' => '616260746',
        'email' => 'fakeOne@mail.com'
    ),
     array (
        'nombre' => 'Elena',
        'apellido' => 'Gutierrez',
        'teléfono' => '618240779',
        'email' => 'fakeTwo@mail.com'
    ),
    array (
        'nombre' => 'Pablo',
        'apellido' => 'Rodríguez',
        'teléfono' => '618240976',
        'email' => 'fakeThree@mail.com',
    )

    );


    print_r($agenda);
    echo '<hr>';

    echo '<br>';
    echo 'mostrar con un for each clave valor (hay q usar dos foreach) <br>';
    echo '<br>';
    foreach ($agenda as $contacto => $data){ //el primer for each entra en  agenda y recorre el item de 1er nivel (contacto) 
        //el segundo recorre el array contacto y desglosa las key
          foreach ($data as $key => $value){
           echo $key.':'.$value.'<br>';
          }
          echo '<hr>';
}



    ?>





</body>

</html>