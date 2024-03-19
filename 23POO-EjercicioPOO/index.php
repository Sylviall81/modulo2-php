<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO en PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .form-content {
        border: black solid 1px;
        width: 30%;
        border-radius: 5px;
        padding: 20px;
        margin: 20px auto;
        display: flex;
        flex-direction: column;
    }

    .card{
        margin: 0 auto;
    }

    .full-wrapper{

        display: flex;
        flex-direction: row;

    }
</style>

<body>
    <header>
        <h1>Clase Usuario</h1>
    </header>

    <main>


        <?php



        //funcion sanear
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data); //quita los slash pa q no te escapen o inyecten code
            $data = htmlspecialchars($data);
            return $data;
        }



        // CLASE USUARIO


        class User
        {
            private $name; //nombre color e imagen son atributos privados solo accesible a traves de un getter
            private $email; //private solo se puede acceder desde esta clase
            private $ocupation;
            private $education; //private solo se puede acceder desde esta clase
            private $comments; //private solo se puede acceder desde esta clase
            private $image; //private solo se puede acceder desde esta clase

            function __construct($name, $email, $ocupation, $education, $comments, $image) //funciona como setter
            {
                $this->name = $name;
                $this->email = $email;
                $this->ocupation = $ocupation;
                $this->education = $education;
                $this->comments = $comments;
                $this->image = $image;
            }

            //getter y setter

            function get_userData()
            {
                $userData = array(
                    'name' => $this->name,
                    'email' => $this->email,
                    'ocupation' => $this->ocupation,
                    'education' => $this->education,
                    'comments' => $this->comments,
                    'image' => $this->image
                );

                return $userData;
            }



            public function getName()
            {
                return $this->name;
            }

           

            public function getImage()
            {
                return $this->image;
            }
        }

        ?>


<div class = "full-wrapper">

        <!---FORMULARIO DE REGISTRO DE USUARIO--->

        <div class="form-content">


            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data"> <!--htmlspecialchars evita q te metan caracteres q no son por script te inyectan codigo-->
                <h3>Registro de usuario</h3>


                <div class="form-group">
                    <label for="name">
                        Name: <input class="form-control" type="text" name="name" value="<?php $name ?>"><br>

                    </label>
                </div>

                <div class="form-group">

                    <label for="email">

                        E-mail: <input class="form-control" type="text" name="email" value="<?php $email ?>"><br>


                    </label>

                </div>

                <div class="form-group">


                    <label for="ocupation">

                        Ocupation:<input class="form-control" type='text' name="ocupation"><br>

                    </label>
                </div>
                <div class="form-group">


                    <label for="education">

                        Education:<input class="form-control" type='text' name="education"><br>

                    </label>
                </div>

                <div class="form-group">

                    <label for="gender">

                        Gender Orientation:<select name="gender">
                            <option selected disabled>Pick an option</option>
                            <option value="Fem">Fem</option>
                            <option value="Masc">Masc</option>
                            <option value="Non-binary">Non-binary</option>
                            <option value="Non-disclosure">Prefer not to say</option>
                        </select>
                    </label>
                </div>

                <div class="form-group">

                    <label for="comment">Comentarios:</label>

                </div>
                <div>
                <textarea name="comment" id="" cols="30" rows="6"></textarea>
                </div>
                <br>


                <!--<input type="file" name="profile-pic" id="profile-pic">-->

                <input class="btn btn-primary" type="submit" value="enviar" name="submit">


            </form>

        </div>


        <?php



        // define variables and set to empty values
        $nameErr = $emailErr = $genderErr = $commentErr = $websiteErr = "";
        $fullName = $email = $gender = $comment = $education = $ocupation = $image = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //validacion nombre si esta vacio pide q es requerido sie sta lleno llama la funcion "sanear";
            if (empty($_POST["name"])) {

                $nameErr = "Name is required";
            } else {

                //$title = "User Data";

                $name = test_input($_POST["name"]);
            }



            //email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }

            //url
            if (empty($_POST["education"])) {
                $eduErr = "Education is required";
            } else {
                $education = test_input($_POST["education"]);
            }

            if (empty($_POST["ocupation"])) {
                $ocuErr = "Ocupation is required";
            } else {
                $ocupation = test_input($_POST["ocupation"]);
            }

            //comment (me da problema el comment)



            $comment = test_input($_POST["comment"]);


            if (empty($_POST["gender"])) {
                $genderErr = "Gender is required";
            } else {
                $gender = test_input($_POST["gender"]);
            }
        }


        $image = "./uploaded-files/pic4.jpg"; //arreglar primero  el cargar file



        $currentUser = new User($name, $email, $ocupation, $education, $comment, $image);



        //var_dump($currentUser);




        ?>


        <div class="card" style="width: 20rem;">


            <img src="<?php echo $currentUser->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $currentUser->getName() ?></h5>
                    
                <ul class="card-text">
                <?php $userInfo = $currentUser->get_userData();
                foreach ($userInfo as $key => $value) {?>
                    <li><?php echo $key. ": ". $value;?></li>
                <?php }?>         
                </ul>

                
                <!--<a href="#" class="btn btn-primary">Go somewhere</a>-->
            </div>
        </div>






































        <!--FINAL FORM-->













        </div>
    </main>

</body>

</html>