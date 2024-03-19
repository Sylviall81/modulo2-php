<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion formulario</title>
</head>
<body>
<?php

//pone un condicional para asegurar que todos los campos recogidos en el array de la superglobal $_POST 
//esten setteados o rellenados y dice SI name email existen y son diferentes de vacios imprime Welcome "name" (mismo nombre del form)
// tu direccion de correo es : (correo que se inserto en el form)
//lo esta enviando por POST (no se ve en la URL).
    if (isset($_POST["name"]) && isset($_POST["email"]) && $_POST['name']!='' && $_POST['email']!='') { ?>
        Welcome
        <?php echo $_POST["name"]; ?><br>
        Your email address is:
        <?php echo $_POST["email"]; ?>
    <?php } else { //Aqui en caso que las variables esten vacias o no hayan sido rellenadas o no entren por post se imprime Error...
        echo "ERROR, faltan parámetros";
        http_response_code(400);
    }
    ?>
</body>
</html>