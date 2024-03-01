<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
    <link rel="stylesheet" href="styles.css">
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
    'Rafael Torres',
    'Daniel Fernandez'
    ];





    $premios = 3;
    $numParticipantes = count($arrayParticipantes);
    echo 'ver numero de participantes:';
    var_dump(count($arrayParticipantes));
    
  
    function pickWinner( $numParticipantes, $premios) {
        $arrayGanadores = [];
        $indexParticipantes = $numParticipantes - 1;//hay q meterlo como variable local xq si no da error

        while ( count($arrayGanadores) < $premios) {

            $ganador = rand(0,$indexParticipantes);
            // echo 'ganador:'.$ganador;


            if (!in_array($ganador,$arrayGanadores)){

                $arrayGanadores[]= $ganador;

            };

        }

    return $arrayGanadores;

    
    }


    $indexGanadores = pickWinner($numParticipantes,$premios);
    // print_r($indexGanadores);

    
?>

<h2>Lista de participantes:</h2>

<ol>
    <?php 

foreach ($arrayParticipantes as $participante){   
    echo '<li>'.$participante.'</li>';        
};
   ?>
</ol>



<div class ="container">
    
            <h2> Ganadores:</h2>
            <ol>
        <?php
            foreach ($indexGanadores as $numOrder){   
                echo '<li>'.$arrayParticipantes[$numOrder].'</li>';        
            };
        ?>
            </ol>

</div>

    

   
</body>
</html>