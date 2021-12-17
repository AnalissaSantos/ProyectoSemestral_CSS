<?
    /*Limpia*/
    session_abort();
    /*Inicia nueva sesion*/
    session_start();
?>

<!doctype html>
<html lang="es" class="h-100">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>CSS Home</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    

    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
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
                            <a href="index.php"><img src="assets/images/cssbannerlight.png" alt="logo caja seguro social"></a>
                        </div>

                        <div class="col-2 d-flex  text-white justify-content-around">
                            <a class="btn btn-sm btn-outline-secondary" href="Login-Index.php">Iniciar Sesión</a>
                        </div>
                    </div>
                </header>
            </div>

            <!--navigation bar-->
            <div class="mb-auto">
                <div >
                    <nav class="navbar navbar-expand-sm text-white navbar-dark sticky-top">
                        <div class="container-fluid">
        
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="mynavbar">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><button type="button" class="btn btn-link nav-link">Inicio</button> </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)"><button type="button" class="btn btn-link nav-link">Agendar Cita</button> </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="Paciente-Login-Index.php"><button type="button" class="btn btn-link nav-link" value="<? $_SESSION['modePaciente']=0;?>">Verificar Citas</button></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)"><button type="button" class="btn btn-link nav-link">Ayuda Beneficiario</button></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="javascript:void(0)"><button type="button" class="btn btn-link nav-link">Policlínicas</button> </a>
                                </li>
                            </ul>
                            
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <main class="px-0">
                <h1>Agenda tus citas hoy</h1>
                <p class="lead">La nueva vía para agendar tus citas en policlínicas del Seguro Social. Ahora podrás agendar tus citas de forma rápida y sin demora. </p>
                <p class="lead">
                <a href="Paciente-Login-Index.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white"><button type="button" class="btn btn-link" value="<?$_SESSION['modePaciente']=1;?>">Agendar Cita</button></a>
                </p>
            </main>

            <footer class="mt-auto text-white-50">
                <p>Ingeniería Web 1SF131, by Saa, Santos, Martinez, Méndez.</p>
            </footer>
        </div>
    </body>
</html>
