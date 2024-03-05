<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  

    <!-------Boostrap--------->
<header class = "container">
    <h2>Prueba Formularios</h2>
</header>

    <div class="container-md">

        <form id ="form" method="GET" action="indexGET.php" > <!--esto para imprimir en la misma página-->
     <!--   <form id ="form" method="POST" action="welcome.php" target= "_blank" > para verlo en una nueva pestaña-->
            <div class ="container">
            <label for="name" class="form-label">Name</label>
            <input name="name" type="text" class="form-control form-control-sm" id="name" placeholder="Jane Doe" required>
            <label for="age" class="form-label">Edad </label>
            <input name="age" type="number" class="form-control form-control-sm" id="age" placeholder="Edad">
            <label for="email" class="form-label">Email </label>
            <input name="email" type="email" class="form-control form-control-sm" id="email" placeholder="name@example.com" required>
             <label for="text-area" class="form-label">Mensaje:</label>
            <textarea name="text-area" class="form-control" id="text-area" rows="3"></textarea>
            </div> 
            <br>
           
  
    <input type="submit" name="submit" value="Enviar">
    </form>
    </div>
    <hr>



<div class = "container bg-primary-subtle  rounded-3">
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") { //con esto compruebo si me acceden a traves del metodo post
        $nombre = $_GET["name"];
        $edad = $_GET["age"];
        $email = $_GET["email"]; 
        $comentarios = $_GET["text-area"];?>


<div class="container">

    <h2>Bienvenid@ te has registrado correctamente!</h2>


<?php

        echo "<h2>Información Registrada:</h2>";
        echo "Nombre: " . $nombre . "<br>";
        echo "edad: " . $edad . "<br>";
        echo "Correo electrónico: " . $email."<br>";
        echo "Comentarios: " . $comentarios."<br>";
    } 

    echo "<br>";

    echo "<strong>BONUS </strong> ver como esta compuesto get y server:<br>";

    echo "GET:<br>";
    print_r($_GET);

    echo "<br>";
    echo "<br>";
    echo "SERVER: contiene el query string entre las key<br>";
    print_r($_SERVER);
    ?>

    </div>
</div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>