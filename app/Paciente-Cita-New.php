<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Icono-->
    <link rel="icon" href="assets/images/Flavicon.png" sizes="16x16" type="image/png">
    <title>Caja del Seguro Social | Nueva Cita</title>

    <!--Enlaces-->
        <!--Iconos-->
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--CSS-->
        <link rel="stylesheet" href="css/Styles.css">
        <link rel="stylesheet" href="css/AdminStyle.css">
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

    <!--Side Bar-->
    <div class="d-flex">
        <div id="sidebar-container" class="bg-primary ">
            <div id="logo">
                <a href="Admin-PolicHome.php"><img src="../assets/images/css_logo.png" width="100" height="100"></a>
            </div>
            <div class="container" id="menu1">
                <a href="Paciente-Index.php" class="d-block text-light p-3 border-0"><i class="icon ion-md-home lead mr-2"></i>
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
            <h1 class="Content-Header__textH1">Citas Medicas</h1>
            <?php
                $Date= date('m-d-Y',time());
                $time= date("h:i:s a", time())
//            <p class="Content-Header__text"><ion-icon class="Content-icon" name="calendar"></ion-icon> 16 Sept 2021</p>
//            <p class="Content-Header__text"><ion-icon class="Content-icon" name="time"></ion-icon> 16:08 PM</p>
            ?>
        </div>

<!--    Encabezado de tabla-->
        <div class="Content-body">
            <div class="Content-body__item-header">
                <div>
                    <p class="Content-body__text-h1">Agendar Cita</p>
                    <p class="Content-body__text-p">Digitar la información requerida</p>
                </div>
<!--                <div>-->
<!--                    <a href="Admin-Espec.php"><button type="button" class="btn btn-primary">Agregar Especialidad</button></a>-->
<!--                    <a href="Admin-Rol.php"><button type="button" class="btn btn-primary">Regristrar Roles</button></a>-->
<!--                </div>-->
            </div>
        </div>

<!--        Formulario editar información de clinica-->
        <form method="post" action="Paciente-Cita-DB-Registrar.php">
<!--            Nombre-->
            <div class="mb-3">
                <label for="userEmailInput" class="form-label">Correo electrónico </label>
                <input id="userEmailInput" name="email" type="email" class="form-control"  value="" placeholder="nombre@corre.com" required>
            </div>
            <div>
                <label for="select_Policlinic" class="form-label">Policlínica</label>
                <select class="form-select" aria-label="Default select example" id="select_Policlinic" name="select_Policlinic" required>
                    <option selected>Selecciona una policlínica</option>
                    <option value="6">Manuel María Valdés</option>
                    <option value="7">Dr. Manuel Ferrer Valdés</option>
                    <option value="8">Dr. Joaquín José Vallarino</option>
                    <option value="9">Dr. Carlos N  Brin</option>
                    <option value="10">Generoso Guardia</option>
                </select>
            </div>
            <br>
            <div>
                <label for="select_Especialidad" class="form-label">Especialidad</label>
                <select class="form-select" aria-label="Default select example" id="select_Especialidad" name="select_Especialidad" required>
                    <option selected>Selecciona una especialidad</option>
                    <option value="6">Medicina General</option>
                    <option value="7">Oncología</option>
                    <option value="8">Pediatría</option>
                    <option value="9">Cardiología</option>
                    <option value="10">Odontología</option>
                    <option value="11">Otorrinolaringología</option>
                </select>
            </div>
            <br>
            <script class="Content-body__Form-Scrip">
                function showDiv(divID, element)
                {
                    document.getElementById(divID).style.display = element.value ==0?'none':'block';
                }
            </script>
            <div>
                <label for="selec_CitaControl" class="form-label">¿Es cita de control?</label>
                <select class="form-select" aria-label="Default select example" id="selec_CitaControl" name="selec_CitaControl"  onchange="showDiv('hidden_div1', this)" required>
                    <option selected value=0>Selecciona una opción</option>
                    <option value=0>No</option>
                    <option value=1>Sí</option>
                </select>
                <br>
                <div id="hidden_div1">
                    <label for="select_NumReferencia" class="form-label">N° Referencia</label>
                    <input id="select_NumReferencia" name="select_NumReferencia" type="text" class="form-control"  placeholder="0000000">
                </div>
            </div>
            <br>
            <div>
                <label for="select_medico" class="form-label">Médico</label>
                <select class="form-select" aria-label="Default select example" id="select_Especialidad" name="select_medico" required>
                    <option selected>Selecciona un doctor</option>
                    <option value="0">Cualquier Doctor disponible</option>
                    <option value="6">Dra. Ana Saa </option>
                    <option value="7">Dr. Renné Rana</option>
                    <option value="8">Dr. Viktor Nikifrov</option>
                    <option value="9">Dr. Shoto Todoroki</option>
                    <option value="10">Dra. Margareth Peacock</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="select_DiaCita" class="form-label">Dia de la cita </label>
                <input id="select_DiaCita" name="select_DiaCita" type="date" class="form-control"   required>
            </div>
            <br>
            <div class="mb-3">
                <label for="select_Hora" class="form-label">Hora de la cita </label>
                <input id="select_Hora" name="select_Hora" type="time" class="form-control"   required>
            </div>
            <div style="margin: 0em 0em 3em 0em">
                <button style="margin: 0em 1em 0em 0em" type="submit" class="btn btn-primary">Enviar</button>
                <a onclick="history.back()"><button style="margin: 0em 0em 0em 1em" type="button" class="btn btn-primary">Cancelar</button></a>
            </div>
        </form>
    </section>

</body>
</html>