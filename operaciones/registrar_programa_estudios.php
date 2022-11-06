<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$cod = $_POST['codigo'];
$tip = $_POST['tipo'];
$nombr = $_POST['nombre'];
$resolu = $_POST['resolucion'];

$b_programa_estudios = buscarProgramaEstudios($conexion, $cod);
$c_r_b_programa_estudios = mysqli_num_rows($b_programa_estudios);
if ($c_r_b_programa_estudios == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$cod','$tip','$nombr', '$resolu')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
    $b_id_programa_estudios = buscarProgramaEstudios($conexion, $cod);
	$res_b_programa_estudios = mysqli_fetch_array($b_id_programa_estudios);
    $id_programa_estudios = $res_b_programa_estudios['id'];
    
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../programa_estudios.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar programa de estudios');
			window.history.back();
			</script>
			";
	}
}


?>