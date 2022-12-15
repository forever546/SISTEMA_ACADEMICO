<?php
// conexion utiliza servidor-usuario-password-base de datos
$conexion = mysqli_connect("localhost", "desarro1_ever", "V@Q0b~]vD#Zk", "sis_aca");
if ($conexion) {

} else {
   echo "conexion fallida";
}
$conexion->set_charset("utf8");
?>