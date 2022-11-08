<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$descripcion = $_POST['descripcion'];

$b_semestre = buscarSemestre($conexion, $id);
$c_r_b_semestre = mysqli_num_rows($b_semestre);
if ($c_r_b_semestre == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO semestre (descripcion) VALUES ('$descripcion')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
    $b_id_semestre = buscarSemestre($conexion, $cod);
	$res_b_semestre = mysqli_fetch_array($b_semestre);
    $id_semestre = $res_b_semestre['id'];
    
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../semestre.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar semestre academico');
			window.history.back();
			</script>
			";
	}
}


?>