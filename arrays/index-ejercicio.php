<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio array</title>
</head>

<body>

    <?php

    $estudiantes = array(
        array(
            "nombre" => "Juan",
            "edad" => 20,
            "notas" => array(9, 8, 6)
        ),
        array(
            "nombre" => "María",
            "edad" => 22,
            "notas" => array(7, 9, 6)
        ),
        array(
            "nombre" => "Carlos",
            "edad" => 21,
            "notas" => array(8, 9, 7)
        ),
        array(
            "nombre" => "Laura",
            "edad" => 23,
            "notas" => array(6, 8, 9)
        )
    );

    $edadMaria = $estudiantes[1]['edad'];
    echo 'La edad de María es ' . $edadMaria . '<br>';

    $notaCarlos = $estudiantes[2]['notas'][1];
    echo 'La 2a nota de Carlos es ' . $notaCarlos . '<br>';


    echo "El nombre de los estudiantes que participan son:<br>";

    foreach ($estudiantes as $estudiante) {

        echo $estudiante['nombre'] . '<br>';
    }
    echo '<br>';

    $nombresEstudiantes = array_column($estudiantes, "nombre");
    echo "nombre de los estudiantes: " . implode(',', $nombresEstudiantes);
    echo '<br>';

    $edadEstudiantes = array_column($estudiantes, "edad");
    echo "edad de los estudiantes: " . implode(',', $edadEstudiantes);
    echo '<br>';
    echo '<br>';





    foreach ($estudiantes as $estudiante) {

        echo "estudiante :" . $estudiante['nombre'] . '<br>';

        foreach ($estudiante as $key => $val) {
            echo "notas :" . $key . '<br>';


            foreach ($estudiante as $nota => $val) {


                echo " notas: " . $nota . ',';
                echo '<br>';
                echo "suma notas: " . array_sum($estudiante['notas']) . '<br>';
                echo '<br>';
                echo "largo de array: " . count($estudiante['notas']) . '<br>';
                echo '<br>';
                echo "media: " . array_sum($estudiante['notas']) / count($estudiante['notas']);
            }
        }
    }
















    ?>




</body>

</html>