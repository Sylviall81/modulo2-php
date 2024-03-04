<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <h1>Prueba las variables super globales: </h1>


    <ul>
        <li><a href="#server">
                $_SERVER</a></li>

        <li><a href="#get">
                $_GET</a></li>

        <li><a href="#post">
                $_POST</a></li>



        <li><a href="#request">
                $_REQUEST</a></li>


    </ul>





    <?php

    //print_r ($_SERVER);



    echo ' <p id="server"> $_SERVER: </p> ';

    foreach ($_SERVER as $key => $value) {
        echo $key . ':' . $value . '<br>';
    }

    echo '<br>';
    echo  '$_SERVER["REQUEST_METHOD"] : '; 

    echo $_SERVER['REQUEST_METHOD']; //GET

    echo '<br>';
    echo '<hr>';
    echo 'de momento $_POST, $_GET y $_REQUEST son arrays vacios <br>';
    echo '<br>';
    echo ' <p id="get"> $_GET: </p> ';

    foreach ($_GET as $key => $value) {
        echo $key . ':' . $value . '<br>';
    }

    print_r($_GET);

    echo ' <p id="post"> $_POST: </p> ';

    foreach ($_POST as $key => $value) {
        echo $key . ':' . $value . '<br>';
    }

    print_r($_GET);

    echo ' <p id="request"> $_REQUEST: </p> ';

    foreach ($_REQUEST as $key => $value) {
        echo $key . ':' . $value . '<br>';
    }

    print_r($_GET);





    ?>





</body>

</html>