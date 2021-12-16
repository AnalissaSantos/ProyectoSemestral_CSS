<?php
    include "conexion.php";
//    Recibe
    $email =$_POST['email'];
    $password =$_POST['pass'];
//    Busca si existe personal
    $res = $conexion->query("select ID_Personal from Personal 
        where Email_Pers='$email' 
        and Contrasena_Pers='$password'")or die($conexion->error);

    /*Ingesta de filas recibidas*/
    $posRol=$res->fetch_assoc();
    $posRol=$posRol["ID_Personal"];

    /*busca si existe un doctor con ese ID de personal*/
    $rol = $conexion->query("SELECT * FROM Doctor WHERE ID_Personal='$posRol'")or die($conexion->error);
    /*Si existe es personal*/
    if( mysqli_num_rows($res) > 0 ){
        /*Si existe es docto*/
        if(mysqli_num_rows($rol) > 0){
            header("Location:Medico-Index.php");
        }else{/*Si no es personal admin*/
           header("Location:VistaAdministrador/Admin-PolicHome.php");
        }
    }else{/*Si no no es personal*/
        header("Location:Login-Failer.php");
    }
?>

<!--segun medico -->
