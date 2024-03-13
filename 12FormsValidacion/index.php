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

    body{
        font-family: "Roboto",sans-serif;
    }

    div{
        width:30%;
        border: black solid 1px;
       border-radius: 10px;
        padding: 12px;
        margin: 20px auto;
    }
    form{
        display:flex;
        flex-direction: column;
        gap: 6px;
        
       
    }

    /* input[type="text"], input[type="email"], input[type="submit"], input[type="url"], select, textarea {
        margin: 3px;
    } */

</style>

<body>


<div class= "form-content">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST"> <!--htmlspecialchars evita q te metan caracteres q no son por script te inyectan codigo-->
        Name: <input type="text" name="name" value="" required><br>
        E-mail: <input type="text" name="email"required><br>
        Website:<input type='url' name="url"><br>
        Gender Orientation:<select name="gender" required>
            <option selected disabled>Pick an option</option>
            <option value="Fem" >Fem</option>
            <option value="Masc">Masc</option>
            <option value="Non-binary">Non-binary</option>
            <option value="Non-disclosure">Prefer not to say</option>
        </select>
        Comments:<textarea name="comments"></textarea>
        <input type="submit">


    </form>
    </div>


    <?php





    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name']) && isset($_POST['gender']) && isset($_POST['email']))  {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["url"]);
        $gender = test_input($_POST["gender"]);
        $comments = test_input($_POST["comments"]);

       

    } else{
        echo "Please fill in all the required info";
    };

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);//quita los slash pa q no te escapen o inyecten code
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

    <h3>Collected DATA</h3>
    <ul>
       <li><?php echo $name; ?></li>
       <li><?php echo $email; ?></li>
       <li><?php echo $website; ?></li>
       <li><?php echo $gender; ?></li>
       <li><?php echo $comments; ?></li>
       <li><?php echo $comments; ?></li>

    </ul>

    <p><?php

    // var_dump($_SESSION);
    // foreach($_SESSION as $key => $value){
    //         echo $key." ".$value."</br>";


    // } ?>
    </p>

</body>

</html>