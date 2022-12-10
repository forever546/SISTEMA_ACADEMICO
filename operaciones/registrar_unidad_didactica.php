<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$des = $_POST['descripcion'];
$pro_estu = $_POST['progr_estudios'];
$modulo = $_POST['modulo'];
$semestre = $_POST['semestre'];
$credito = $_POST['creditos'];
$hora = $_POST['horas'];
$tipos = $_POST['tipo'];
$orden = $_POST['orden'];

$b_unidad_didactica = buscarUnidadDiactica($conexion, $des);
$c_r_b_unidad_didactica = mysqli_num_rows($b_unidad_didactica);
if ($c_r_b_unidad_didactica == 0) {//validamos que no haya registros en la base de datos
	$insertar = "INSERT INTO unidad_didactica (descripcion, progr_estudios, modulo, semestre, creditos, horas, tipo, orden) VALUES ('$des','$pro_estu','$modulo', '$semestre','$credito','$hora','$tipos', '$orden')";
	$ejecutar_insetar = mysqli_query($conexion, $insertar);
    $b_id_unidad_didactica = buscarUnidadDiactica($conexion, $des);
	$res_b_programa_estudios = mysqli_fetch_array($b_id_unidad_didactica);
    $id_unidad_didactica = $res_b_unidad_didactica['id'];
    
	$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);
	if ($ejec_insert_usu) {
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../unidad_didactica.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar');
			window.history.back();
			</script>
			";
	}
}


?>