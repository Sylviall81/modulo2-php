<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Admin Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="full-container">
        <header>
            <h1>Bienvenid@ a tu panel de administrador</h1>

        </header>
        <main>

            <section class="list-content">

            <h3>Usuarios Participantes:</h3>

                <ol>

                    <?php

                    $arrayParticipantes = array(
                        'Maria Lopez',
                        'Pablo Perez',
                        'José Martinez',
                        'Victor Flores',
                        'Marta Lozano',
                        'Elena Mendez',
                    )

                    ?>

                    <div class="form-container">

                        <?php
                        foreach ($arrayParticipantes as $participante) {
                            echo '<li>' . $participante . '</li>';
                        };

                        ?>
                </ol>



    </div>

    </section>
    <section class="form-container">

        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Registro de Premios</h3>
                            <p>Por favor, rellena los datos:</p>
                            <form class="requires-validation" novalidate method="POST" action='index.php'>

                                <div class="col-md-12">
                                    <label for="prize-qtity">Número de premios a repartir:</label>
                                    <input class="form-control" type="number" name="prize-qtity" placeholder="inserta un número" required>
                                    <!-- <div class="valid-feedback">Username field is valid!</div> -->
                                    <div class="invalid-feedback">Campo requerido. Por favor, inserta un número.</div>
                                </div>

                                <!-- <div class="col-md-12">
                                           <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                           <div class="valid-feedback">Username field is valid!</div>
                                           <div class="invalid-feedback">Username field cannot be blank!</div>
                                        </div> -->

                                <!-- <div class="col-md-12">
                                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                             <div class="valid-feedback">Email field is valid!</div>
                                             <div class="invalid-feedback">Email field cannot be blank!</div>
                                        </div> -->

                                <div class="col-md-12">
                                    <label for="prize-qtity">Indica la cuantía por premio</label>
                                    <select class="form-select mt-3" required>
                                        <option selected disabled value="">1er Premio</option>
                                        <option value="50">50.000€</option>
                                        <option value="40">40.000€</option>
                                        <option value="30">30.000€</option>
                                    </select>
                                    <!-- <div class="valid-feedback">You selected a position!</div> -->
                                    <!-- <div class="invalid-feedback">Please select a position!</div> -->
                                </div>
                                <div class="col-md-12">
                                    <select class="form-select mt-3" required>
                                        <option selected disabled value="">2o Premio</option>
                                        <option value="20">20.000€</option>
                                        <option value="15">15.000€</option>
                                        <option value="10">10.000€</option>
                                    </select>
                                    <!-- <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div> -->
                                </div>
                                <div class="col-md-12">
                                    <select class="form-select mt-3" required>
                                        <option selected disabled value="">3er Premio</option>
                                        <option value="5">5.000€</option>
                                        <option value="2">3.000€</option>
                                        <option value="1">1.000€</option>
                                    </select>
                                    <!-- <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div> -->
                                </div>



                                <!-- <div class="col-md-12">
                                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                                           <div class="valid-feedback">Password field is valid!</div>
                                           <div class="invalid-feedback">Password field cannot be blank!</div>
                                       </div> -->


                                <!-- <div class="col-md-12 mt-3">
                                        <label class="mb-3 mr-1" for="gender">Gender: </label>
            
                                        <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="male">Male</label>
            
                                        <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="female">Female</label>
            
                                        <input type="radio" class="btn-check" name="gender" id="secret" autocomplete="off" required>
                                        <label class="btn btn-sm btn-outline-secondary" for="secret">Secret</label>
                                           <div class="valid-feedback mv-up">You selected a gender!</div>
                                            <div class="invalid-feedback mv-up">Please select a gender!</div>
                                        </div> -->

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label">confirmo que la información insertada es correcta</label>
                                    <!-- <div class="invalid-feedback">Please confirm that the entered data are all correct!</div> -->
                                </div>


                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="winners-container">

    </section>

    </main>
    </div>

    <script src="scriptForm.js"></script>
</body>

</html>