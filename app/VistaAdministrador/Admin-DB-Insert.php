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

//    if ($tipoRol==1){
//        $sql2="SELECT * FROM Personal WHERE Cedula_Pers='$cedula';";
//        $request2=mysqli_query($conexion,$sql2);
//        $data=$request2->fetch_assoc();
//        $data=$data["ID_Personal"];
//
//        $sql3="insert into CitaWebDB.Doctor (ID_Doctor, ID_Personal, ID_Polic, ID_Especialidad)
//                values  ('$doctorid','$data', '$idclinica',2),";
//        $request3=mysqli_query($conexion,$sql3);
//    }

    if ($request == TRUE)
    {
        header("Location: ../Admin-Rol-New-Validacion.php");
    //  Confirmación de insert
    }else{
        header("Location: ../Admin-Rol-New-Nope.php");
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }