<?php
$hoy=date("Y-m-d");
$time= date("h:i e");
?>
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
   <?php include_once "Admin-.php";?>

<!--    Admin Content-->
<!--    Titulo-->
    <section class="Content-">
<!--    Titulo de contenido-->
        <div class="text-center Content-Header">
            <h1 class="Content-Header__textH1"><ion-icon class="Content-icon" name="person"></ion-icon> Administrador</h1>
            <?php
                echo "<p class='Content-Header__text'><ion-icon class='Content-icon' name='calendar'></ion-icon> $hoy</p>";
            ?>
        </div>

<!--    Tabs-->
        <div class="Content-body ">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Admin-PolicHome.php">Policlinicas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Admin-Espec.php">Especialidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Admin-Rol.php">Roles</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link disabled">Disabled</a>-->
<!--                </li>-->
            </ul>
        </div>
        <hr>
<!--    Encabezado de tabla-->
        <div class="Content-body">
            <div class="Content-body__item-header">
                <div>
<!--                    <p class="Content-body__text-h1">Policlinicas</p>-->
                    <p class="Content-body__text-h1">Clinicas vinculadas</p>
                </div>
                <div>
                    <a href="Admin-PolicHome-new.php"><button type="button" class="btn btn-primary"><ion-icon class="Content-icon" name="add-circle-outline"></ion-icon> Agregar policlinica</button></a>
<!--                    <a href="Admin-Rol.html"><button type="button" class="btn btn-primary">Regristrar Roles</button></a>-->
                </div>
            </div>
        </div>
<!--Tabla-->
        <div>
<!--            Tabla muestra lista de policlinicas vinculadas-->
            <table class="table table-hover">
                <thead>
<!--                Columnas-->
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Locaci??n</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
<!--                Filas clinicas-->
                <tr class="table-light">
                    <td>Mark</td>
                    <td>Otto</td>
                    <td><div class="btn-group" role="group" aria-label="Basic example">
                        <a href="Admin-PolicHome-edit.php"><button type="button" class="btn btn-primaryTable"><ion-icon name="create"></ion-icon></button></a>
                        <button type="button" class="btn btn-primaryTable"><ion-icon name="trash"></ion-icon></button>
                    </div></td>
                </tr>
                <tr class="table-light">
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td><div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primaryTable"><ion-icon name="create"></ion-icon></button>
                        <button type="button" class="btn btn-primaryTable"><ion-icon name="trash"></ion-icon></button>
                    </div></td>
                </tr>
                <tr class="table-light">
                    <td>Mark</td>
                    <td>Otto</td>
<!--                    <td><button type="button" class="btn btn-light"><ion-icon name="create"></ion-icon></button></td>-->
                    <td><div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primaryTable"><ion-icon name="create"></ion-icon></button>
                        <button type="button" class="btn btn-primaryTable"><ion-icon name="trash"></ion-icon></button>
                    </div></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

</body>
</html>