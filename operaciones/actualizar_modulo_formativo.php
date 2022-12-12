<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];
$modular = $_POST['nro_modulo'];
$id_programa = $_POST['id_programa_estudio'];

$sql = "UPDATE modulo_formativo SET descripcion='$descripcion', nro_modulo='$modular', id_programa_estudio='$id_programa' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../modulo_formativo.php';
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