<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<p> cuenta el número de puntos con un loop: </p>

<br>
<div>
    "#", "#", "#", "#", "#"<br>
    "#", ".", ".", ".", "#"<br>
    "#", ".", "#", ".", "#"<br>
    "#", ".", ".", ".", "#"<br>
    "#", "#", "#", "#", "#"<br>
    <br>
    </div>

<?php
$laberinto = array(
    array("#", "#", "#", "#", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", ".", "#", ".", "#"),
    array("#", ".", ".", ".", "#"),
    array("#", "#", "#", "#", "#")
);

$dotCount = 0;
$hashtagCount = 0;

foreach ($laberinto as $line){
    foreach ($line as $item ){

        if($item === '.'){
            $dotCount++;
            //echo "dotcount: ".$dotCount."<br>";
        } else {

            $hashtagCount ++;
            //echo $hashtagCount;
            //echo "hashtagcount: ".$hashtagCount."<br>";

        }
    }
}

echo "<br>";
echo '<strong> RESULTADO</strong></strong><br>';
echo "el numero de puntos es: ".$dotCount."<br>";
echo "el numero de almohadillas es: ".$hashtagCount."<br>";

//se puede hacer con array_count_value

?>
    
</body>
</html>