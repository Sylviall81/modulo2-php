<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <?php
 
    if (isset($_POST["name"]) && isset($_POST["email"]) && $_POST['name']!='' && $_POST['email']!='') { 
        $listado = Array('nombre'=>$_POST["name"],'email'=>$_POST["email"]);
        $listadoCompleto = array_push($listado,$_POST["listado"]);
        echo $listadoCompleto;
        // //foreach( $listadoCompleto as $clave => $concursante){
        //     echo "$clave: $concursante";
        // }

    }
    if (isset($_POST['premios'])){
        $listadoCompleto = $_POST["listado"];
        foreach( $listadoCompleto as $clave => $concursante){
            echo "$clave: $concursante";
        }
        // Sorteo
    }
        ?>
        <form id="form" action="index.php" method="POST">
        Name: <input type="text" name="name" value=""><br>
        E-mail: <input type="text" name="email"><br>
        <input type="hidden" name="listado" value="<?php echo $listadoCompleto;?>">
        <input type="submit">
        <form id="form" action="index.php" method="POST">
        Premios: <input type="number" name="premios" value="">
        <input type="hidden" name="listado" value="<?php echo $listadoCompleto;?>">
        <input type="submit">
    </form>
</body>
</html>