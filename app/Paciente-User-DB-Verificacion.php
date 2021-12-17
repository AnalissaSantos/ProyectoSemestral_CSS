<?php
//    Sesion incicada
    session_start();
//Conexion
    include "conexion.php";
//    Envio de datos
//    Recibe datos
    $Cedu =$_POST['pacCedu'];
    $nac =$_POST['pacNac'];
//    Verifica
    $res = $conexion->query("select * from Paciente
        where N_CedulaPaciente='$Cedu' 
        and Date_Nacimiento_Pac='$nac'");
//    Valida
    if( mysqli_num_rows($res) > 0 ){
//        Redirecciona y mantiene sesion
        $_SESSION["pacCedula"]=$Cedu;
        $_SESSION["pacNacimiento"]=$nac;
        header("Location: Paciente-Cita-New.php");
    }else{
        header("Location: Login-Failer.php");
    }



