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






            </section>

            <div class='list-content'>

                <?php

                if (isset($_POST['prize-qtity']) && isset($_POST['first-prize-amount']) && isset($_POST['second-prize-amount']) && isset($_POST['third-prize-amount'])) {


                    if (($_POST['prize-qtity'] < 1) || ($_POST['prize-qtity'] > 3)) {
                        echo 'Por favor inserta un número de premios válido entre 1 y 3';
                    } else {

                        $dataSorteo = array (
                            "qtity-winners"  => $_POST["prize-qtity"],
                            "prizes-amounts" => array ( 
                                ($_POST["first-prize-amount"]), 
                                ($_POST["second-prize-amount"]),
                                ($_POST["third-prize-amount"])
                            )   
                        );

                        //print_r($dataSorteo);

                        $mensaje = "gracias, tus datos se han enviado correctamente!";
                    }
                } else {


                    $mensaje= "Por favor, rellena el número de premiados y el monto correspondiente";
                }
                ?>
            </div>


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
                    );

                    foreach ($arrayParticipantes as $participante) {
                        echo '<li>' . $participante . '</li>';
                    };

                    ?>
                </ol>

                <h4>PREMIOS</h4>

                <p>Se sortearan <?php echo $dataSorteo['qtity-winners'][0] ?> premios respectivamente con la cantidad de :

                <?php

                foreach ($dataSorteo as $key){

                    foreach ($key as $x => $value){ 
                        ?>

                        <ul>

                         <?php echo '<li>'.$value.'€ </li>';

                         } 
                      
                        }?> 
                       
    
                    </ul>
    



                    

             



                }

              

                </p>


                <?php

                $cantidadPremios = $dataSorteo['qtity-winners'][0];
                $cuantiaPremios = $dataSorteo['prizes-amounts'];
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



            </section>
    </div>



















    </main>
    </div>


</body>

</html>