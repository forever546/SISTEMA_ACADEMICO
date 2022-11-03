<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "root", "root", "sis_Acad");
if ($conexion) {

} else {
   echo "conexion fallida";
}
?>