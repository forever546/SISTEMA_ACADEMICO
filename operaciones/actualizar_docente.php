<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$id = $_POST['id'];
$dni = $_POST['dni'];
$ape_nom = $_POST['apellidos_nombres'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$email = $_POST['correo'];
$cel = $_POST['telefono'];
$genero = $_POST['id_genero']
$niv_edu = $_POST['nivel_educacion'];
$cond_laboral = $_POST['cond_laboral'];
$cargo = $_POST['id_cargo'];

$sql = "UPDATE docente SET dni='$dni', apellidos_nombres='$ape_nom', fecha_nac='$fecha_nac', direccion='$direccion', correo='$email', telefono='$cel', id_genero='$genero', nivel_educacion='$niv_edu', cond_laboral='$cond_laboral', id_cargo='$cargo' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../docentes.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>