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

$id = $_POST['id'];
$file_image = $_POST['imagen-file'];

		
 
$q = "DELETE FROM noticia WHERE `noticia`.`id` = $id";

$result = mysqli_query($conexion,$q);

unlink($file_image);
	
if (!$result){
	
	$mensaje = "No es posible realizar la petición: faltan parametros <br><a href='$referrer'>VOLVER</a>";
	echo $mensaje;
	exit;

}

if (!unlink($file_image)){
	$mensaje = "ERROR: no se ha podido borrar la imagen aunque el contenido si";
	echo $mensaje;
}


header( "location:$referrer");
exit;

?>


