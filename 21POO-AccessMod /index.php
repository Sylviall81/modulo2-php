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
            public $animal; //la especie es un atributo publico accesible desde cualquier parte $objeto->animal
            private $name; //nombre color e imagen son atributos privados solo accesible a traves de un getter
            private $color;
            private $image;
            protected $adoptionDay;
            

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


            function set_adoptionDay($date){
                $this->adoptionDay = $date;
            }


            function get_adoptionDay(){
                return $this->adoptionDay;
            }
        }

        $fido = new Pet("Dog", "Fido");
        $fido->set_color("black");
        $fido->set_image("https://cdn.pixabay.com/photo/2020/11/21/17/20/dog-5764666_1280.jpg");
        $fido->set_adoptionDay('25/06/2020');

        $minina = new Pet("Cat", "Minina");
        $minina->set_color("white");
        $minina->set_image("https://t4.ftcdn.net/jpg/00/34/60/73/360_F_34607398_HGAWhV9qIL1XzHZt8pBV6VKlRMJZTUqb.jpg");
        $minina->set_adoptionDay('22/02/2022');


        $beto = new Pet("Parrot", "Beto");
        $beto->set_color("green");
        $beto->set_image("https://t4.ftcdn.net/jpg/04/54/73/07/360_F_454730706_VbQgrP0w3zqiVxUdxndQhjIjkNK481RQ.jpg");
        $beto->set_adoptionDay('06/12/2018');

        ?>


        <div class="card">
            <ol>

                <li> Mi mascota es un/una: <?php echo $fido->animal; ?></li>
                <li>su nombre es: <?php echo $fido->get_name(); ?></li>
                <li>y su color es: <?php echo $fido->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $fido->get_image(); ?>" /></li>
                <li><strong>Fecha de adopción: <?php echo $fido->get_adoptionDay();?></strong></li>

            </ol>
        </div>
        <div class="card">
            <ol>

                <li> La mascota de mi madre es un/una: <?php echo $beto->animal; ?></li>
                <li>su nombre es: <?php echo $beto->get_name(); ?></li>
                <li>y su color es: <?php echo $beto->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $beto->get_image(); ?>" /></li>
                <li><strong>Fecha de adopción: <?php echo $beto->get_adoptionDay();?></strong></li>

            </ol>
        </div>

        <div class="card">
            <ol>

                <li> La mascota de mi prima es un/una: <?php echo $minina->animal; ?></li>
                <li>su nombre es: <?php echo $minina->get_name(); ?></li>
                <li>y su color es: <?php echo $minina->get_color(); ?></li>
                <li>y esta es su foto:</li>
                <li> <img src="<?php echo $minina->get_image(); ?>" /></li>
                <li><strong>Fecha de adopción: <?php echo $minina->get_adoptionDay();?></strong></li>

            </ol>
        </div>


    </main>

</body>

</html>