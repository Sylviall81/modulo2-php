

<?
session_start();

//Esto para el boton de logout

if(isset($_GET["logout"])){
    session_destroy();
   }

   //defino las variables para poder entrar

define("USEREMAIL",'fake@mail.com');
define("USERPSWD",'123456');

//Quiero ver las variables 
echo USEREMAIL;
echo 'USEREMAIL';
print_r($_POST);



// if (isset($_POST['email']) && $_POST['email'] == USEREMAIL && isset($_POST['password']) && $_POST['password'] == USERPSWD){

//     $_SESSION['user'] = $_POST['name'];
//     header("Location:login.php");

//     echo $_SESSION['user'];
    
// } ;

// if (isset($_SESSION['user'])){

//     header("Location:login.php");

// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<center>

<h1>Bienvenid@</h1>

</center>

<?
//Quiero ver las variables 
echo USEREMAIL;
echo 'USEREMAIL';
print_r($_POST);
echo USEREMAIL;

?>

<section class="container">
						<h2>Iniciar Sesión</h2>

						<form id="form" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
                        
                            <input type="text" name="name" placeholder="Nombre" value = "Sylvia" required>
                            <input type="text" name="email"  required>
						    <input type="password" name="password" required>
						    <input id= 'submit' type="submit" value="Login">
						</form>
					


				</section>

                <p>
                    <?

                print_r($_SESSION);
                print_r($_POST);

                ?>



                </p>

               <a href="<?php echo "login.php?logout=true";?>" >Logout</a>

             
</body>
</html>