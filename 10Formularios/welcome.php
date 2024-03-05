<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    



<div class="container bg-primary-subtle  rounded-3">
    <h2>Bienvenid@ te has registrado correctamente!</h2>



<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //con esto compruebo si me acceden a traves del metodo post
        $nombre = $_POST["name"];
        $edad = $_POST["age"];
        $comentarios = $_POST["text-area"];
        $email = $_POST["email"];

        echo "<h2>Información Registrada:</h2>";
        echo "Nombre: " . $nombre . "<br>";
        echo "Edad: " . $edad."<br>";
        echo "Correo electrónico: " . $email."<br>";
        echo "Comentarios: " . $comentarios;
    }
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>



