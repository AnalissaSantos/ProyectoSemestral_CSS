<?php
function showListPersonal($conexion)
{
    $sql="select Nombre_Pers, Apellido_Pers, Cedula_Pers from Personal;";
    $records=mysqli_query($conexion,$sql);
    if (!$records) {
        echo "Error de BD, no se pudo consultar la base de datos\n";
        echo "Error MySQL: ' . mysql_error()";
        exit;
    }

    while($data = mysqli_fetch_array($records))
    {
        $nombre=$data['Nombre_Pers'];
        $apellido=$data['Apellido_Pers'];
        $salidaNombre=''.$nombre.' '.$apellido;

        echo "<tr class='table-light'>";
        echo "<td>".$salidaNombre."</td>";
        echo "<td>".$data['Cedula_Pers']."</td>";
        echo "<td><div class='btn-group' role='group' aria-label='Basic example'>";
        echo "<a href='Admin-PolicHome-edit.php'><button type='button' class='btn btn-primaryTable'><ion-icon name='create'></ion-icon></button></a>";
        echo "<button type='button' class='btn btn-primaryTable'><ion-icon name='trash'></ion-icon></button>";
        echo "</div></td>";
        echo "</tr>";
    }
}
