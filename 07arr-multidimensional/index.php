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
        echo '<h2>'.$data['nombre']." ".$data['apellido'].'</h2>';
        echo '<br>';
          foreach ($data as $key => $value){
           echo $key.':'.$value.'<br>';
          }
          echo '<hr>';
        }

        echo '<br>';
    echo 'agregar un contacto: Fernando Ramirez';
    echo '<br>';
    echo 'se puedes hacer simplemente $agenda[]= "clave: datos del contacto" o array_push($agenda, array(clave:valor)) (Prueba array push sabrina)';
    echo '<br>';
    echo '<br>';

    $agenda[3] = array (
        'nombre' => 'Fernando',
        'apellido' => 'Ramirez',
        'teléfono' => '629987654',
        'email' => 'fakeFour@mail.com'

    );

    array_push($agenda,array(
        'nombre' => 'Sabrina',
        'apellido' => 'Mendez',
        'teléfono' => '326589474',
        'email' => 'fakeFive@mail.com'

    ));

    print_r($agenda);

    echo 'mostrar solo valor (hay q usar dos foreach) <br>';

    foreach ($agenda as $contacto => $data){ //el primer for each entra en  agenda y recorre el item de 1er nivel (contacto) 
        //el segundo recorre el array contacto y desglosa las key
       
        foreach ($data as $value){

           echo $value.'<br>';
          }
          echo '<hr>';
        }

        echo 'cambiar el telefono del primer contacto $array[posicion][key]= "new value" ';
        echo '<br>';
        echo 'en este caso $agenda[0]["teléfono"] = "xxxxxxxx" ';
        echo '<br>';

        //cambiar el telef 
        //No es asi xq asi se crea un nuevo array solo con María (primer usuario  y se le añade un telef
        //$contactoUno = $agenda[0];
        // $contactoUno[2] = '628840747-NEW';
        // print_r($agenda);
        // echo '<hr>';
        // print_r($contactoUno);

        //cambiar el value de un determinado key dentro de un item de un array multidimensional
        $agenda[0]['teléfono'] ='628840747';
        echo 'imprimir cambio 1er contacto:';
        echo '<br>';
        print_r($agenda[0]);

        echo '<hr>';

        echo 'imprimir todo de nuevo <br>';

    foreach ($agenda as $contacto => $data){ //el primer for each entra en  agenda y recorre el item de 1er nivel (contacto) 
        //el segundo recorre el array contacto y desglosa las key
        echo '<br>';
        foreach ($data as $key => $value){

           echo $key.":".$value.'<br>';
          }
         
        }






    ?>





</body>

</html>