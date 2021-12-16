<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Icono-->
    <link rel="icon" href="../assets/images/Flavicon.png" sizes="16x16" type="image/png">
    <title>Caja del Seguro Social | Administrador</title>

    <!--Enlaces-->
        <!--Iconos-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
        <link rel="stylesheet" href="../css/Styles.css">
        <link rel="stylesheet" href="../css/AdminStyle.css">
</head>
<body>
    <!--Nav Bar-->
    <header class="navbar navbar-dark sticky-top bg-secondary flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Caja de Seguro Social</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="../Index.html">Cerrar Sesión</a>
            </div>
        </div>
    </header>

    <!-- Side Bar-->
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary ">
            <div id="logo">
                <a href="Admin-PolicHome.php"><img src="../assets/images/css_logo.png" width="100" height="100"></a>
            </div>
            <div class="container" id="menu1">
                <a href="Admin-PolicHome.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-home lead mr-2"></i>
                    Dashboard</a>
                <a href="#"class="d-block text-light p-3 border-0"><i class="icon ion-md-settings lead mr-2"></i>
                    Configuración</a>
            </div>
        </div>
    </div>

<!--    Admin Content-->
<!--    Titulo-->
    <section class="Content-">
<!--    Titulo de contenido-->
        <div class="text-center Content-Header">
            <h1 class="Content-Header__textH1"><ion-icon class="Content-icon" name="person"></ion-icon> Administrador</h1>
            <p class="Content-Header__text"><ion-icon class="Content-icon" name="calendar"></ion-icon> 16 Sept 2021</p>
            <p class="Content-Header__text"><ion-icon class="Content-icon" name="time"></ion-icon> 16:08 PM</p>
        </div>
<!--    Encabezado de tabla-->
        <div class="Content-body">
            <div class="Content-body__item-header">
                <div>
                    <p class="Content-body__text-h1">Nuevo Personal</p>
                    <p class="Content-body__text-p">Digitar la información requerida</p>
                </div>
<!--                <div>-->
<!--                    <a href="Admin-Espec.php"><button type="button" class="btn btn-primary">Agregar Especialidad</button></a>-->
<!--                    <a href="Admin-Rol.php"><button type="button" class="btn btn-primary">Regristrar Roles</button></a>-->
<!--                </div>-->
            </div>
        </div>
<!--        Formulario editar información de clinica-->
        <form method="post" target="_self" action="">
<!--            Nombre-->
            <div class="mb-3">
                <label for="Nombre_RolInput" class="form-label">Nombre </label>
                <input id="Nombre_RolInput" name="__Nombre_Rol" type="text" class="form-control"  value="" placeholder="Sutanita" required>
            </div>
<!--           Apellido Nombre-->
            <div class="mb-3">
                <label for="Apellido_RolInput" class="form-label">Apellido </label>
                <input id="Apellido_RolInput" name="__Apellido_Rol" type="text" class="form-control"  value="" placeholder="Menganita" required>
            </div>
<!--           Apellido2 Nombre-->
            <div class="mb-3">
                <label for="Apellido2_RolInput" class="form-label">Segundo Apellido </label>
                <input id="Apellido2_RolInput" name="__Apellido2_Rol" type="text" class="form-control"  value="" placeholder="Opcional" >
            </div>
<!--            Cédula -->
            <div class="mb-3">
                <label for="Cedula_RolInput" class="form-label">Cédula </label>
                <input id="Cedula_RolInput" name="__Cedula_RolInput" type="text" class="form-control" value="" placeholder="x-xxx-xxxx" required>
            </div>
<!--            Email -->
            <div class="mb-3">
                <label for="Email_RolInput" class="form-label">Correo electrónico </label>
                <input id="Email_RolInput" name="__Email_RolInput" type="email" class="form-control" value="" placeholder="correo@web.com" required>
            </div>
<!--            Contraseña -->
            <div class="mb-3">
                <label for="Pasw_RolInput" class="form-label">Contraseña </label>
                <input id="Pasw_RolInput" name="__Pasw_RolInput" type="password" class="form-control" value="" required>
            </div>
<!--            Id doctor -->
            <div class="mb-3">
                <label for="DocID_RolInput" class="form-label">Codigo Medico </label>
                <input id="DocID_RolInput" name="__DocID_RolInput" type="text" class="form-control" value="" placeholder="xxxxx" required>
            </div>
<!--            clinica labora-->
            <div class="mb-3">
                <label for="DocClinic_RolInput" class="form-label">Clinica Asociada </label>
                <input id="DocClinic_RolInput" name="__DocClinic_RolInput" type="number" class="form-control" value="" placeholder="numero de identificación de la clinica" required>
            </div>
<!--            Enviar cambios-->
            <br>
            <div>
                <button style="margin: 0em 1em 3em 0em" type="submit" class="btn btn-primary">Submit</button>
                <a onclick="history.back()"><button style="margin: 0em 0em 3em 1em" type="button" class="btn btn-primary">Cancelar</button></a>
            </div>
        </form>
    </section>

    
</body>
</html>