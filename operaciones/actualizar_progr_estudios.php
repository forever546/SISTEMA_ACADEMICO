<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$cod = $_POST['codigo'];
$tip = $_POST['tipo'];
$nombr = $_POST['nombre'];
$resolu = $_POST['resolucion'];

$sql = "UPDATE programa_estudios SET codigo='$cod', tipo='$tip', nombre='$nombr', resolucion='$resolu' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../programa_estudios1.php';
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