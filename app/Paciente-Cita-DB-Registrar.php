<?php

    include "conexion.php";

    $date=$_POST['select_DiaCita'];
    $iscontrol=$_POST['selec_CitaControl'];
    $hora=$_POST['select_Hora'];
    $doctor=$_POST['select_medico'];
    $espec=$_POST['select_Especialidad'];
    $cedu=$_SESSION["pacCedula"];
//    $cedu="1-7024-2987";
    $polic=$_POST['select_Policlinic'];

//  Cedula del paciente
    $sql="INSERT INTO Cita (Fecha_Cita, Is_Control, hora_cita, ID_Personal, ID_Especialidad, N_CedulaPaciente, ID_Estado_Cita)
          VALUES ('$date','$iscontrol','$hora','$doctor','$espec','$cedu','1')";
    $verificacion = mysqli_query($conexion,$sql);
    if ($verificacion == TRUE)
    {
        header("Location: Paciente-Cita-Validation.php");
//  Confirmación de insert
    }else{
        header("Location: Paciente-Cita-Negacion.php");
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
//    mysqli_close($conexion);
?>
