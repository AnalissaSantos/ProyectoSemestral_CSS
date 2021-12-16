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
    





    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Styles.css">
    <!--Ionic icons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/AdminStyle.css">
    </head>

    <body class="bg-grey">
        <div class="sticky-top">
            <!--Nav Bar-->
            <header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Caja de Seguro Social</a>
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap">
                        <a class="nav-link px-3" href="index.php">Cerrar Sesión</a>
                    </div>
                </div>
            </header>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!--Sidebar-->
                <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-primary sidebar collapse">
                    <div class="position-sticky pt-3 d-flex justify-content-center">
                        <ul class="nav flex-column ">
                            <li class="nav-item">
                                <div id="logo" class="d-flex justify-content-center">
                                    <img src="assets/images/css_logo.png" width="100" height="100">
                                </div>
                                <br>
                                <a class="nav-link active text-light" aria-current="page" href="Medico-Index.php">
                                    <span data-feather="home"></span>
                                    <i class="icon ion-md-home lead mr-2"></i>
                                    Inicio
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="Medico-Agenda.php">
                                    <span data-feather="file"></span>
                                    <i class="icon ion-md-settings lead mr-2"></i>
                                    Agenda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">
                                    <span data-feather="file"></span>
                                    <i class="icon ion-md-settings lead mr-2"></i>
                                    Configuración
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!--Contenido Principal-->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2"><ion-icon ion-icon name="home" size="large" ></ion-icon>Inicio</h1>
                </div>

                <div class="col-lg-9 col-md-8">
                    
                    <h1 class="font-weight-bold mb-0">Bienvenida Dr. Jane Doe</h1>
                    
                </div>

                <br>

                <div class="container">
                    <div class= "text-dark" id= "Proximo_paciente">
                        <div class="container">
                            <h3 class="">Siguiente paciente es:</h3>
                            <br>
                            <div class= row>
                                <div class="col-sm-6">
                                    <p>Asegurado: <b>Ana Saa</b></p>
                                    <p>Hora: <b>7:00 am</b></p>
                                </div>
                            </div>  
                        </div>
                        
                    </div>
                    
                </div>

                <br>
                <br>
                <!--Tabla con resumen de agenda-->
                <h2>Agenda</h2>
                <div class="table-responsive">
                    <hr>
                    <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        <th scope="col">Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1,001</td>
                        <td>random</td>
                        <td>data</td>
                        <td>placeholder</td>
                        <td>text</td>
                        </tr>
                        <tr>
                        <td>1,002</td>
                        <td>placeholder</td>
                        <td>irrelevant</td>
                        <td>visual</td>
                        <td>layout</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>data</td>
                        <td>rich</td>
                        <td>dashboard</td>
                        <td>tabular</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>information</td>
                        <td>placeholder</td>
                        <td>illustrative</td>
                        <td>data</td>
                        </tr>
                    </tbody>
                    </table>      
                </main>
            </div>
        </div>


        <!-- Bootstrap JS -->
        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
        
</html>