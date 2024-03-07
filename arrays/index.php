<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Metodos</title>
</head>

<body>

    <h2>Metodos de Array</h2>

    <p>

    <h3>
        1.count($array): </h3>
    Cuenta los elementos en el array, empezando por 0.
    <br>
    Array $shoppingList: 'manzanas','café','Leche','Brócoli','Pasta'
    count nos entrega la cantidad de elementos -->
    <?php

    $shoppingList = array('manzanas', 'café', 'Leche', 'Brócoli', 'Queso', 'Pasta');
    $arrayLength = count($shoppingList);
    echo $arrayLength

    ?>
    </p>
    <hr>

    <p>

    <h3>
        2.Acceder a elemento($array):</h3>

        $array[posicionElemento]
        <br>

    Array $shoppingList: 'manzanas','café','Leche','Brócoli',Queso,'Pasta'
    <br>
    $elemento = $shoppingList[posicion] <br>
    Ej.para brocoli sera pos 3 xq empieza en 0
    <?php

    var_dump($shoppingList);

    $elemento = $shoppingList[3];
    echo $elemento;

    ?>
    </p>
    <hr>

    <p>
        <h3>
        3.Imprimir todos (Loop, o bucle foreach): </h3>

        bucle q los recorre todos y con echo imprimes

        foreach ($shoppingList as $item){
        echo $item
        }

        Array $shoppingList: 'manzanas','café','Leche','Brócoli',Queso,'Pasta'

    <ol>
        <?php

        foreach ($shoppingList as $item) {
            echo '<li>' . $item . '</li>';
        }

        ?>
    </ol>
    </p>
    <hr>
    <p>

    <h3>
        4.Cambiar un valor de un elemento:
    </h3>
    <br>

    cambiar cafe x chocolate
    <br>


    <?php

    // echo $elemento;
    // $elemento = 'Chocolate';
    // echo $elemento;
    var_dump($shoppingList);
    // echo $shoppingList;
    echo ' <br>';
    echo 'cambio a chocolate y hago prueba';
    $shoppingList[1] = 'Chocolate';
    echo  $shoppingList[1];
    echo '<br>';

    echo "Array cambiado:";
    print_r($shoppingList);
    echo '<br>';


    echo " <h3>5. Añadir un elemento al final</h3>";

    echo "añadir agua y cafe al final array_push(array, 'elemento')";
    echo '<br>';

    print_r($shoppingList);
    echo '<br>';

    array_push($shoppingList, 'Agua');
    echo '<br>';

    echo "con elemento añadido";
    print_r($shoppingList);

    array_push($shoppingList, 'Café');
    echo '<br>';

    echo "con elemento añadido";
    print_r($shoppingList);



    ?>
    </p>
    <h3>6.Eliminar elemento unset(elemento[pos])</h3>
    <p>

    Eliminar elemento 5:Pasta
        <?php

        unset($shoppingList[5]);
        echo 'verifico que se elimino:<br>';
        print_r($shoppingList);
        echo "unset elimina pero no mueve el indice";
        echo $shoppingList[5];
        
        ?>

        <h3>7.array_pop: </h3>
        <p> modfica el originaleliminando el ultimo elemento y hace un array con el elemento eliminado</p>

        <?php
        $shortShoppingList = array_pop($shoppingList);
        echo "Array nuevo:<br>";
        print_r($shortShoppingList);
        echo "<br>";
        echo "Array original:";
        print_r($shoppingList);
?>

        

   
    </p>

    <h3>Ejercicio</h3>

<p>Crear un array con nombres hacer un foreach y pasar por todos 
    los nombres enviar un mensaje solo a las personas con inicial L</p>





    <?php

    

    $listaNombres = array ("María","Pedro","Lucía","Mariana","Luís","José","Fernando");
    print_r($listaNombres);
    echo '<br>';
    echo '<br>';

    echo '1era forma: un if (string[0] == "l")<br>';


    foreach($listaNombres as $nombre){

        $nombreLower = strtolower($nombre);//para bajar a minuscula

        // echo "verlos todos en minuscula:";
        // echo $nombreLower.'<br>';
        // echo '<br>';

      if ($nombreLower[0]== 'l'){
        echo 'Hola '.$nombreLower.'<br>';
      }

    }

    echo '<br>';

    echo "2a forma: con str_starts_with(string,'caracter(es)') <br>";

    foreach($listaNombres as $nombre){

        $nombreSmall = strtolower($nombre);//para bajar a minuscula

       

      if (str_starts_with($nombreSmall,'l')){
        echo 'Hola '.$nombreSmall.'<br>';
      }

    }
    
    
    
    
    
    
    ?>


</body>

</html>