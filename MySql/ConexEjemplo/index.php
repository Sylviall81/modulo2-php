<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$server = "localhost";
$user = "user_erp";
$psswd = "45960967Kk*";

$conexion = mysqli_connect($server,$user,$psswd)
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