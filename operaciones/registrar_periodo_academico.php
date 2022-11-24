<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$nombr = $_POST['nombre'];
$fecha_ini = $_POST['fecha_inicio'];
$fecha_fin = $_POST['fecha_fin'];
$director = $_POST['director'];
$fecha_actas = $_POST['fecha_actas'];

$b_periodo_academico = buscarPeriodoAcademico($conexion, $cod);
$c_r_b_periodo_academico = mysqli_num_rows($b_periodo_academico);
if ($c_r_b_periodo_academico == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO periodo_academico (nombre, fecha_inicio, fecha_fin, director, fecha_actas) VALUES ('$nombr','$fecha_ini','$fecha_fin', '$director','$fecha_actas')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
    $b_id_periodo_academico = buscarPeriodoAcademico($conexion, $cod);
	$res_b_periodo_academico = mysqli_fetch_array($b_id_periodo_academico);
    $id_periodo_academico = $res_b_periodo_academico['id'];
    
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../periodo_academico.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar periodo academico');
			window.history.back();
			</script>
			";
	}
}


?>