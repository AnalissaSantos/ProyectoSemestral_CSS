<?php
    include "BD/conexion.php";
    $email =$_POST['email'];
    $password =$_POST['pass'];
    $res = $conexion->query("select * from Personal 
        where Email_Pers='$email' 
        and Contrasena_Pers='$password'")or die($conexion->error);
    if( mysqli_num_rows($res) > 0 ){
        include 'VistaAdministrador/Admin-PolicHome.html';
    }else{
        print "login incorrecto";
    }
?>

<!--segun medico -->
