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


</body>

</html>