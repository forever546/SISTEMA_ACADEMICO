<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$nombr = $_POST['nombre'];
$fecha_in = $_POST['fecha_inicio'];
$fecha_fi = $_POST['fecha_fin'];
$direc = $_POST['director'];
$fecha_acta = $_POST['fecha_actas'];

$consulta = "INSERT INTO periodo_academico (nombre, fecha_inicio, fecha_fin, director, fecha_actas) VALUES ('$nombr', '$fecha_in', '$fecha_fi', '$direc', '$fecha_acta')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
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


	
?>