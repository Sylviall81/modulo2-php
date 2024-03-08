<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de Formularios</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>

    div{
        width:30%;
        border: black solid 1px;
        border-radius: 10px;
        padding: 12px;
    }
    form{
        display:flex;
        flex-direction: column;
        font-family:"Roboto",sans-serif; 
    }

    input[type="text"], input[type="email"], input[type="submit"], input[type="url"], select, textarea {
        border-radius: 10px;
        margin: 3px;

    }

</style>

<body>


<div class= "form-content">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <!--htmlspecialchars evita q te metan caracteres q no son por script te inyectan codigo-->
        Name: <input type="text" name="name" value="" required><br>
        E-mail: <input type="text" name="email"><br>
        Website:<input type='url' name="url"><br>
        Gender:<select name="gender">
            <option value="Fem">Fem</option>
            <option value="Masc" selected>Masc</option>
            <option value="Non-binary">Non-binary</option>
            <option value="Non-disclosure">Prefer not to say</option>
        </select>
        Comments:<textarea name="comments"></textarea>
        <input type="submit">


    </form>
    </div>


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["url"]);
        $gender = test_input($_POST["gender"]);
        $comments = test_input($_POST["comments"]);
    };

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h3>Collected DATA</h3>
    <ul>

    </ul>

</body>

</html>