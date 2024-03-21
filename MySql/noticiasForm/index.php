<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//ini

$host = "localhost";
$user = "sylvia";
$psswd = "45960967Kk*";
$database = "noticias";

// Conexión
$conexion = mysqli_connect($host, $user, $psswd) or die ("No se puede conectar con el servidor");

echo "Conectado al servidor<br>";


// Seleccionamos la base de datos

mysqli_select_db($conexion, $database) or die ("No se puede seleccionar la base de datos");

echo "Hemos seleccionado la base de datos $database";
echo "<br>";

//busqueda

//seleccionamos tabla

$q ="SELECT * FROM noticia";
	
$result =mysqli_query($conexion,$q) or die("Fallo en la conexion");

$nrows = mysqli_num_rows ($result); //funcion q cuenta el num de filas


//print_r($nrows);

echo "<br>";

//print_r($row);




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Conexión a Mysql</title>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="main.css" />
	
</head>
	<style>
		
		body{
			padding:30px;
		
		};
		
		td {
		text-align: left;
		};
	</style>
	
	

<body>
	
	    <?php
        //echo "La conexión se ha establecido\n";
        //echo "Hemos seleccionado la base de datos $database";
	
	echo  "Tenemos $nrows noticias<hr>";
	echo "<br>";
	
	?>
	
	<!--form para recoger noticias-->
	
	<div>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="POST"> 

            <label for="titulo">
                Título: <input type="text" name="titulo" value="Noticia introducida por Form"><br>
            </label>
			 <label for="autor">
                Autor/a: <input type="text" name="autor" value="Autor/a de la noticia"><br>
            </label>
			 <label for="texto">
                Texto: <input type="text" name="texto" value="Lorem ipsum Lorem ipsum lorem ipsum"><br>
            </label>
			<label for="categoria">
                Categoría <input type="text" name="categoria" value="general"><br>
			</label>
            
					<label for="imagen-url">

                url de imagen:<input type='url' name="imagen-url"><br>
                
            </label>

            
<!-- <input type="file" name="profile-pic" id="profile-pic">-->
		
            <input type="submit" value="enviar" name="submit">

            <?php

            if ($_SERVER["REQUEST_METHOD"]== "POST"){
				
				$titulo=$_POST['titulo'];
				$autor=$_POST['autor'];
				$texto=$_POST['texto'];
				$categoria=$_POST['categoria'];
				$imagen_url=$_POST['imagen-url'];
				
				$q = " INSERT INTO `noticia` (`id`, `fecha`, `autor`, `titulo`, `texto`, `categoria`, `imagen-url`) VALUES (NULL, CURRENT_TIMESTAMP, '$autor','$titulo','$texto','$categoria','$imagen_url')";
				mysqli_query($conexion,$q);
				
				mysqli_close($conexion);
				
				
			

			};
				
               


    ?>






        </form>
		
	</div>
	
	
	
	<!--INICIO TABLA NOTICIAS RESULTADOS ----->
	
	<div class="table-wrapper">
						<table>
							<thead id="top">
								<tr>
									<th>Imagen</th>
									<th>Id </th>
									<th>Título</th>
									<th>Autor/a</th>
									<th>Categoría</th>
									<th>Fecha Creación</th>
									<th colspan="2">Contenido</th>
								</tr>
							</thead>
							<tbody>
		
								<?php
								$newsArray = array();
								while($row = mysqli_fetch_array($result)){ ?>
	
								<tr >
									<td><img src="<?php echo $row['imagen-url'] ?>" alt ='imagen noticia' width = '200px'></td>
									<td><?php echo $row['id']; ?></td>
									<td><strong><?php echo $row["titulo"]; ?></strong></td>
									<td><?php echo $row["autor"]; ?></td>
									<td><?php echo $row["categoria"]; ?></td>
									<td><?php echo $row["fecha"]; ?></td>
									<td ><?php echo $row["texto"]; ?></td>
									
									
									
								</tr>
		
								
								<?php
																		  
											array_push($newsArray,$row);							  
																		
																		  
										}; 
								
								?>
							</tbody>
							<tfoot>
								<tr>
									<td colspan="2">
										<a href="#top" class="button small fa-circle-up">Subir</a>
									</td>

								</tr>
							</tfoot>
						</table>
					</div>

<!------FINAL TABLA NOTICIAS --->
	
	<?php
	
	//print_r($newsArray); si funciona imprime el array con las row
	

    ?>

	
	
	
	
	
</body>
</html>