<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes y súper globales</title>
</head>

<body>
    <?php
        define("NOMBRE","Luis"); //define NOMBRE como una constante

        function escribeNombre(){
            echo "Hola ".NOMBRE;
        }
        escribeNombre();
        echo "<hr>";
        foreach($_SERVER as $key => $value){
            echo "<b>$key: </b>$value<br>";
        }
    ?>
</body>

</html>