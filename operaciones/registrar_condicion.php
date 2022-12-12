<?php
include "../include/conexion.php";
$descri = $_POST['descripcion'];
$cod = $_POST['codigo'];

$consulta = "INSERT INTO condicion (descripcion, codigo) VALUES ('$descri','$cod')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../condicion.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar cargo');
			window.history.back();
			</script>
			";
	}


	
?>