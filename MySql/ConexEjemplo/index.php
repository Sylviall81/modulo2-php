<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//ini

$host = "localhost";
$user = "user_erp";
$psswd = "45960967Kk*";

// Conexión
$conexion = mysqli_connect($host, $user, $password) or die ("No se puede conectar con el servidor");

echo "Conectado al servidor";

// Seleccionamos la base de datos

$database = "noticias";
mysqli_select_db($conexion, $database) or die ("No se puede seleccionar la base de datos");

echo "Hemos seleccionado la base de datos $database";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexión a Mysql</title>
</head>
<body>
    <?php
        echo "La conexión se ha establecido\n";
        echo "Hemos seleccionado la base de datos $database";
    ?>
</body>
</html>