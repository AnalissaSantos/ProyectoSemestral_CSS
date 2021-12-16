<?php
//Funiciónn para mostrar nombre y apellido del usuario en sesion
function dataNamePaciente($conexion, $_cedula)
{
    $sql="SELECT Nombre_A_Pac,Apellido_A_Pac FROM Paciente WHERE N_CedulaPaciente ='$_cedula'";
    $data=mysqli_query($conexion,$sql);
    if (!$data) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
    };

    $output=$data->fetch_assoc();
    $name=$output['Nombre_A_Pac'];
    $apelllido=$output['Apellido_A_Pac'];
    $salidaPantalla=''.$name.' '.$apelllido;
    return $salidaPantalla;
}


function proxCita($conexion,)
{
    $sql="SELECT Nombre_A_Pac,Apellido_A_Pac FROM Paciente WHERE N_CedulaPaciente ='$_cedula'";
    $data=mysqli_query($conexion,$sql);
    if (!$data) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
    };

    $output=$data->fetch_assoc();
    $name=$output['Nombre_A_Pac'];
    $apelllido=$output['Apellido_A_Pac'];
    $salidaPantalla=''.$name.' '.$apelllido;
    return $salidaPantalla;
}