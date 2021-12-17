<?php
    include "../conexion.php";
    $sql="select * from Policlinica;";
    $records=mysqli_query($conexion,$sql);
    while($data = mysqli_fetch_array($records))
    {
        echo "<tr class='table-light'>";
        echo "<td>".$data['Nombre_Polic']."</td>";
        echo "<td>".$data['Ubicacion']."</td>";
        echo "<td><div class='btn-group' role='group' aria-label='Basic example'>";
        echo "<a href='Admin-PolicHome-edit.php'><button type='button' class='btn btn-primaryTable'><ion-icon name='create'></ion-icon></button></a>";
        echo "<button type='button' class='btn btn-primaryTable'><ion-icon name='trash'></ion-icon></button>";
        echo "</div></td>";
        echo "</tr>";
    }
