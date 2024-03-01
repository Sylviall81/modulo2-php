<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
</head>
<body>

<center>

            <h1>Sorteo</h1> </center>

    <?php

    $arrayParticipantes = [
    'Maria Lopez',
    'Pablo Perez', 
    'José Martinez',
    'Victor Flores', 
    'Marta Lozano', 
    'Elena Mendez',
    'Paula Sanchez',
    'Fernanda Villa', 
    'Cristina Gutierrez',
    'Humberto Nuñez',
    'Petra Alvarado',
    'Rafael Torres'
    ];





    $premios = 3;
    $numParticipantes = count($arrayParticipantes);
    //var_dump(count($arrayParticipantes));
    $indexParticipantes = $numParticipantes - 1; //posicion de los participantes dentro del array
    //var_dump(($indexParticipantes));


    function pickWinner( $numParticipantes, $premios) {

        $arrayGanadores = [];


        while ( count($arrayGanadores) < $premios) {

            $ganador = rand(0,$numParticipantes);
            echo 'ganador:'.$ganador;


            if (!in_array($ganador,$arrayGanadores)){

                $arrayGanadores[]= $ganador;

            };

        }

    return $arrayGanadores;

    
    }


    $indexGanadores = pickWinner($numParticipantes,$premios);
    print_r($indexGanadores);


    echo("prueba array ganadores posiciones");
    

    echo '<h2> Felicidades a los ganadores:</h2> <br> <ol>';

    foreach ($indexGanadores as $numOrder){    
        echo ' <li>'.$arrayParticipantes[$numOrder].'</li>';        
    };

    echo '</ol>';

    



  
   

    ?>

   
</body>
</html>