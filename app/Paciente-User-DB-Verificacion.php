<?php
//    Sesion incicada
    session_start();
//Conexion
    include "conexion.php";
//    Envio de datos
//    Recibe datos
    $Cedu =$_POST['pacCedu'];
    $nac =$_POST['pacNac'];
//    Verifica existencia
    $res = $conexion->query("select * from Paciente
        where N_CedulaPaciente='$Cedu' 
        and Date_Nacimiento_Pac='$nac'")or die($conexion->error);
//    Valida
    if( mysqli_num_rows($res) > 0 ){
//        Redirecciona y mantiene sesion
        header("Location:Paciente-Cita-New.php");
        $_SESSION["pacCedula"]=$Cedu;
        $_SESSION["pacNacimiento"]=$nac;
    }else{
        header("Login-Failer.php");
    }



