<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="grid3.css">
</head>
<body>

<?php

$arrayContent = array (
	array ( "¿Cómo somos?","Honestos, ágiles y eficientes.","./imagenes/que_se_nos_da_bien.png"),
	array ( "¿Que se nos da bien?","Dotar a las compañías de las soluciones que lideran el mercado, asegurando el éxito de la implantación y su calidad.","./imagenes/llegar.png"),
	array ( "¿Cómo hemos llegado hasta aquí?","Con pasión y esfuerzo en nuestro trabajo, y con la colaboración de nuestros clientes desde hace más de 25 años.","./imagenes/que_se_nos_da_bien.png"),
	array ( "¿Cómo trabajamos?","Con nuestra propia metodología que implanta que nos asegura el éxito y la calidad de los proyectos, implantando las soluciones de manera más efectiva.","./imagenes/quienes_somos.png"),

);

var_dump($arrayContent);


?>
	

	<?php 
	foreach ($arrayContent as $row) {?>
	
	<div class="caja">
		<img src="<?php echo $arrayContent[$row][2] //imagen?>"> 
		<div class="texto">
			<h2><?php echo $arrayContent[$row][0] //titulo?></h2>
			<p><?php echo $arrayContent[$row][1] //descripcion?></p>
		</div>
	</div>
	<?php  }


		
	
	
	?>

	 
	
	

</body>
</html>