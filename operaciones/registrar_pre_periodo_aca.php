<?php
include "../include/conexion.php";
$fecha = $_POST['id_periodo_acad'];

//echo "id_periodo_acad=".$fecha;

$consulta = "INSERT INTO presente_periodo_acad (id_periodo_acad) VALUES ('$fecha')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../presente_per_acad.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar presente periodo academico');
			window.history.back();
			</script>
			";
	}


	
?>