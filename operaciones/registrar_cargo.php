<?php
include "../include/conexion.php";
$descri = $_POST['descripcion'];

$consulta = "INSERT INTO cargo (descripcion) VALUES ('$descri')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../cargo1.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar cargo');
			window.history.back();
			</script>
			";
	}


	
?>