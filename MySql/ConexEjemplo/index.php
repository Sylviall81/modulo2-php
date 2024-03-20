<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$conexion = mysqli_connect("localhost", "user_erp", "45960967Kk*")
or die ("No se ha podido conectar a la base de datos");

echo "Conectado a la base de datos";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion DB</title>
</head>
<body>
    
</body>
</html>