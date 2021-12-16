<?php

    include "BD/conexion.php";

    $date=$_POST['select_DiaCita'];
    $iscontrol=$_POST['selec_CitaControl'];
    $name=$_POST['email'];
    $polic=$_POST['select_Policlinic'];
    $espec=$_POST['select_Especialidad'];
    $numRef=$_POST['select_NumReferencia'];
    $doctor=$_POST['select_medico'];
    $hora=$_POST['select_Hora'];
    $cedu=$_POST['pacCedu'];

//  Cedula del paciente
    $sql="INSERT INTO Cita (Fecha_Cita, Is_Control, hora_cita, ID_Personal, ID_Especialidad, N_CedulaPaciente, ID_Estado_Cita)
          VALUES ('$date','$iscontrol','$hora','$doctor','$espec','$cedu','1')";
    $verificacion = mysqli_query($conexion,$sql);
    if ($verificacion == TRUE)
    {
        echo "record inserted successfully";
//  Confirmación de insert
    }else{
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }
    mysqli_close($conexion);
?>
