<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda con Array Multi dimensional</title>
</head>

<body>
    <?php

    //Se crea un array multidimensional con los campos Nombre Email y telefono
    $agenda = array(
        array("Nombre" => "Pedro Giménez", "Email" => "mail@ej.com", "telefono" => "444555666"),
        array("Nombre" => "Laura Gil", "Email" => "mail2@ej.com", "telefono" => "555555666"),
        array("Nombre" => "Ana Hernández", "Email" => "mail3@ej.com", "telefono" => "666555666"),

    );


    //foreach: bucle para recorrer cada item de $agenda que se designa como $contacto (entras en 1er nivel)
    foreach ($agenda as $contacto) {
        //como cada contacto tiene mas niveles hay q hacer otro bucle "interno" para recorrer los datos
        foreach ($contacto as $clave => $dato) { //entramos en contacto y le pedidmos que de cada contacto nos recorra claves y valor
        echo "<b>" . $contacto["Nombre"] . "</b><br>"; //le pedimos que imprima el valor de Nombre
        echo "$clave : $dato</br>";// y que imprima todas las claves y valores de cada contacto (aqui se repetira el nombre);
        }
    }
    
    $agenda[] = array("Nombre" => "Pedro Pérez", "Email" => "mail4@ej.com", "teléfono" => "777555666");
    echo "<hr>";
    foreach ($agenda as $contacto) {
        echo "<b>" . $contacto["Nombre"] . "</b><br>";
        foreach ($contacto as $clave => $dato) {
            echo "$clave : $dato</br>";
        }
    }
    $agenda[0]['telefono'] = "111222333";
    echo "<hr>";
    foreach ($agenda as $contacto) {
        echo "<b>" . $contacto["Nombre"] . "</b><br>";
        foreach ($contacto as $clave => $dato) {
            echo "$clave : $dato</br>";
        }
    }
    ?>
</body>

</html>