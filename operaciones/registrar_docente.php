<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$dni = $_POST['dni'];
$ape_nom = $_POST['ape_nom'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$email = $_POST['correo'];
$cel = $_POST['telefono'];
$genero = $_POST['id_genero'];
$niv_edu = $_POST['nivel_educacion'];
$cond_laboral = $_POST['cond_laboral'];
$cargo = $_POST['id_cargo'];

$b_docente = buscarDocenteByDni($conexion, $dni);
$c_r_b_docente = mysqli_num_rows($b_docente);
if ($c_r_b_docente == 0) {
	$insertar = "INSERT INTO docente (dni, apellidos_nombres, fecha_nac, direccion, correo, telefono, id_genero, nivel_educacion, cond_laboral, id_cargo) VALUES ('$dni','$ape_nom', '$fecha_nac', '$direccion', '$email', '$cel', '$genero', '$niv_edu', '$cond_laboral','$cargo')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
	
	$b_id_docente = buscarDocenteByDni($conexion, $dni);
	$res_b_docente = mysqli_fetch_array($b_id_docente);
	$id_docente = $res_b_docente['id'];
	$pass = "@".$dni."#2023";
	$password_fuerte = password_hash($pass, PASSWORD_DEFAULT);

	$insertar_usu = "INSERT INTO usuarios_docentes (id_docente, usuario, password) VALUES ('$id_docente', '$dni', '$password_fuerte')";
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../docente.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar usuario');
			window.history.back();
			</script>
			";
	}
}else{
	echo "<script>
			alert('El docente ya existe, error al guardar');
			window.history.back();
			</script>
			";
}


?>