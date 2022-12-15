<?php
include "../include/conexion.php";
$descripcion = $_POST['descripcion'];

$consulta = "INSERT INTO semestre (descripcion) VALUES ('$descripcion')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../semestre1.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar datos');
			window.history.back();
			</script>
			";
	}


?>