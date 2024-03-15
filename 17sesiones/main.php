<?php 


session_start();

if(!$_SESSION['user']){
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main content</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

print_r($_SESSION);

?>
<h1>Bienvenid@ <?php $_SESSION['name']?> a la prensa hoy</h1>

<div class="card">

<?php

file_get_contents("https://www.elpais.com")
?>

</div>


    
</body>
</html>