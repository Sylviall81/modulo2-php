<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Admin Page</title>
    <link rel="stylesheet" href="style.css">
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

                                    <div class="mensaje">

                                    <p>

                                        <?php

                                        if (isset($_POST['prize-qtity']) && isset($_POST['first-prize-amount']) && isset($_POST['second-prize-amount']) && isset($_POST['third-prize-amount'])) {


                                            if (($_POST['prize-qtity'] < 1) || ($_POST['prize-qtity'] > 3)) {
                                                echo 'Por favor inserta un número de premios válido entre 1 y 3';
                                            } else {
                                                $dataSorteo = array(
                                                    "qtity-winners"  => $_POST["prize-qtity"],
                                                    "prizes-amounts" => array(
                                                        ($_POST["first-prize-amount"]),
                                                        ($_POST["second-prize-amount"]),
                                                        ($_POST["third-prize-amount"])
                                                    ),
                                                    "lista-participantes" => array ()
                                                );
                                                
                                                echo "Gracias, tus datos se han enviado correctamente!";
                                            }
                                        } else {

                                            echo "<strong>Por favor, rellena el número de premiados y el monto correspondiente :</strong>";
                                        }
                                        ?>
                                        </p>
                                    </div>

                                    
                                    <form method="POST" action='index.php'>


                                        <div class="col-md-12">
                                            <label for="prize-qtity">Número de premios:</label>
                                            <input class="form-control" type="number" name="prize-qtity" placeholder="inserta un número" required>
                                            <!-- <div class="valid-feedback">Username field is valid!</div> -->
                                            <!-- <div class="invalid-feedback">Campo requerido. Por favor, inserta un número.</div> -->

                                        </div>


                                        <div class="col-md-12">
                                            <label for="prize-qtity">Indica la cuantía por premio</label>
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

                    $arrayParticipantes = array(
                        'Maria Lopez',
                        'Pablo Perez',
                        'José Martinez',
                        'Victor Flores',
                        'Marta Lozano',
                        'Elena Mendez',
                    )
                    ?>

                

              

                    <?php
                    foreach ($arrayParticipantes as $participante) {
                        echo '<li>' . $participante . '</li>';
                    };
                    echo '<br>';
                    ?>
                    
                    </ol>


                    

                <h4>PREMIOS</h4>

                <p>Se sortearan 
                    <?php  $cantidadPremios = $dataSorteo['qtity-winners'][0];
                
                echo $cantidadPremios ?> premios respectivamente con un monto de:

                <ul>

                <?php

                print_r($dataSorteo);

                    foreach ($dataSorteo as $key) {

                        foreach ($key as $x => $value) {
                       

                            echo '<li>' . $value . '€ </li>';
                            }
                        } ?>

        </ul>

       
                <?php
                
                $cuantiaPremios = $dataSorteo['prizes-amounts'] ;
                

                $numParticipantes = count($arrayParticipantes);
                

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

                <h2> Ganadores:</h2>
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

    </section>

    <div>
        <p>
        seccion pruebas:
        </p>

       

                    <?php
                    

               
                    // array_push($dataSorteo,$arrayParticipantes);

                    // echo '<br>';
                    // echo '$dataSorteo:';
                    
                    // //print_r($dataSorteo);


                    // foreach ($dataSorteo as $key) {
                    //     echo "key: ".print_r($key);
                    //     foreach ($key[2] as $x => $value)
                       

                    //     echo '<li>ES AQUI  key:'.$x." ".$value. '</li>';
                    // };
                    
             

                    ?>
            

    </div>

    </div>



















    </main>
    </div>


</body>

</html>