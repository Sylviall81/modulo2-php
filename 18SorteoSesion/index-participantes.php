<?php

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


if(isset($_GET["logout"])){
    session_destroy();
    header("Location: index-participantes.php");
    exit();
}
?>

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
            <a href="index-participantes.php?logout=true">Reset Lista</a>

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

                                        <?php

                                       // $listaParticipantes="";
                                      

                                        $participante= "";
                                        

                                            if ($_POST['participante'] == ""|| !isset($_POST['participante'])) {
                                                echo "<p><strong>Por favor ingresa un nómbre válido</strong></p>";
                                            
                                            } else {


                                                $participante = test_input($_POST['participante']);

                                            

                                                if (!isset($_SESSION['participantes'])){

                                                    $_SESSION['participantes'] = array();
                                                }

                                                array_push ($_SESSION['participantes'],$participante);
                                                

                                            }

                                            ?>

                                            <p> El usuario : <?php echo $participante?> <br>ha sido añadido a la lista de participantes</p> <br>
                                            <p> <br>
                                            Lista:
                                          
                                            <?php 

                                           

                                            foreach ($_SESSION['participantes'] as $participante) {
                                                echo $participante . "<br>";
                                            }
                                            
                                            ?></p>

                                            <h2><a href="./index-sorteo.php">

                                            Realizar Sorteo

                                            </a></h2>

                                            


                                        






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