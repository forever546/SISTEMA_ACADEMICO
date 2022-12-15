<?php
include "../include/conexion.php";
$descripcion = $_POST['descripcion'];
$modular = $_POST['nro_modulo'];
$id_programa = $_POST['id_programa_estudio'];


$consulta = "INSERT INTO modulo_formativo (descripcion, nro_modulo, id_programa_estudio) VALUES ('$descripcion', '$modular', '$id_programa')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulo_formativo1.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar datos');
			window.history.back();
			</script>
			";
	}


	
?>