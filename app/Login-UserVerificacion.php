<?php
    include "BD/conexion.php";
    $email =$_POST['email'];
    $password =$_POST['pass'];
    $res = $conexion->query("select ID_Personal from Personal 
        where Email_Pers='$email' 
        and Contrasena_Pers='$password'")or die($conexion->error);
    $posRol=$res->fetch_assoc();
    $posRol=$posRol["ID_Personal"];
    $rol = $conexion->query("SELECT * FROM Doctor WHERE ID_Personal='$posRol'")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        if(mysqli_num_rows($rol) > 0){
            header("Location:Medico-Index.php");
        }else{
           header("Location:VistaAdministrador/Admin-PolicHome.php");
        }
    }else{
        header("Location:Login-Failer.php");
    }
?>

<!--segun medico -->
