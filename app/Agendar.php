<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags --> 
        
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/images/Flavicon.png" sizes="16x16" type="image/png">
    
        <title>Caja del Seguro Social | Agendar Cita </title>

    
        <!--links Javascript de Bootstrap-->
            <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
            <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
            <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso16.css" /> 
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!--Link al CSS-->
            <link rel="stylesheet" href="css/Styles.css">
        <!-- Ionic icons -->
            <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
            <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <!--Font Awesome (added because you use icons in your prepend/append)-->
            <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    </head>

    <body>
    <!--Nav Bar-->
    <header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Caja de Seguro Social</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
            <a class="nav-link px-3" href="Index.html">Cerrar Sesión</a>
            </div>
        </div>
    </header>
    

    <!-- Side Bar-->
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary "> 
            
            <div id="logo">
            <a href="home.html"><img src="assets/images/css_logo.png" width="100" height="100"></a>
            </div>
            
            <div class="container" id="menu1">
            <a href="Paciente-Index.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-home lead mr-2"></i>
                Dashboard</a>
            <a href="#"class="d-block text-light p-3 border-0"><i class="icon ion-md-settings lead mr-2"></i>
            Configuración</a>
            </div>
            
        </div>
        </div>
    <!--contenido-->
    <div id ="content" class="bg-grey w-100">
        <section class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div> 
                    
                        <div class=" justify-content-center">
                        <blockquote class="text-center blockquote">
                        
                        <h1 class="">
                            <ion-icon name="clipboard" size=""large"></ion-icon>
                            Agendar Cita
                        </h1>
                        </blockquote>
                        
                    </div>
                            
                    </div>
                    

                    <hr>
                    
                    <section>
                        <form action="index.php">

                            
                            <div class" id="my-carousel" class="carousel carousel-dark slide carousel-fade" data-bs-touch="false"  data-interval="false">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#my-carousel" data-slide-to="0" ></li>
                                    <li data-target="#my-carousel" data-slide-to="1"></li>
                                    <li data-target="#my-carousel" data-slide-to="2"></li>
                                    <li data-target="#my-carousel" data-slide-to="3"></li>
                                    <li data-target="#my-carousel" data-slide-to="4"></li>
                                    <li data-target="#my-carousel" data-slide-to="5"></li>
                                    <li data-target="#my-carousel" data-slide-to="6"></li>
                                    <li data-target="#my-carousel" data-slide-to="7"></li>

                                </ol>
                                <div class="carousel-inner mh-100">
                                    
                                    <div class="carousel-item active">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary ">
                                                <div class="container text-light" id="Agenda_Box">
                                                    <h3>Para Agendar una cita seguiremos unos simples pasos</h3>
                                                    <h3>El proceso durará menos de 5 minutos.</h3>
                                                    <h3>¡Empezemos!</h3> <br>
                                                    <p>Para iniciar selecciona la flecha derecha</p>
                                                </div>
                                                    
                                            </div>
                                        </div>

                                    </div>

                                    
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class="d-flex align-items-center  text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>Introduzca o Verifique su correo electrónico *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                    <input type="email" name="email" class="form-control" placeholder="ejemplo@css.com" aria-describedby="basic-addon2" required>
                                                                    
                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class=" d-flex align-items-center text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2 ">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>¿En qué policlínica le gustaría agendar? *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                    
                                                                    <select name="formPoliclinic" class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona una policlínica</option>
                                                                        <option value="1">Manuel María Valdés</option>
                                                                        <option value="2">Dr. Manuel Ferrer Valdés</option>
                                                                        <option value="3">Dr. Joaquín José Vallarino</option>
                                                                        <option value="4">Dr. Carlos N  Brin</option>
                                                                        <option value="5">Generoso Guardia</option>
                                                                    </select>
                                                                    
                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class="d-flex align-items-center  text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>¿Con qué especialidad le gustaría agendar? *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                    
                                                                    <select name="formEspecialidad" class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona una especialidad</option>
                                                                        <option value="1">Medicina General</option>
                                                                        <option value="2">Oncología</option>
                                                                        <option value="3">Pediatría</option>
                                                                        <option value="4">Cardiología</option>
                                                                        <option value="5">Odontología</option>
                                                                        <option value="6">Otorrinolaringología</option>
                                                                    </select>
                                                                    
                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class="d-flex align-items-center  text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>¿Es una cita de control? *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                <select name="formCitaControl" class="form-select" aria-label="Default select example">
                                                                    <option selected>Selecciona una opción</option>
                                                                    <option value="1">Sí</option>
                                                                    <option value="2">No</option>
                                                                </select>
                                                                    
                                                                <!--poner un if aqui seria cool para controlar eso dq if sí entonces que aparezca abajo-->
                                                                <br><label class="form-label"><H4>Introduzca el número de referencia</H4></label>
                                                                <input name="formNumReferencia" type="text" class="form-control" placeholder="ABC-000-123" required>
                                                                <div class="form-text text-light">
                                                                    El número en la perte superior derecha de la referencia médica.
                                                                </div>

                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class="d-flex align-items-center text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>¿Con qué doctor le gustaría agendar? *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                    
                                                                    <select name="formMedics" class="form-select" aria-label="Default select example">
                                                                        <option selected>Selecciona un doctor</option>
                                                                        <option value="6">Cualquier Doctor disponible</option>
                                                                        <option value="1">Dra. Ana Saa </option>
                                                                        <option value="2">Dr. Renné Rana</option>
                                                                        <option value="3">Dr. Viktor Nikifrov</option>
                                                                        <option value="4">Dr. Shoto Todoroki</option>
                                                                        <option value="5">Dra. Margareth Peacock</option>
                                                                    </select>
                                                                    
                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item ">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary">
                                                <div class="d-flex align-items-center  text-light" id="Agenda_Box">
                                                        <div class="row row-cols-1  row-cols-md-2">
                                                            <br>
                                                            <div class="col">
                                                                
                                                                <h3>¿Qué día y hora desea Agendar? *</h3>
                                                                
                                                            </div> 
                                                            <div class="col">
                                                                    <!--Holis quisiera poner un date picker aqui-->
                                                                    <div class="bootstrap-iso bg-secondary text-light">
                                                                            <div class="form-group ">
                                                                                <label class="control-label requiredField" for="date">
                                                                                    Fecha de la Cita
                                                                                    <span class="asteriskField">*</span>
                                                                                </label>
                                                                                <div class="input-group">
                                                                                    <div class="input-group-addon">
                                                                                        <i class="fa fa-calendar"> </i>
                                                                                    </div>
                                                                                    <input class="form-control" id="date" name="formDiaCita" placeholder="DD/MM/YYYY" type="text"/>
                                                                                </div>
                                                                            </div>
                                                                        <div class="btn-group text-light" role="group" aria-label="Basic radio toggle button group">
                                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                                                <label class="btn btn-outline-light" for="btnradio1">7:00a.m.</label>
                                                                                
                                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                                                <label class="btn btn-outline-light" for="btnradio2">9:30a.m.</label>
                                                                            
                                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                                                                <label class="btn btn-outline-light" for="btnradio3">12:00p.m.</label>
                                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                                                                                <label class="btn btn-outline-light" for="btnradio4">1:00p.m.</label>
                                                                                
                                                                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                                                                <label class="btn btn-outline-light" for="btnradio5">1:30p.m.</label>
                                                                            </div>
                                                                    </div>
                                                                    
                                                                        
                                                            </div>
                                                            <br>
                                                        </div>
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        
                                        <div class="row justify-content-center">
                                            <div class="col-lg-8 bg-secondary ">
                                                <div class="container text-light" id="Agenda_Box">
                                                    <h3>¡Ya casi terminamos!</h3>
                                                    <h4>Revisa la información y cuando estes listo agenda la cita</h4>
                                                    <br>
                                                    <!-- Button trigger modal -->
                                                    <button name="submitAgendar" type="button" class="btn btn-light btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Agendar Cita
                                                    </button>
                                
                                
                                                </div>
                                                    
                                            </div>
                                        </div>

                                    </div>
                                    

                                    <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div>
                                
                            </div>
                            
                        </form>

                        <!---manejo de datos de agendar--->
                        <!--verificacion correo-->
                        <?php
                            echo 'Correo electronico: ' . $_POST['email']  ;
                        ?>
                        <!--agendar policlinica-->
                        <?php
                            if(isset($_POST['submitAgendar'])){
                                if(!empty($_POST['formPoliclinic'])){
                                    $policlinics = $_POST['formPoliclinic'];
                                    echo 'Policlinica seleccionada: ' . $policlinics; 
                                }else{
                                    echo 'No ha seleccionado una policlinica';
                                }
                            }
                        ?>
                        <!--agendar especialidad-->
                        <?php
                            if(isset($_POST['submitAgendar'])){
                                if(!empty($_POST['formEspecialidad'])){
                                    $especialidad = $_POST['formEspecialidad'];
                                    echo 'Especialidad Seleccionada: ' . $especialidad;
                                }else{
                                    echo 'No ha seleccionado una especialidad';
                                }
                            }
                        ?>
                        <!--cita de control-->
                        <?php
                            if(isset($_POST['submitAgendar'])){
                                if(!empty($_POST['formCitaControl'])){
                                    $citaControl = $_POST['formCitaControl'];
                                    echo 'Tipo de cita seleccionado: ' . $citaControl;
                                }else{
                                    echo 'Seleccione un tipo de cita';
                                }
                            }
                        ?>
                        <?php
                            echo 'Numero de referencia: ' . $_POST['formNumReferencia'] ;
                        ?>

                        <!--doctor-->
                        <?php
                            if(isset($_POST['submitAgendar'])){
                                if(!empty($_POST['formMedics'])){
                                    $doctor = $_POST['formMedics'];
                                    echo 'Doctor seleccionado: ' . $doctor;
                                }else{
                                    echo 'Seleccione un doctor';
                                }
                            }
                        ?>

                        <!-- agendar dia y hora -->
                        <?php
                            echo 'Cita asignada: ' . $_POST['formDiaCita'] ;
                        ?>
                        </div>
                    </section>
            </div>
        </section>    
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">¿Deseas Agendar Esta Cita?</h5>
            <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-6">
                        <p>Policlínica: <strong>Manuel María Valdés</strong></p>
                        <p>Especialidad: <strong>Odontología</strong></p>
                        <p>Doctor: <strong>Dra. Renne Rana</strong></p>
                    </div>
                    <div class="col-6">
                        <p>Fecha: <strong>Lunes, 12 de diciembre 2021</strong></p>
                        <p>Hora: <strong>7:00a.m.</strong></p>
                        <p>Control: <strong>no</strong></p>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
            <button type="button" class="btn btn-primary">Agendar</button>
            </div>
        </div>
        </div>
    </div>
        <script type='text/javascript'></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

        <!-- Include Date Range Picker -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

        <script>
            $(document).ready(function(){
                var date_input=$('input[name="date"]'); //our date input has the name "date"
                var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
                date_input.datepicker({
                    format: 'mm/dd/yyyy',
                    container: container,
                    todayHighlight: true,
                    autoclose: true,
                })
            })
        </script>
</body>