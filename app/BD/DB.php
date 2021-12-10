<?php
@$connection=mysqli_connect("mysql","root","mendezdb","CitaWebDB");
if ($connection){
    print "Conexion BD exitosa";
}else{
    print "Conexion BD mal";
}