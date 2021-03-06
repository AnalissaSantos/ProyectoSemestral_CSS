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
                    <p class="Content-body__text-h1">Nueva Especialidad </p>
                    <p class="Content-body__text-p">Digitar información solicitada</p>
                </div>
<!--                <div>-->
<!--                    <a href="Admin-Espec.php"><button type="button" class="btn btn-primary">Agregar Especialidad</button></a>-->
<!--                    <a href="Admin-Rol.html"><button type="button" class="btn btn-primary">Regristrar Roles</button></a>-->
<!--                </div>-->
            </div>
        </div>
<!--        Formulario editar información de clinica-->
        <form method="post" target="_self" action="">
<!--            Nombre-->
            <div class="mb-3">
                <label for="Nombre_EspecInput" class="form-label">Nombre </label>
                <input id="Nombre_EspecInput" name="__Nombre_Espec" type="text" class="form-control"  placeholder="Odontología" required>
            </div>
<!--&lt;!&ndash;            Direcccón &ndash;&gt;-->
<!--            <div class="mb-3">-->
<!--                <label for="Ubicacion_PolicInput" class="form-label">Dirección </label>-->
<!--                <input id="Ubicacion_PolicInput" name="__Ubicacion_PolicInput" type="text" class="form-control" value="La chorrera,Barrio Colon, Costa Verde" required>-->
<!--            </div>-->
<!--&lt;!&ndash;            Horarios que poseee la clinica&ndash;&gt;-->

<!--&lt;!&ndash;            Estado actual del horario&ndash;&gt;-->
<!--            <div>-->
<!--                <p class="form-label">Horario Actual</p>-->
<!--                <table class="table table-borderless">-->
<!--                <thead>-->
<!--                <tr>-->
<!--                    <th scope="col">Dia</th>-->
<!--                    <th scope="col">Disponibilidad</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr>-->
<!--                    <td>Lunes</td>-->
<!--                    <td>08:30 - 23:00</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Martes</td>-->
<!--                    <td>08:30 - 23:00</td>-->
<!--                </tr>-->
<!--                <tr>-->
<!--                    <td>Jueves</td>-->
<!--                    <td>Cerrado</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->
<!--            </div>-->
<!--&lt;!&ndash;            Editar el horario&ndash;&gt;-->
<!--            <div>-->
<!--                <p class="form-label">Edición de horario</p>-->
<!--                <p class="form-label">Seleccione el o los dias a modificar </p>-->
<!--    &lt;!&ndash;            Checkboxes dia de la semana&ndash;&gt;-->
<!--                <div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">-->
<!--                        <label class="form-check-label" for="inlineCheckbox1">Lunes</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">-->
<!--                        <label class="form-check-label" for="inlineCheckbox2">Martes</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">-->
<!--                        <label class="form-check-label" for="inlineCheckbox3">Miercoles</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">-->
<!--                        <label class="form-check-label" for="inlineCheckbox4">Jueves</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">-->
<!--                        <label class="form-check-label" for="inlineCheckbox5">Viernes</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">-->
<!--                        <label class="form-check-label" for="inlineCheckbox6">Sábado</label>-->
<!--                    </div>-->
<!--                    <div class="form-check form-check-inline">-->
<!--                        <input name="Horario_diaInput" class="form-check-input" type="checkbox" id="inlineCheckbox7" value="option7">-->
<!--                        <label class="form-check-label" for="inlineCheckbox7">Domingo</label>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <br>-->
<!--&lt;!&ndash;            select si es 24 horas o cerrado, solo uno de los dos&ndash;&gt;-->
<!--&lt;!&ndash;            Muestra u oculta la seleccion de tiempo&ndash;&gt;-->
<!--                <script>-->
<!--                    function showDiv(divID, element)-->
<!--                    {-->
<!--                        document.getElementById(divID).style.display = element.value == 1?'block':'none';-->
<!--                    }-->
<!--                </script>-->
<!--    &lt;!&ndash;            Select de formato de horario&ndash;&gt;-->
<!--                <div>-->
<!--                    <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div', this)">-->
<!--                        <option selected>Despliegue para establecer disponibilidad horaria</option>-->
<!--                        <option value="1">Rango de horas</option>-->
<!--                        <option value="2">Abierto 24 Horas</option>-->
<!--                        <option value="3">Cerrado</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--                <br>-->
<!--    &lt;!&ndash;            set de horas&ndash;&gt;-->
<!--                <div id="hidden_div">-->
<!--                    <div class="form-label form-check-inline">-->
<!--                        <label for="Hora_Apertura">Hora de apertura</label><br>-->
<!--                        <input type="time" id="Hora_Apertura" name="__Hora_Apertura" min="00:00" max="24:00" value="00:00" class="form-control" required >-->
<!--                    </div>-->
<!--                    <div class="form-label form-check-inline">-->
<!--                        <label for="Hora_cierre">Hora de cierre</label><br>-->
<!--                        <input type="time" id="Hora_cierre" name="Hora_cierre" min="00:00" max="24:00" value="23:00" class="form-control" required>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            Enviar cambios-->
            <br>
            <div>
                <button style="margin: 0em 1em 3em 0em" type="submit" class="btn btn-primary">Submit</button>
                <a onclick="history.back()"><button style="margin: 0em 0em 3em 1em" type="button" class="btn btn-primary">Cancelar</button></a>
            </div>
        </form>
    </section>

    <!--Footer-->
    
</body>
</html>