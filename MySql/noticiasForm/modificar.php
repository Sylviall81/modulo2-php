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



$referrer = $_SERVER['HTTP_REFERER'];

if (!isset($_POST['id']) || ($_POST['id']) == "" ){
	
	
	$mensaje = "ERROR: No es posible realizar la petición: faltan parametros requeridos <br><a href='$referrer'>VOLVER</a>";
	echo $mensaje;	
	exit;
}

		$titulo =$_POST['titulo'] ;
		$autor = $_POST['autor'];
		$texto = $_POST['texto'];
		$categoria = $_POST['categoria'];
		$fecha = $_POST['fecha'];
		$url_image = $_POST['imagen-url'];
		$id = $_POST['id'];


print_r($_POST);



//$q = "UPDATE noticia SET titulo = '$titulo',texto='$texto',categoria='$categoria',imagen-url='$url_image' WHERE id='$id'";
 

$q = "UPDATE `noticia` SET `autor`='$autor',`titulo`='$titulo',`texto`='$texto',`categoria`='$categoria',`imagen-url`='$url_image' WHERE id ='$id'";

$result = mysqli_query($conexion,$q);

if (!$result){
	
	$mensaje = "No es posible realizar la petición: faltan parametros <br><a href='$referrer'>VOLVER</a>";
	echo $mensaje;
	exit;

}


header( "location:$referrer");


?>

