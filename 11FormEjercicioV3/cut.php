 <!-- <section class= "seccion-resultados">
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
            </section> -->