<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Admin Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="full-container">
        <header>
            <h1>Bienvenid@ a tu Panel de administrador de sorteos</h1>

        </header>
        <main>


            <section class="form-container">

                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <h3>Registro de Participantes</h3>

                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                        <label for="participante">Nombre completo:</label>
                                        <input type="text" name="participante" placeholder="inserta nombre aqui">

                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                                        </div>

                                        <p><?php

                                            if (!isset($_POST['participante'])) {

                                                echo "<p><strong>Por favor ingresa un nómbre válido</strong></p>";
                                            } else {

                                                $concursante = test_input($_POST['participante']);

                                               

                                                $archivoLista = fopen("lista.txt","a");

                                                if(!$archivoLista){
                                                    $archivoLista = fopen("lista.txt","w");
                                                }

                                                fwrite($archivoLista, $concursante."\n");


                                            }


                                            ?> El nombre del concursante : <?php $concursante?> ha sido añadido a la lista de participantes</p>
                                            <p>Hasta ahora esta es la lista de participantes:<?php echo file_get_contents("lista.txt")?></p>

                                        






                                </div>


                                
                            </div>
                        </div>
                    </div>
                </div>


            </section>

    </div>



















    </main>
    </div>
    <?php

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data); //quita los slash pa q no te escapen o inyecten code
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>


</body>

</html>