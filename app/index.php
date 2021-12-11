<!doctype html>
<html lang="en" class="h-100">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CSS Citas</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
    }
    </style>


    
    <!-- Custom styles for this template -->
    <link href="css/inicio.css" rel="stylesheet">
    <body class="d-flex h-100 text-center text-white" style="background-image: url(assets/images/background.png);">
        

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

            <!--Logo y boton de iniciar sesión-->
            <div class="sticky-top ">
                <header class="blog-header py-3 ">
                    <div class="row flex-nowrap justify-content-between align-items-center ">
                    <div class="col-4 pt-1">
                        <a href="inicio.html"><img src="assets/images/cssbannerlight.png" alt="logo caja seguro social"></a>
                    </div>
        
                    <div class="col-2 d-flex  text-white justify-content-around">
                        <a id="iniciar" class="btn btn-sm btn-outline-secondary  text-white border-white" href="Login-Index.php">Iniciar Sesión</a>
                    </div>
                    </div>
                </header>
            </div>

            <!--navigation bar-->
            <div class="mb-auto">
                <div >
                    <nav class="navbar navbar-expand-sm navbar-dark sticky-top" >
                        <div class="container-fluid ">
        
                            <button class="navbar-toggler text-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="mynavbar">
                                <ul class="navbar-nav me-auto ">
                                    <li class="nav-item">
                                        <a class="nav-link active text-white" href="index.php">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link text-white" href="Paciente-Login-Index.php">Agendar Cita</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link text-white" href="Paciente-Login-Index.php">Verificar Citas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)">Ayuda al Beneficiario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="javascript:void(0)">Policlínicas</a>
                                    </li>
                                </ul>
                            
                            </div>
                        </div>
                    </nav>
                    <!--navigation bar-->
                </div>
            </div>

            <main class="px-0">
                <h1>Agenda tus citas hoy</h1>
                <p class="lead">La nueva vía para agendar tus citas en policlínicas del Seguro Social. Ahora podrás agendar tus citas de forma rápida y sin demora. </p>
                <p class="lead">
                <a href="Paciente-Login-Index.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Agendar Cita</a>
                </p>
            </main>

            <footer class="mt-auto text-white-50">
                <p>Ingeniería Web 1SF131, by Saa, Santos, Martinez, Méndez.</p>
            </footer>
        </div>


    
    </body>
</html>