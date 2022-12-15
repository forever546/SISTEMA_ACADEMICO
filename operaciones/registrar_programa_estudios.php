<?php
include "../include/conexion.php";
$cod = $_POST['codigo'];
$tip = $_POST['tipo'];
$nombr = $_POST['nombre'];
$resolu = $_POST['resolucion'];

$consulta = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$cod','$tip','$nombr', '$resolu')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../programa_estudios1.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar programa');
			window.history.back();
			</script>
			";
	}

?>