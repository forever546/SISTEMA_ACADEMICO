<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$discr = $_POST['descripcion'];
$nume_modulo = $_POST['nro_modulo'];
$progra_estudio = $_POST['id_programa_estudio'];


$b_modulo_profecional = buscarProgramaEstudios($conexion, $cod);
$c_r_b_modulo_profecional = mysqli_num_rows($b_programa_estudios);
if ($c_r_b_modulo_profecional == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO modulo_profesional (descripcion, nro_modulo, id_programa_estudio) VALUES ('$discr','$nume_modulo','$progra_estudio')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
    $b_id_modulo_profecional = buscarProgramaEstudios($conexion, $cod);
	$res_b_modulo_profecional = mysqli_fetch_array($b_id_modulo_profecional);
    $id_modulo_profecional = $res_b_modulo_profecional['id'];
    
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../modulo_formativo.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar programa de estudios');
			window.history.back();
			</script>
			";
	}
}


?>