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
            <h1>Bienvenid@</h1>
            <h2>Panel de Administrador: Sorteos</h2>

        </header>
        <main>


            <section class="form-container">

                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <!-- <h3>Registro de Premios</h3> -->

                                    <div class="mensaje">
                                        

                                        <p>

                                            <?php

                                            if (isset($_POST['prize-qtity']) && isset($_POST['first-prize-amount']) && isset($_POST['second-prize-amount']) && isset($_POST['third-prize-amount'])) {


                                                if (($_POST['prize-qtity'] < 1) || ($_POST['prize-qtity'] > 3)) {
                                                    echo 'Por favor inserta un número de premios válido entre 1 y 3';
                                                } else {
                                                    $dataSorteo = array(
                                                        "qtity-winners"  => array($_POST["prize-qtity"]),
                                                        "prizes-amounts" => array(
                                                            ($_POST["first-prize-amount"]),
                                                            ($_POST["second-prize-amount"]),
                                                            ($_POST["third-prize-amount"])
                                                        ),
                                                        "lista-participantes" => array(
                                                            'Maria Lopez',
                                                            'Pablo Perez',
                                                            'José Martinez',
                                                            'Victor Flores',
                                                            'Marta Lozano',
                                                            'Elena Mendez',




                                                        )
                                                    );

                                                    echo "Gracias, tus datos se han enviado correctamente!";
                                                    echo '<br><a href="#ganadores">Ver Ganadores</a>';
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
                                        </div>
                                        <div class="col-md-12">
                                            <select name="third-prize-amount" class="form-select mt-3" required>
                                                <option selected disabled value="">3er Premio</option>
                                                <option value="5.000">5.000€</option>
                                                <option value="3.000">3.000€</option>
                                                <option value="1.000">1.000€</option>
                                                <option value="0">No aplica</option>
                                            </select>
                                        </div>

                                        <div class="form-button mt-3">
                                            <br>
                                            <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                                            <br>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <section class= "seccion-resultados">
                                    <div class="info-sorteo list-content">
                                    <h3>DATOS DEL SORTEO</h3>
                                        <?php
                                        $fecha_actual = date('d-m-Y');
                                        $cantidadPremios = $dataSorteo['qtity-winners'][0];
                                        ?>
                                        <p>Fecha: <?php echo $fecha_actual ?></p>
                                
                                        <h3>PREMIOS</h3>

                                        <p>De acuerdo a la información insertada se sortean <?php echo $cantidadPremios ?> premios </p> 
                                        <p>cada uno con un monto de:</p> 

                                        <ul>

                                            <?php

                                            //print_r($dataSorteo);

                                            foreach ($dataSorteo['prizes-amounts'] as $key => $value) {


                                                echo '<li>' . $value . '€ </li>';
                                            }
                                            // } 
                                            ?>

                                        </ul>

                                    </div>

                                    <div class="info-participantes list-content">
                                        <h3>PARTICIPANTES</h3>

                                        <ol>
                                            <?php


                                            foreach ($dataSorteo['lista-participantes'] as $key => $value) {


                                                echo '<li>' . $value . '</li>';
                                            }
                                            ?>

                                        </ol>

                                    </div>

                                    <div class="info-ganadores list-content">
                                    <h3 id = "ganadores"> GANADOR@S:</h3>

                                        <?php

                                        $cuantiaPremios = $dataSorteo['prizes-amounts'];
                                        //print_r($cuantiaPremios);

                                        $numParticipantes = count($dataSorteo['lista-participantes']);
                                        //print_r($numParticipantes);
                                        $listaParticipantes = $dataSorteo['lista-participantes'];


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
                                        ?>

                                        
                                        <ol>
                                        
                                            <?php
                                            $i = 0;
                                            foreach ($indexGanadores as $numOrder) {
                                                echo '<li>' . $listaParticipantes[$numOrder] . " <br>Premio: " . $cuantiaPremios[$i] . '€</li>';
                                                $i++;
                                            };
                                            ?>
                                        </ol>
                                    </div>
                            </section>
                       
                       
                        </div>
                    </div>                    
                </div>
            <!--------->
            


            </section>
           

    </div>

  



    </div>



















    </main>
    </div>

</body>

</html>