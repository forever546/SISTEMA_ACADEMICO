<?php
include "../include/conexion.php";
$cod_modu = $_POST['cod_modular'];
$ruc = $_POST['ruc'];
$nombre = $_POST['nombre_institucion'];
$departamento = $_POST['departamento'];
$provincia = $_POST['provincia'];
$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$nro_resolu = $_POST['nro_resolucion'];

//echo "cod_modular=".$cod_modu. "ruc=".$ruc. "nombre_institucion=".$nombre. "departamento=".$departamento."provincia=".$provincia. "distrito=".$distrito."direccion=".$direccion."telefono=".$telefono. "correo=".$correo. "nro_resolucion=".$nro_resolu;

$consulta = "INSERT INTO datos_institucionales (cod_modular, ruc, nombre_institucion, departamento, provincia, distrito, direccion, telefono, correo, nro_resolucion) VALUES ('$cod_modu', '$ruc', '$nombre', '$departamento', '$provincia','$distrito', '$direccion', '$telefono', '$correo', '$nro_resolu')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../dato_institucional.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar datos');
			window.history.back();
			</script>
			";
	}


	
?>