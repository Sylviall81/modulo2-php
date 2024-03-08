<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional ejercicio encontrar datos</title>
</head>

<body>
    <?PHP
    $estudiantes = array(
        array(
            "nombre" => "Juan",
            "edad" => 20,
            "notas" => array(90, 85, 88)
        ),
        array(
            "nombre" => "María",
            "edad" => 22,
            "notas" => array(78, 92, 95)
        ),
        array(
            "nombre" => "Carlos",
            "edad" => 21,
            "notas" => array(88, 90, 82)
        ),
        array(
            "nombre" => "Laura",
            "edad" => 23,
            "notas" => array(95, 87, 91)
        )
    );

    // 1. Edad de María.
    $edadMaria = $estudiantes[1]["edad"];
    echo "1. La edad de María: $edadMaria\n";
    echo "<hr>";
    // 2. Segunda nota de Carlos.
    $notaCarlos = $estudiantes[2]["notas"][1];
    echo "2. La segunda nota de Carlos: $notaCarlos\n";

    // 3. Nombre de todos los estudiantes.

   
    echo "<hr>";
    $nombresEstudiantes = array_column($estudiantes, "nombre");
    echo "3. El nombre de todos los estudiantes: " . implode(", ", $nombresEstudiantes) . "\n";
    echo "<hr>";
    echo "3b. Otra vez el nombre de todos los estudiantes, con foreach: ";
    foreach ($estudiantes as $estudiante){
        echo $estudiante['nombre']."<br>";
    }
    echo "<hr>";
    echo "3c. Otra vez el nombre de todos los estudiantes, con variable: ";
    $todosEstudiantes = '';
    foreach ($estudiantes as $estudiante){
        $todosEstudiantes.= $estudiante['nombre'].", ";
    }
    echo $todosEstudiantes;
    // 4. Media de Laura.
    echo "<hr>";
    $notasLaura = $estudiantes[3]["notas"];
    $mediaLaura = array_sum($notasLaura) / count($notasLaura);
    echo "4. La media de notas de Laura: $mediaLaura\n";

    ?>
</body>

</html>