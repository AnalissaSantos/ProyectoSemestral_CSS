<?php
    session_start();
    include "conexion.php";
    include "Paciente-Functions.php";

    /*Consulta el nombre y apellido*/
    $slqResult = dataNamePaciente($conexion,$_SESSION["pacCedula"]);
    /*Consulta de la ultima cita programada*/
    $slqLastCita=proxCita($conexion,$_SESSION["pacCedula"])
?>


<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags --> 
        
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/images/Flavicon.png" sizes="16x16" type="image/png">
        <title>Caja del Seguro Social | Dashboard </title>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <!--links carrusel-->
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Styles.css">
        <link rel="stylesheet" href="css/AdminStyle.css">
        <!-- Ionic icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        
    </head>
    <body>
        <?include_once "Paciente-.php"?>
    <!--contenido-->
            <section class="Content-">
                    <div class="row">
<!--                    Info del paciente-->
                        <div >
                            <div class="align-self-center">
                                <h1 class="text-center"><ion-icon ion-icon name="home" size="large" ></ion-icon>Home</h1>
                            </div>
                            <h1 class="font-weight-bold mb-0">Bienvenida(o) <?=$slqResult?> </h1> <br>
<!--                            <p class="lead text-muted">Beneficiaria de la asegurada: "Katherine Pierce"</p>-->
                        </div>

<!--                        Proxima cita-->
                        <div class="container ">
                            <div class=" bg-secondary text-light" id= "Proxima_Cita">
                                <h3 class="">Su Próxima Cita es:</h3>
                                <div class= row>
                                    <div class="col-sm-6">
                                        <p>Especialidad: <b><?=$slqLastCita[0]?></b></p>
                                        <p>Policlínica: <b> <?=$slqLastCita[1]?> </b></p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p>Hora: <b> <?=$slqLastCita[2]?>  </b></p>
                                        <p>Fecha: <b> <?=$slqLastCita[3]?> </b></p>
                                    </div>
                                    <p><i>¡Recuerda llegar a tiempo y llevar lo necesario!</i></p>
                                </div>
                            </div>
                        </div>



                        <!--carrusel-->
                        <div>
                            <section class="pt-5 pb-5">
                                <div class="">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mb-3">Citas Programadas </h3>
                                        </div>
<!--                                        Botones-->
                                        <div class="col-6 text-right">
                                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                <i class="fa fa-arrow-left"></i>
                                            </a>
                                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
<!--                                        Selectores de cita-->
                                        <div class="col-12">
                                            <div id="carouselExampleIndicators2" class="carousel slide " data-interval="false" data-ride="carousel">

                                                <div class="carousel-inner">
<!--                                                            ITEMS-->
                                                    <div style="width: 33.33%">
                                                    </div>
                                                    <div class="carousel-item active">
                                                        <div class="row">
                                                            <?=proxListCita($conexion,$_SESSION["pacCedula"])?>
                                                        </div>
                                                    </div>
<!--                                                    Fin Items-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <script type='text/javascript'></script>
                        </div>
                        <!----fin carrusel-->

                    </div>
            </section>

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Footer -->
<!-- Footer -->
    </body>
</html>