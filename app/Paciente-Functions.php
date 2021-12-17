<?php
//Funiciónn para mostrar nombre y apellido del usuario en sesion
function dataNamePaciente($conexion,$_cedula)
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


function proxCita($conexion,$_cedula)
{
    $sql="SELECT Nombre_Espec, Nombre_Polic, Fecha_Cita, hora_cita
            from Cita join Especialidad E on E.ID_Especialidad = Cita.ID_Especialidad
            join Policlinica P on P.ID_Polic = Cita.ID_Polic
            where N_Cita=(select max(N_Cita) from Cita where N_CedulaPaciente='$_cedula');";
    $data=mysqli_query($conexion,$sql);
    if (!$data) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
    };

    $output=$data->fetch_assoc();
    $Espec=$output['Nombre_Espec'];
    $Polic=$output['Nombre_Polic'];
    $Fecha=$output['Fecha_Cita'];
    $Hora=$output['hora_cita'];
    return array($Espec,$Polic,$Fecha,$Hora);
}

function proxListCita($conexion,$_cedula)
{
    $sql="SELECT N_Cita,Nombre_Espec, Nombre_Polic, Fecha_Cita, hora_cita
            from Cita join Especialidad E on E.ID_Especialidad = Cita.ID_Especialidad
            join Policlinica P on P.ID_Polic = Cita.ID_Polic
            where  N_CedulaPaciente='$_cedula'
            order by Fecha_Cita desc;";
    $data=mysqli_query($conexion,$sql);
    if (!$data) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
    }

    while($output = mysqli_fetch_array($data))
    {
        echo "<div class='col-md-4 mb-3'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<div class='d-flex flex-row-reverse' id='button_close'>";
        echo "<form action='Paciente-Cita-Cancelación.php' method='post'><input type='hidden' name='numCita' value='".$output['N_Cita']."'><button type='submit'><ion-icon name='close'></ion-icon></button></form>";
        echo "</div>";
        echo "<h5 class='card-title'>Fecha: ".$output['Fecha_Cita']."</h5>";
        echo "<h6 class='card-text'>Hora: ".$output['hora_cita']."<br>Policlinica: ".$output['Nombre_Polic']."</h6>";
        echo "</div>";
        echo "<img class='img-fluid' alt='cardiología'  src='assets/images/especialidades/1.png' >";
        echo "</div>";
        echo "</div>";
    }
}


function predeleteCita($conexion, $numCita)
    {
        $sql="SELECT Nombre_Espec, Nombre_Polic, Fecha_Cita, hora_cita
            from Cita join Especialidad E on E.ID_Especialidad = Cita.ID_Especialidad
            join Policlinica P on P.ID_Polic = Cita.ID_Polic
            where N_Cita='$numCita';";

        $data=mysqli_query($conexion,$sql);
        if (!$data) {
            echo "Error de BD, no se pudo consultar la base de datos\n";
            echo "Error MySQL: ' . mysql_error()";
            exit;
        };

        $output=$data->fetch_assoc();
        echo "<div class='col-md-4 mb-3'>";
        echo "<div class='card'>";
        echo "<div class='card-body'>";
        echo "<div class='d-flex flex-row-reverse' id='button_close'>";
        echo "</div>";
        echo "<h5 style='color: black' class='card-title'>Fecha: ".$output['Fecha_Cita']."</h5>";
        echo "<h6 style='color: black' class='card-text'>Hora: ".$output['hora_cita']."<br>Policlinica: ".$output['Nombre_Polic']."</h6>";
        echo "</div>";
//        echo "<img class='img-fluid' alt='cardiología'  src='assets/images/especialidades/1.png' >";
        echo "</div>";
        echo "</div>";
    }

?>