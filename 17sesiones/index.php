<?php
session_start();

// Esto para el botón de logout
if(isset($_GET["logout"])){
    session_destroy();
    header("Location: login.php");
    exit();
}

// Defino las variables para poder entrar
define("USEREMAIL", 'fake@mail.com');
define("USERPSWD", '123456');

// Comprobar el inicio de sesión
if (isset($_POST['email']) && $_POST['email'] == USEREMAIL && isset($_POST['password']) && $_POST['password'] == USERPSWD){
    $_SESSION['user'] = $_POST['name'];
    // Decide hacia dónde redirigir al usuario después del inicio de sesión
    header("Location: login.php");
    exit();
}

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

<section class="container">
    <h2>Iniciar Sesión</h2>
    <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="text" name="name" placeholder="Nombre" value="Sylvia" required>
        <input type="text" name="email" placeholder="Correo electrónico" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <input id="submit" type="submit" value="Login">
    </form>
</section>

<p>
    <?php
    // Mostrar información de sesión si está establecida
    if (isset($_SESSION['user'])) {
        print_r($_SESSION);
    }
    ?>
</p>

<a href="login.php?logout=true">Logout</a>

</body>
</html>
