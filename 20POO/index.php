<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap');


    body {

        font-family: 'Poppins', sans-serif;
        font-weight: 400;
        box-sizing: border-box;
        margin: 0;
        text-decoration: none;


    }

    main {
        display: flex;
        flex-wrap: wrap;
    }


    .card {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        width: 400px;
        margin: 0 auto;
    }

    .card ol {
        list-style: none;
        padding: 0;
    }

    .card ol li {
        margin-bottom: 10px;
        padding: 5px;
        border-bottom: 1px solid #ddd;
    }

    .card ol li:last-child {
        border-bottom: none;
    }

    .card ol li strong {
        font-weight: bold;
    }

    .card img {
        width: 100%;
        display: block;
        margin-top: 10px;
    }
</style>


<body>
    <header>
        <h1>Clase Mascotas</h1>
    </header>

    <main>

        <?php
        class Pet
        {
            public $animal;
            private $name;
            private $color;
            private $image;
            

            function __construct($animal, $name)
            {
                $this->animal = $animal;
                $this->name = $name;
            }

            function get_name()
            {
                return $this->name;
            }

            function get_animal()
            {
                return $this->animal;
            }


            function set_color($color)
            {
                $this->color = $color;
            }

            function set_image($image)
            {
                $this->image = $image;
            }

            function get_image()
            {
                return $this->image;
            }


            function get_color()
            {
                return $this->color;
            }
        }

       

  

        $fido = new Pet("Dog", "Fido");
        $fido->set_color("black");
        $fido->set_image("https://cdn.pixabay.com/photo/2020/11/21/17/20/dog-5764666_1280.jpg");

        $minina = new Pet("Cat", "Minina");
        $minina->set_color("white");
        $minina->set_image("https://t4.ftcdn.net/jpg/00/34/60/73/360_F_34607398_HGAWhV9qIL1XzHZt8pBV6VKlRMJZTUqb.jpg");


        $beto = new Pet("Parrot", "Beto");
        $beto->set_color("green");
        $beto->set_image("https://t4.ftcdn.net/jpg/04/54/73/07/360_F_454730706_VbQgrP0w3zqiVxUdxndQhjIjkNK481RQ.jpg");

    
        
       
        
        ?>


        <div class="card">
            <ol>

                <li> Mi mascota es un/una: <?php echo $fido->animal; ?></li>
                <li>su nombre es: <?php echo $fido->get_name(); ?></li>
                <li>y su color es: <?php echo $fido->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $fido->get_image(); ?>" /></li>

            </ol>
        </div>
        <div class="card">
            <ol>

                <li> La mascota de mi madre es un/una: <?php echo $beto->animal; ?></li>
                <li>su nombre es: <?php echo $beto->get_name(); ?></li>
                <li>y su color es: <?php echo $beto->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $beto->get_image(); ?>" /></li>

            </ol>
        </div>

        <div class="card">
            <ol>

                <li> La mascota de mi prima es un/una: <?php echo $minina->animal; ?></li>
                <li>su nombre es: <?php echo $minina->get_name(); ?></li>
                <li>y su color es: <?php echo $minina->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $minina->get_image(); ?>" /></li>

            </ol>
        </div>

        <div class="card">
            <ol>

                <li> La mascota de mi vecina es un/una: <?php echo $goldFish->animal; ?></li>
                <li>su nombre es: <?php echo $goldFish->get_name(); ?></li>
                <li>y su color es: <?php echo $goldFish->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $goldFish->get_image(); ?>" /></li>

            </ol>
        </div>


    </main>

</body>

</html>