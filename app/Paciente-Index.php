<!doctype html>
<html lang="en">
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
        <!-- Ionic icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="sticky-top">
            <!--Nav Bar-->
            <header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Caja de Seguro Social</a>
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="home.html">Cerrar Sesión</a>
                    </div>
                </div>
            </header>
        </div>
        <!-- Side Bar-->
        
        <div class="d-flex">
            <div id="sidebar-container" class="bg-primary "> 
                
                <div id="logo">
                <a href="home.html">
                <img src="assets/images/css_logo.png" width="100" height="100"></a>
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
            <div class="container ">
                <div class="row">
                    <div >
                    
                        <div class="align-self-center">
                                <h1 class="text-center"><ion-icon ion-icon name="home" size="large" ></ion-icon>Home</h1>
                        </div>
                        
                        <h1 class="font-weight-bold mb-0">Bienvenida Jane Doe</h1>
                        <p class="lead text-muted">Beneficiaria de la asegurada: "Katherine Pierce"</p>
                    
                    </div>
                    <div class="container ">
                <div class=" bg-secondary text-light" id= "Proxima_Cita">
                    <h3 class="">Su Próxima Cita es:</h3>
                    <div class= row>
                    <div class="col-sm-6">
                    <p>Especialidad: <b>Medicina General</b></p>
                    <p>Policlínica: <b>Manuel María Valdés</b></p>
                    </div>
                    <div class="col-sm-6">
                        <p>Hora: <b>7:00a.m.</b></p>
                        <p>Fecha: <b>24 de noviembre 2021</b></p>
                        </div>
                        <p><i>¡Recuerda llegar a tiempo y llevar lo necesario!</i></p>
                    </div>
                    
                    
                    
                </div>
                
            </div>
                    <div>
                        <!--carrusel-->
                        <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-3">Citas Programadas </h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide " data-interval="false" data-ride="carousel">
                    
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                    
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">4 de noviembre del 2021</h5>
                                                                <h6 class="card-text">Hora: 6:00a.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="cardiología"  src="assets/images/especialidades/1.png" >
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">16 de mayo del 2021</h5>
                                                                <h6 class="card-text">Hora: 12:30 p.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="100%x280" src="assets/images/especialidades/2.png">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">15 de abril del 2021</h5>
                                                                <h6 class="card-text">Hora: 12:30 p.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="100%x280" src="assets/images/especialidades/2.png">
                                                        </div>
                                                    </div>
                    
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                    
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">7 de febrero del 2020</h5>
                                                                <h6 class="card-text">Hora: 6:00a.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="cardiología"  src="assets/images/especialidades/1.png" >
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">3 de julio del 2019</h5>
                                                                <h6 class="card-text">Hora: 6:00a.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="cardiología"  src="assets/images/especialidades/5.png" >
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="d-flex flex-row-reverse"id="button_close">
                                                                    <a href="#"> <ion-icon name="close" ></ion-icon> </a>
                                                                </div>
                                                                <h5 class="card-title">6 de enero del 2019</h5>
                                                                <h6 class="card-text">Hora: 6:00a.m.<br>Policlínica: Manuel María Valdés</h6>
                                                                
                                                            </div>
                                                            <img class="img-fluid" alt="Oncología"  src="assets/images/especialidades/6.png" >
                                                            
                                                        </div>
                                                    </div>
                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <script type='text/javascript'></script>
                    <!----fin carrusel-->
                    </div>
                    
                </div>
            </div>
            
        </section>
            <div class="container">
        </div>   
    
    </div>
    </div>
    
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- Footer -->
<!-- Footer -->
    </body>
</html>