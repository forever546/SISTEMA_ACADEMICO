<?php
include "../include/conexion.php";
$gene = $_POST['genero'];

$consulta = "INSERT INTO genero (genero) VALUES ('$gene')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../genero.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar datos');
			window.history.back();
			</script>
			";
	}


	
?>