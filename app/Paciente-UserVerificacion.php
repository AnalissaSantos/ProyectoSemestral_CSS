<?php
//Conexion
    include "BD/conexion.php";
//    Envio de datos
//    Sesion incicada


    $Cedu =$_POST['pacCedu'];
    $nac =$_POST['pacNac'];
    $res = $conexion->query("select * from Paciente
        where N_CedulaPaciente='$Cedu' 
        and Date_Nacimiento_Pac='$nac'")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        header("Location:Paciente-Cita-New.php");

    }else{
        header("Login-Failer.php");
    }
?>

<!--segun medico -->
