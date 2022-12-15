<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "desarro1_ever", "4QYZwwy~QLOF", "desarro1_ever");
if ($conexion) {

} else {
   echo "conexion fallida";
}
$conexion->set_charset("utf8");
?>