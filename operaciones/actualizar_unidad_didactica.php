<?php
include "../include/conexion.php";
include "../include/busquedas.php";

$id = $_POST['id'];
$des = $_POST['descripcion'];
$pro_estu = $_POST['id_programa_estudio'];
$modulo = $_POST['id_modulo'];
$semestre = $_POST['id_semestre'];
$credito = $_POST['creditos'];
$hora = $_POST['horas'];
$tipos = $_POST['tipo'];
$orden = $_POST['orden'];

$sql = "UPDATE unidad_didactica SET descripcion='$des', id_programa_estudio='$pro_estu ', id_modulo='$modulo', id_semestre='$semestre', creditos='$credito', horas='$hora', tipo='$tipos', orden='$orden' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../unidad_didactica.php';
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