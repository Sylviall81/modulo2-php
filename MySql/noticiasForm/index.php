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
	<!--<link rel="stylesheet" href="main.css" />-->
	
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
	
	<div class="form-container">
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"method="POST" enctype="multipart/form-data"> 

            <label for="titulo">
                Título: <input type="text" name="titulo" value="Noticia introducida por Form"><br>
            </label>
			 <label for="autor">
                Autor/a: <input type="text" name="autor" value="Autor/a de la noticia"><br>
            </label>
			 <label for="texto">
                Texto: <input type="text" name="texto" value="Lorem ipsum Lorem ipsum lorem ipsum"><br>
            </label>
		
			
		<label>Categoría: <input list="categorias" name="categoria" value="" /></label>
		
    	
				
				<datalist id="categorias">
					<option value="Chrome"></option>
					
					<?php 
					
					$query = "SELECT DISTINCT categoria FROM noticias ORDER BY categoria";
					
					$resultCats = mysqli_query($conexion, $query) or die ("Fallo en la consulta");
					
					while ($row = mysqli_fetch_array($resultCats)){?>
					
					<option value= "<?php echo $row['categoria'];?>"><?php echo $row['categoria']?></option>
						
				

					
					<?php } ?>
  

</datalist>
				
				
				
				
				
				
			
					
			
				
			</label>
            
					
		<label>
			Subir Imagen:<br>
		
		<input type="file" name="imagen-file" id="imagen-file">
		</label>
		
	<label for="imagen-url">

                Url de imagen:<input type='url' name="imagen-url"><br>
                
            </label>
            

		
            <input type="submit" value="enviar" name="submit">

            <?php

            if ($_SERVER["REQUEST_METHOD"]== "POST"){
				
				$titulo=$_POST['titulo'];
				$autor=$_POST['autor'];
				$texto=$_POST['texto'];
				$categoria=$_POST['categoria'];
				$imagen_url=$_POST['imagen-url'];
				$imagen_file=$_POST['imagen-file'];
				
			
					
					 if (isset($_FILES['imagen-file'])){
						 $timestamp = time(); // Obtenemos el timestamp actual
						 $filename = $timestamp . "-" . $_FILES['imagen-file']['name'];
						 
						 
						 
						 $imagePath= "img/.$filename.";
           

				 	if (!move_uploaded_file($_FILES['imagen-file']['tmp_name'], $imagePath)){
							$mensaje = "ERROR: no se ha subido la noticia <a href=index.php>'VOLVER'</a>";
					 	echo $mensaje;
						$imagen_file = "img/default.jpg" ;
						
					 	exit;
				 	} 
					 $imagen_file = $imagePath;
					
					
					//Creamos la consulta SQL
				
				$q = " INSERT INTO `noticia` (`id`, `fecha`, `autor`, `titulo`, `texto`, `categoria`, `imagen-url`,`imagen-file`) VALUES (NULL, CURRENT_TIMESTAMP, '$autor','$titulo','$texto','$categoria','$imagen_url','$imagen_file')";
				mysqli_query($conexion,$q);
				
				mysqli_close($conexion);
				
				
				};
				
			}


    ?>






        </form>
		
	</div>
	
	
	
	<!--INICIO TABLA NOTICIAS RESULTADOS ----->
	
	<div class="table-wrapper">
						<table>
							<thead id="top">
								<tr>
									<th colspan="2">Imagen</th>
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
									<td><img src="<?php echo $row['imagen-file'] ?>" alt ='imagen noticia' width = '200px'></td>
									<td><img src="<?php echo $row['imagen-url'] ?>" alt ='imagen noticia' width = '200px'></td>
									<td><?php echo $row['id']; ?></td>
									<td><strong><?php echo $row["titulo"]; ?></strong></td>
									<td><?php echo $row["autor"]; ?></td>
									<td><?php echo $row["categoria"]; ?></td>
									<td><?php echo $row["fecha"]; ?></td>
									<td ><?php //echo $row["texto"];	
										 $strFinal = substr($row["texto"], 0, 100);//corta la noticia en 100 caract 
										   echo $strFinal;
										   if ($strFinal < $row["texto"]){
                       echo " ... ";
                   }
																		  
					/*	echo " <br>";												  
                       echo " <br><b><a href='noticia.php?id=" . $row['id'] ."'>Ver Noticia -></a></b><br>";
						echo " <br><b><a href='noticia.php?id=" . $row['id'] ."&modificar=true'> Ver Noticia y actualizar -></a></b><br>";												  
                    //   echo " <a href='noticia.php?id=" . $row['id'] ."&update=true'>Modificar noticia -></a>";*/
                   ?>

									
									</td>
									<td colspan = "3">
										
										<?php
																		  
																		  
					echo " <br><b><a href='noticia.php?id=" . $row['id'] ."'>Ver Noticia -></a></b><br>";
					echo " <br><b><a href='noticia.php?id=" . $row['id'] ."&modificar=true'> Ver Noticia y actualizar -></a></b><br>";												  
															
										
										?>
										
										<form action="eliminar.php" method="post">
											<input type="hidden" name = "id" value="<?php echo $row['id'];?>">
											<input type="hidden" name = "imagen-file" value="<?php echo $row['imagen-file'];?>">
											
										<input style = "background-color: red;" type="submit" value="Eliminar">
										</form>
									
									
									</td>
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
	
	//print_r($newsArray); si funciona, xq imprime el array con las row
	

    ?>

	
	
	
	
	
</body>
</html>