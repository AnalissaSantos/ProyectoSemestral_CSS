<?php
    include "../conexion.php";

    $nombre=$_POST['__Nombre_Rol'];
    $apellido=$_POST['__Apellido_Rol'];
    $cedula=$_POST['__Cedula_RolInput'];
    $email=$_POST['__Email_RolInput'];
    $contrasena=$_POST['__Pasw_RolInput'];
    $tipoRol=$_POST['selec_rol'];
    $doctorid=$_POST['__DocID_RolInput'];
    $idclinica=$_POST['select_Rol_Policlinic'];

    $sql="insert into CitaWebDB.Personal (Nombre_Pers, Apellido_Pers, Apellido_PersB, Cedula_Pers, Email_Pers, Contrasena_Pers)
            values  ('$nombre', '$apellido', null, '$cedula', '$email', '$contrasena');";
    $request=mysqli_query($conexion,$sql);

    if ($request == TRUE)
    {
        header("Location: ../Admin-Rol-New-Validacion.php");
    //  Confirmación de insert
    }else{
        header("Location: ../Admin-Rol-New-Nope.php");
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }