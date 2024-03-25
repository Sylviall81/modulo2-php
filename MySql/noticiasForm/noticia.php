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

//echo "Conectado al servidor<br>";


// Seleccionamos la base de datos

mysqli_select_db($conexion, $database) or die ("No se puede seleccionar la base de datos");

//echo "Hemos seleccionado la base de datos $database";
//echo "<br>";

//nueva query para traer las categorias al datalist igual q en index
$query = "SELECT DISTINCT categoria FROM noticia ORDER BY categoria";
$resultCategorias = mysqli_query($conexion, $query) or die ("Fallo en la consulta");


?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarjeta de Noticia</title>
 <!-- <link rel="stylesheet" href="main.css"> -->
</head>
	
	<style>
		
		.card-container{
			
			padding:30px;
			width:45%;
			margin: 0 auto;
		}
		
	.tarjeta {
  display: flex;
  flex-direction: column;
  margin: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.tarjeta img {
  width: 100%;
  height: auto;
  border-top-left-radius: 8px;
  border-top-right-radius: 8px;
}

.contenido {
  padding: 20px;
}

.contenido h2 {
  margin-top: 0;
}

.autor {
  font-weight: bold;
}

.fecha, .categoria {
  font-style: italic;
}

.texto {
  margin-top: 10px;
}
		
		.form-container{
			padding: 30px;
			width: 50%;
		
		}
		
		formulario {
  max-width: 400px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

h2 {
  text-align: center;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea,
select {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type="date"] {
  width: calc(100% - 16px); /* Width minus padding */
}

/*input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}*/

		
	</style>
<body>
	
	<div class = "card-container">
	

<div class="tarjeta">
	
	<?php
	
	//print_r($_GET);
	
	$referrer = $_SERVER['HTTP_REFERER'];
	
	if(!isset($_GET["id"])){
		
		$mensaje = "Hay un error en la peticion: faltan parametros requeridos<br><a href=$referrer >VOLVER</a>";
		echo $mensaje;
		exit;
	};
	
			
 $id = ($_GET["id"]);
		
		


//seleccionamos tabla

$q ="SELECT * FROM noticia WHERE id=$id";
	
$result =mysqli_query($conexion,$q) or die("Fallo en la conexion");
		
		$newsDetail = mysqli_fetch_array($result);
		
		$titulo =$newsDetail['titulo'] ;
		$autor = $newsDetail['autor'];
		$texto = $newsDetail['texto'];
		$categoria = $newsDetail['categoria'];
		$fecha = $newsDetail['fecha'];
		$url_image = $newsDetail['imagen-url'];
		
		
	
	
	
	
	?>
	
	
	  <img src="<?php echo $url_image;?>" alt="Imagen de la noticia">
	  <div class="contenido">
		<h2><?php echo $titulo;?></h2>
		<p>Autor: <span class="autor"><?php echo $autor;?></span></p>
		<p class="texto"><?php echo $texto;?></p>
		  <p class="fecha">Fecha de Publicación:<?php echo $fecha;?> </p>
		<p class="categoria">Categoría: <?php echo $categoria;?></p>
		  <a href="index.php" target = "_blank">Volver</a>
	  </div>
	</div>
	</div>
	
	
	<?php
	if (isset($_GET["modificar"])){ 
		?>
	<div class ="form-container">
		
					<div class="formulario">
			  <h2>Actualizar Noticia</h2>
			  <form action="modificar.php" method="POST">
				  
				<input type="hidden" id="id" name="id" value = "<?php echo $id ?>" required>
				  
				<label for="url_imagen">URL de la Imagen:</label>
				<input type="text" id="imagen-url" name="imagen-url" value = "<?php echo $url_image ?>" required>

				<label for="titulo">Título:</label>
				<input type="text" id="titulo" value = "<?php echo $titulo; ?>" name="titulo" required>

				<label for="autor">Autor:</label>
				<input type="text" value = "<?php echo $autor ?>" id="autor" name="autor" required>

				<label for="texto">Contenido:</label>
				  <textarea id="texto" name="texto" rows="4" required>"<?php echo $texto ?>" </textarea>
				

				<label for="fecha">Fecha:</label>
				<input type="text" id="fecha" value = "<?php echo $fecha?>" name="fecha" required>

				<label for="categoria">Categoría:</label>
				<input list="categorias" type="text" id="categoria" name="categoria" value="<?php echo $categoria;?>" >
				  <datalist id="categorias">
                <?php
                
                // Bucle sobre las distintas categorías.
                    while ($cat = mysqli_fetch_array($resultCategorias)) { 
                        $selected="";
                        if ($categoria == $cat["categoria"]) $selected="selected";
                        ?>
                    <option value="<?php echo $cat["categoria"]; ?>" <?php echo $selected; ?>>
                        <?php echo $cat["categoria"]; ?>
                    </option>
                <?php  } ?>
            </datalist>
				
				

				<input type="submit" value="Guardar Cambios">
			  </form>
			</div>
		
		
	</div>
<?php
			
			
		/*$q = "UPDATE `noticia` SET `id`='$id',`fecha`='$fecha.',`autor`='$_POST["autor"]',`titulo`='$_POST["titulo"]',`texto`='$_POST["texto"]',`categoria`='$_POST["categoria"]',`imagen-url`='[url-imagen]' WHERE 'id'= $id";*/
			
	}
	
	mysqli_close($conexion);
?>

</body>
</html>
