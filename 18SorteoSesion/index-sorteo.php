<?php

session_start();

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

        </header>
        <main>


            <section class="form-container">

                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">

                                <div class="form-items">
                                    <h3>Registro de Premios</h3>
                                    <p>Por favor, rellena los datos:</p>
                                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


                                        <div class="col-md-12">
                                            <label for="prize-qtity">1.¿Cuántos Premios quieres repartir? <br>(elige un número del 1 al 3)
                                            </label>
                                            <input class="form-control" type="number" name="prize-qtity" placeholder="inserta un número" required>
                                            <!-- <div class="valid-feedback">Username field is valid!</div> -->
                                            <!-- <div class="invalid-feedback">Campo requerido. Por favor, inserta un número.</div> -->

                                        </div>
                                        <br>


                                        <div class="col-md-12">
                                            <label for="prize-qtity">2.Indica la cuantía por premio</label>
                                            <select name="first-prize-amount" class="form-select mt-3" required>
                                                <option selected disabled value="">1er Premio</option>
                                                <option value="50.000">50.000€</option>
                                                <option value="40.000">40.000€</option>
                                                <option value="30.000">30.000€</option>
                                            </select>

                                        </div>
                                        <div class="col-md-12">
                                            <select name="second-prize-amount" class="form-select mt-3" required>
                                                <option selected disabled value="">2o Premio</option>
                                                <option value="20.000">20.000€</option>
                                                <option value="15.000">15.000€</option>
                                                <option value="10.000">10.000€</option>
                                                <option value="0">No aplica</option>
                                            </select>
                                            <!-- <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div> -->
                                        </div>
                                        <div class="col-md-12">
                                            <select name="third-prize-amount" class="form-select mt-3" required>
                                                <option selected disabled value="">3er Premio</option>
                                                <option value="5.000">5.000€</option>
                                                <option value="3.000">3.000€</option>
                                                <option value="1.000">1.000€</option>
                                                <option value="0">No aplica</option>
                                            </select>
                                            <!-- <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div> -->
                                        </div>






                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                                        </div>
                                    </form>
                                    <br>
                                    <div class='list-content'>

                                        <?php

                                        if (isset($_POST['prize-qtity']) && isset($_POST['first-prize-amount']) && isset($_POST['second-prize-amount']) && isset($_POST['third-prize-amount'])) {


                                            if (($_POST['prize-qtity'] < 1) || ($_POST['prize-qtity'] > 3)) {
                                                echo 'Por favor inserta un número de premios válido entre 1 y 3';
                                            } else {

                                                $dataSorteo = $_POST;
                                                echo "gracias, tus datos se han enviado correctamente!";
                                        ?>

                                                <center>
                                                    <h2>
                                                        <a href="#ganadores">Ver Ganadores</a>
                                                    </h2>
                                                </center>
                                        <?php
                                            }
                                        } else {


                                            echo "Por favor, rellena el número de premiados y el monto correspondiente";
                                        }
                                        ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>












            </section>

            <section class="list-content">
                <h3>Información del sorteo</h3>

                <?php
                $fecha_actual = date('d-m-Y');
                ?>

                <p>En el día: <?php echo $fecha_actual ?> se realiza el siguiente sorteo entre los siguientes </p>
                <h2>PARTICIPANTES</h2>

                <ol>
                    <?php


                    $arrayParticipantes = $_SESSION['participantes'];



                    foreach ($_SESSION['participantes'] as $participante) {
                        echo '<li>' . $participante . '</li>';
                    };

                    ?>
                </ol>

                <h2>PREMIOS</h2>

                <p>Se sortearan <?php echo $dataSorteo['prize-qtity'] ?> premios. Cada uno por la cantidad de:

                <ul>

                    <li> <?php echo $dataSorteo['first-prize-amount'] ?> €</li>
                    <li> <?php echo $dataSorteo['second-prize-amount'] ?> €</li>
                    <li> <?php echo $dataSorteo['third-prize-amount'] ?> €</li>


                </ul>

                </p>


                <?php

                $cantidadPremios = $dataSorteo['prize-qtity'];
                $cuantiaPremios = array($dataSorteo["first-prize-amount"], $dataSorteo["second-prize-amount"], $dataSorteo["third-prize-amount"]);
                //print_r($cuantiaPremios);


                $numParticipantes = count($arrayParticipantes);
                //echo 'ver numero de participantes:';
                //var_dump(count($arrayParticipantes));


                function pickWinner($numParticipantes, $cantidadPremios)
                {
                    $arrayGanadores = [];
                    $indexParticipantes = $numParticipantes - 1;

                    while (count($arrayGanadores) < $cantidadPremios) {

                        $ganador = rand(0, $indexParticipantes);
                        // echo 'ganador:'.$ganador;


                        if (!in_array($ganador, $arrayGanadores)) {

                            $arrayGanadores[] = $ganador;
                        };
                    }

                    return $arrayGanadores;
                }

                $indexGanadores = pickWinner($numParticipantes, $cantidadPremios);
                // print_r($indexGanadores);
                ?>
                <h2 id="ganadores"> GANADORES:</h2>
                <ol>
                    <?php
                    $i = 0;
                    foreach ($indexGanadores as $numOrder) {
                        echo '<li>' . $arrayParticipantes[$numOrder] . " " . $cuantiaPremios[$i] . '€</li>';
                        $i++;
                    };
                    ?>
                </ol>



    </div>

    <div class="flex-container">
        <div class="boton-reset">
            <a href="index-participantes.php?reset=true">
                RESET
            </a>
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