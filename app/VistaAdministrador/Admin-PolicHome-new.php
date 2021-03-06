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
                    <p class="Content-body__text-h1">Agregar Policlinica</p>
                    <p class="Content-body__text-p">Vincular nueva policlinica</p>
                </div>
<!--                <div>-->
<!--                    <a href="Admin-Espec.php"><button type="button" class="btn btn-primary">Agregar Especialidad</button></a>-->
<!--                    <a href="Admin-Rol.html"><button type="button" class="btn btn-primary">Regristrar Roles</button></a>-->
<!--                </div>-->
            </div>
        </div>
<!--    Formulario editar información de clinica-->
        <div class="Content-body__Form">
            <form method="post" target="_self" action="">
    <!--            Nombre-->
                <div class="mb-3 Content-body__Form-Nombre">
                    <label for="Nombre_PolicInput" class="form-label">Nombre </label>
                    <input id="Nombre_PolicInput" name="__Nombre_Polic" type="text" class="form-control"  placeholder="Sutana Menagan" required>
                </div>
    <!--            Direcccón -->
                <div class="mb-3 Content-body__Form-Dirección">
                    <label for="Ubicacion_PolicInput" class="form-label">Dirección </label>
                    <input id="Ubicacion_PolicInput" name="__Ubicacion_PolicInput" type="text" class="form-control" placeholder="La chorrera, Barrio Colon, Costa Verde" required>
                </div>
    <!--            Horarios que poseee la clinica-->

    <!--    Estado actual del horario&ndash;&gt;-->
    <!--            select si es 24 horas o cerrado, solo uno de los dos-->
                <!--            Muestra u oculta la seleccion de tiempo-->
                <script class="Content-body__Form-Scrip">
                    function showDiv(divID, element)
                    {
                        document.getElementById(divID).style.display = element.value == 1?'block':'none';
                    }
                </script>
    <!--            Tabla de horarios-->
                <div class="Content-body__Form-HorarioLocal">
                    <p class="form-label">Horario</p>
                    <p class="Content-body__text-h2"> Ajusta el horario según el dia en cuestion</p>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Dia</th>
                            <th scope="col">Disponibilidad</th>
                        </tr>
                        </thead>
        <!--                    Dias de la semana-->
                        <tbody>
                        <tr>
                            <td>Lunes</td>
                            <td>
        <!--                        Establece la disponibilidad de horas segun el dia-->
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div1', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div1">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura" name="__Hora_Apertura" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre" name="Hora_cierre" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Martes</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div2', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div2">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura2">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura2" name="__Hora_Apertura2" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre2">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre2" name="Hora_cierre2" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Miercoles</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div3', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div3">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura3">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura3" name="__Hora_Apertura3" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre3">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre3" name="Hora_cierre3" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jueves</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div4', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div4">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura4">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura4" name="__Hora_Apertura4" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre4">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre4" name="Hora_cierre4" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Viernes</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div5', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div5">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura5">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura5" name="__Hora_Apertura5" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre5">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre5" name="Hora_cierre5" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sabado</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div6', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div6">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura6" name="__Hora_Apertura6" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre6" name="Hora_cierre6" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Domingo</td>
                            <td>
                                <div>
                                    <div>
                                        <select class="form-select" aria-label="Default select example"  onchange="showDiv('hidden_div7', this)">
                                            <option value="1">Rango de horas</option>
                                            <option value="2">Abierto 24 Horas</option>
                                            <option value="3">Cerrado</option>
                                        </select>
                                    </div>
                                    <div id="hidden_div7">
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_Apertura">Hora de apertura</label><br>
                                            <input type="time" id="Hora_Apertura7" name="__Hora_Apertura7" min="00:00" max="24:00" value="00:00" class="form-control" required >
                                        </div>
                                        <div class="form-label form-check-inline">
                                            <label for="Hora_cierre">Hora de cierre</label><br>
                                            <input type="time" id="Hora_cierre7" name="Hora_cierre7" min="00:00" max="24:00" value="23:00" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

    <!--            Enviar cambios-->
                <br>
                <div class="Content-body__Send">
                    <button style="margin: 0em 1em 3em 0em" type="submit" class="btn btn-primary">Submit</button>
                    <a onclick="history.back()"><button style="margin: 0em 0em 3em 1em" type="button" class="btn btn-primary">Cancelar</button></a>
                </div>
            </form>
        </div>
    </section>

    <!--Footer-->
    
</body>
</html>