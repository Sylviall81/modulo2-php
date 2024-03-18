<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
</head>
<body>

<?php
class Pet {
    public $animal;
    private $name;
    private $color;

  function __construct($animal,$name) {
    $this->animal = $animal;
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function get_animal() {
    return $this->animal;
  }


  function set_color($color) {
     $this->color = $color;
  }

  function get_color() {
    return $this->color;
  }
}

$fido = new Pet("Dog","Fido");
$fido->set_color("black");

$minina = new Pet ("Cat", "Minina");
$minina->set_color("white");
?>

<p>Mi mascota es: <?php echo $fido->animal; //se puede acceder asi xq animal es public?> su nombre es:<?php echo $fido -> get_name();?> y su color es: <?php echo $fido->get_color();?></p>

<p> La mascota de mi prima es: <?php echo $minina->animal;?>su nombre es:<?php echo $minina->get_name();?> y su color es: <?php echo $minina->get_color();?></p>
    
</body>
</html>

