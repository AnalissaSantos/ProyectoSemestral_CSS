<!doctype html>
<html lang="es" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Paciente | Login</title>

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
<body class="d-flex h-100 text-center text-white" style="background-image: url(assets/images/background.png);">

        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">

            <!--Logo y boton de iniciar sesión-->
                <div class="sticky-top ">
                    <header class="blog-header py-3 ">
                        <div class="row flex-nowrap justify-content-between align-items-center ">
                            <div class="col-4 pt-1">
                                <a href="index.php"><img src="assets/images/cssbannerlight.png" alt="logo caja seguro social"></a>
                            </div>

                        </div>
                    </header>
                </div>

            <!--Formulario -->
                <div class="container">
                    <div class="row justify-content-md-center" style="margin-top:5%">
                        <form class="col-3" method="POST" action="Paciente-User-DB-Verificacion.php">
                            <h2>Identificarse</h2>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Número de cédula</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="pacCedu" placeholder="x-xxx-xxx" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="exampleInputPassword1" name="pacNac">
                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-primary">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>