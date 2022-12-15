<?php
include "../include/conexion.php";
$des = $_POST['descripcion'];
$pro_estu = $_POST['id_programa_estudio'];
$modulo = $_POST['id_modulo'];
$semestre = $_POST['id_semestre'];
$credito = $_POST['creditos'];
$hora = $_POST['horas'];
$tipos = $_POST['tipo'];
$orden = $_POST['orden'];
//echo "descripcion=".$des. "id_programa_estudio=".$pro_estu. "id_modulo=".$modulo."id_semestre=".$semestre. "creditos=".$credito. "horas=".$hora."tipo=".$tipos. "orden=".$orden;

$consulta = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo, id_semestre, creditos, horas, tipo, orden) VALUES ('$des','$pro_estu','$modulo', '$semestre','$credito','$hora','$tipos', '$orden')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
		echo "<script>
                alert('Registro Exitoso');
                window.location= '../unidad_didactica1.php'
    			</script>";
	}else{
		echo "<script>
			alert('Error al registrar');
			window.history.back();
			</script>
			";
	}



?>