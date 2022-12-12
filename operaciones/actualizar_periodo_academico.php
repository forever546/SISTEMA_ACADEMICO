<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$nombr = $_POST['nombre'];
$fecha_in = $_POST['fecha_inicio'];
$fecha_fi = $_POST['fecha_fin'];
$direc = $_POST['director'];
$fecha_acta = $_POST['fecha_actas'];

$sql = "UPDATE modulo_formativo SET nombre='$nombr', fecha_inicio='$fecha_in', fecha_fin='$fecha_fi', director='$direc', fecha_actas='$fecha_acta' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../periodo_academico.php';
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